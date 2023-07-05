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

Route::get('/', [App\Http\Controllers\RotasController::class,'rota_raiz'])->name('home');

Route::get('/cad_user', [App\Http\Controllers\RotasController::class,'rota_cad_user'])->name('cad');

Route::post('/cad_users_back', [App\Http\Controllers\UserController::class,'cad_users'])->name('cadastra_users_back_end');

