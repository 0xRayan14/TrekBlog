<?php

use App\Http\Controllers\Blog\BlogController;
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

Route::get('/', [BlogController::class, 'index'])->name('blog.index');


Route::get('/inscription',[\App\Http\Controllers\Auth\AuthController::class, 'showRegister'])->name('auth.register')->middleware('guest');
Route::post('/inscription',[\App\Http\Controllers\Auth\AuthController::class, 'register']);

Route::get('/connexion',[\App\Http\Controllers\Auth\AuthController::class, 'showLogin'])->name('auth.login')->middleware('guest');
Route::post('/connexion',[\App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::delete('/deconnexion', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('auth.logout');
