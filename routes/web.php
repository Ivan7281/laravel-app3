<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuctionsController;
use App\Http\Controllers\RatesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demian/cv', [\App\Http\Controllers\ResumeController::class, 'index'])
    ->name('demian');

Route::resource('Auctions', AuctionsController ::class);
Route::resource('Rates', RatesController ::class);
