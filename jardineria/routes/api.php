<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\cofClientesController;
use App\Http\Controllers\Admin\cofGamaProductosController;
use App\Http\Controllers\Admin\cofProductosController;
use App\Http\Controllers\Admin\cofUsersController;

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

Route::resource('admin/cofclientes', cofClientesController::class);
Route::resource('admin/cofgamaproductos', cofGamaProductosController::class);
Route::resource('admin/cofproductos', cofProductosController::class);
Route::resource('admin/cofusers', cofUsersController::class);
