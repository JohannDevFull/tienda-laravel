<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin -
Route::get('/',             [AdminController::class, 'index'] );
Route::post('/auth-ok',      [AdminController::class, 'auth'] );
Route::post('/auth-close',   [AdminController::class, 'authClose'] );


Route::get('/inicio',       [SitioController::class, 'inicio'] );

Route::get('/login',        [SitioController::class, 'login'] );
Route::get('/ofertas',      [SitioController::class, 'ofertas'] );
Route::get('/tienda',       [SitioController::class, 'productos'] );

Route::get('/tienda/producto/{id}',       [SitioController::class, 'mostrarProductoPorId'] );

// obtener listado productos





Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/edit/{id}', [ProductosController::class, 'edit']);

Route::post('/productos', [ProductosController::class, 'store']);
Route::put('/productos/{id}', [ProductosController::class, 'update']);
Route::delete('/productos/{id}', [ProductosController::class, 'destroy']);



Route::get('/test',             [SitioController::class, 'test'] );