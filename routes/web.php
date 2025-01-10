<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');


Route::get('/login', [PublicController::class, 'loginForm'])->name('login');
Route::post('/login', [PublicController::class, 'login']);
Route::get('/register', [PublicController::class, 'registerForm'])->name('register');
Route::post('/register', [PublicController::class, 'register']);
Route::post('/logout', [PublicController::class, 'logout'])->name('logout');