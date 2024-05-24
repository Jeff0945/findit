<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('attachments/{attachment}', [AttachmentController::class, 'show'])->name('attachments.show');

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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::group(['controller' => ItemsController::class, 'prefix' => 'items'], function () {
        Route::get('/', 'index')->name('admin.items.index');
        Route::get('/create', 'create')->name('admin.items.create');
        Route::post('/', 'store')->name('admin.items.store');
        Route::get('/{item}', 'show')->name('admin.items.show');
        Route::get('/{item}/edit', 'edit')->name('admin.items.edit');
        Route::patch('/{item}', 'update')->name('admin.items.update');
    });
});
