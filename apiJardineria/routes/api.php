<?php

use App\Http\Controllers\jppClientesController;
use App\Http\Controllers\jppGamasProductosController;
use App\Http\Controllers\jppProductosController;
use App\Http\Controllers\jppUsersController;
use Illuminate\Http\Request;
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

Route::resource('admin/cliente', jppClientesController::class);

Route::resource('admin/user', jppUsersController::class);

Route::resource('admin/producto', jppProductosController::class);

Route::resource('admin/gamaproducto', jppGamasProductosController::class);
