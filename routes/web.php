<?php

use Illuminate\Support\Facades\Route;

Route::get('/all-items', function () {
    return view('public.all-items');
});
