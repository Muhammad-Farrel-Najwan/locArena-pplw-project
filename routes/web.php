<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MitraLoginController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
Route::get('/register', [RegisterController::class, 'index'])
    ->name('register');
Route::get('/mitra/login', [MitraLoginController::class, 'index'])
    ->name('mitra.login');
