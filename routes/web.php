<?php

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

Route::get('/',             [SitioController::class, 'inicio'] );

Route::get('/login',        [SitioController::class, 'login'] );
Route::get('/ofertas',      [SitioController::class, 'ofertas'] );
Route::get('/tienda',       [SitioController::class, 'productos'] );

Route::get('/tienda/producto/{id}',       [SitioController::class, 'mostrarProductoPorId'] );

// obtener listado productos





Route::get('/productos', [UserController::class, 'index']);
Route::post('/productos', [UserController::class, 'store']);
Route::put('/productos/{id}', [UserController::class, 'update']);
Route::delete('/productos/{id}', [UserController::class, 'destroy']);



Route::get('/test',             [SitioController::class, 'test'] );