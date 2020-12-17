<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\jrcUsersController;
use App\Http\Controllers\admin\jrcClientesController;
use App\Http\Controllers\admin\jrcProductosController;
use App\Http\Controllers\admin\jrcGamasProductosController;

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

Route::resource('admin/jrcUsers', jrcUsersController::class);
Route::resource('admin/jrcClientes', jrcClientesController::class);
Route::resource('admin/jrcProductos', jrcProductosController::class);
Route::resource('admin/jrcGamasProductos', jrcGamasProductosController::class);
