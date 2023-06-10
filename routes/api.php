<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\LotauctionResource;
use App\Http\Resources\LotauctionCollection;
use App\Http\Resources\RateResource;
use App\Http\Resources\RateCollection;
use App\Models\Lotauction;
use App\Models\Rate;
use App\Http\Controllers\API\AuctionsController;
use App\Http\Controllers\SanctumController;
use App\Http\Controllers\ApiTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
| 1|LehQumaRVD6GWYGEH6GUZkaqNyp169sJguPUSOa0
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/token/update',
    [ApiTokenController::class, 'update'])->middleware('auth')->name('update_token');

// Create sanctum token
Route::post('/register', [SanctumController::class, 'register']);
Route::post('/login', [SanctumController::class, 'login']);

// Sanctum
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Controller
    Route::resource('lotauction', AuctionsController::class);

    // Resource lot
    Route::get('/lotauctions/{id}', function (string $id) {
        return new LotauctionResource(Lotauction::findOrFail($id));
    });
    Route::get('/lotauctions', function () {
        return new LotauctionCollection(Lotauction::paginate(4));
    });

    // Resource rate
    Route::get('/rates/{id}', function (string $id) {
        return new RateResource(Rate::findOrFail($id));
    });
    Route::get('/rates', function () {
        return new RateCollection(Rate::paginate(4));
    });

    // Delete sanctum token
    Route::post('/logout', [SanctumController::class, 'logout']);
});

