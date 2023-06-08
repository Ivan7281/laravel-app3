<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\LotauctionResource;
use App\Http\Resources\RateResource;
use App\Models\Lotauction;
use App\Models\Rate;
use App\Http\Controllers\API\AuctionsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('lotauction', AuctionsController::class);


Route::get('lotauctions', function ()
{
   return LotauctionResource::collection(Lotauction::all());
});
Route::get('rate', function ()
{
    return RateResource::collection(Rate::all());
});
Route::get('lotauctions', function ()
{
    return LotauctionResource::collection(Lotauction::paginate());
})->middleware('auth:api');
Route::get('rate', function ()
{
    return RateResource::collection(Rate::paginate());
})->middleware('auth:api');

Route::get('lotauctions', function () {
})->middleware(['auth:sanctum', 'abilities:check-status']);

Route::get('rate', function () {
})->middleware(['auth:sanctum', 'abilities:check-status']);

