<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/all-items', 'allItems')->name('all-items');
});
