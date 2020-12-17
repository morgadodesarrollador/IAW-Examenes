<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\JcgggamasController;

use App\Http\Controllers\admin\JcggusuariosController;
use App\Http\Controllers\admin\JcggproductosController;

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
Route::resource('gamas', JcgggamasController::class);
Route::resource('usuarios', JcggusuariosController::class);
Route::resource('productos', JcggproductosController::class);
