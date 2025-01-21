<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\InstrumentController;

Route::get('/', [PublicController::class, 'home'])->name('home');


Route::get('/login', [PublicController::class, 'loginForm'])->name('login');
Route::post('/login', [PublicController::class, 'login']);
Route::get('/register', [PublicController::class, 'registerForm'])->name('register');
Route::post('/register', [PublicController::class, 'register']);
Route::post('/logout', [PublicController::class, 'logout'])->name('logout');

Route::get('/create/instrument', [InstrumentController::class, 'create'])->name('instrument.create');

Route::get('/instrument/index', [InstrumentController::class, 'index'])->name('instrument.index');
Route::get('/instrument/show/{instrument}', [InstrumentController::class, 'show'])->name('instrument.show');
Route::get('/instrument/edit/{instrument}', [InstrumentController::class, 'edit'])->name('instrument.edit');