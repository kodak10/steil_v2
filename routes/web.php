<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
Route::get('/', [IndexController::class, 'index'] );
Route::get('/engins', [IndexController::class, 'engin'] );
Route::get('/pieces', [IndexController::class, 'pieceMoteur'] );
Route::get('/reparation', [IndexController::class, 'reparation'] );
Route::get('/contact', [IndexController::class, 'contact'] );



