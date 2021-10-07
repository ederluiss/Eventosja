<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ConvidadoController;
use App\Http\Controllers\ConviteController;
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

Route::get('/', [EventoController::class, 'index']);
Route::get('eventos/search', [ConviteController::class, 'search'])->name('eventos.search');
Route::resource('eventos', EventoController::class);
Route::resource('convidados', ConvidadoController::class);
Route::resource('convites', ConviteController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');