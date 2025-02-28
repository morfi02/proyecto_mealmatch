<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Rutas para registro de clientes
Route::get('/register/client', [RegisterController::class, 'showClientRegistrationForm'])
    ->name('register.client');
Route::post('/register/client', [RegisterController::class, 'registerClient'])
    ->name('register.client.post');

// Rutas para registro de cocineros
Route::get('/register/cook', [RegisterController::class, 'showCookRegistrationForm'])
    ->name('register.cook');
Route::post('/register/cook', [RegisterController::class, 'registerCook'])
    ->name('register.cook.post');





    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
