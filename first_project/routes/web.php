<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/about', 'landing.about')->name('about');
/*
    Route::get('/hello-world');
    Route::post();
    Route::put();
    Route::delete();
    Route::patch();
*/