<?php

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


use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ModelosController;

Route::get('/', [EventController::class, 'index']);
Route::get('/users/list', [EventController::class, 'list']);


// Rota para users
Route::get('/users', [UserController::class, 'index']);

// Rota para cars
Route::get('/cars', [CarController::class, 'index']);

// Rota para viagens
Route::get('/trip', [TripController::class, 'index']);

// Rota para marcas
Route::get('/marcas', [MarcasController::class, 'index']);

// Rota para modelos
Route::get('/modelos', [ModelosController::class, 'index']);