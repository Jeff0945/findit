<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/all-items', 'allItems')->name('all-items');
});

Route::controller(SessionController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'attemptLogin')->name('login.attempt');
        
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'attemptRegister')->name('register.attempt');
    });
    Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});
