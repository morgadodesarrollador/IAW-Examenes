<?php

use Illuminate\Http\Request;
use App\Http\Controllers\dspGamasProductosController;
use App\Http\Controllers\dspProductosController;
use App\Http\Controllers\dspUsersController;
use App\Http\Controllers\dspClientesController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('dspgamasproductos', dspGamasProductosController::class);
Route::resource('dspproductos', dspProductosController::class);
Route::resource('dspusers', dspUsersController::class);
Route::resource('dspclientes', dspClientesController::class);