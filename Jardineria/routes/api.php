<?php
use App\Http\Controllers\admin\jmaClientesController;
use App\Http\Controllers\admin\jmaUsersController;
use App\Http\Controllers\admin\jmaProductosController;
use App\Http\Controllers\admin\jmaGamasProductosController;
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
Route::resource('admin/gamas', jmaGamasProductosController::class);
Route::resource('admin/clientes', jmaClientesController::class);
Route::resource('admin/productos', jmaProductosController::class);
Route::resource('admin/users', jmaUsersController::class);

