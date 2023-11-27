<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\HomeController::class, 'create']);

Route::get('/', [\App\Http\Controllers\NewsControllers::class, 'index']);
Route::get('/news/create', [\App\Http\Controllers\NewsControllers::class, 'create']);

Route::get('/currency',[\App\Http\Controllers\CurrencyController::class, 'index']);
Route::get('/currency/create',[\App\Http\Controllers\CurrencyController::class, 'create']);
Route::post('/currency/store',[\App\Http\Controllers\CurrencyController::class, 'store']);
