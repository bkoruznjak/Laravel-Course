<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/subscribers', [\App\Http\Controllers\SubscriberController::class, 'all'])->name('subscribers.all');

