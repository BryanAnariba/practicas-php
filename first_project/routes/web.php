<?php

use Illuminate\Support\Facades\Route;

// Usadas para landings estas no usan controlador debido a que no es necesario
Route::view('/', 'index')->name('index');
Route::view('/about', 'landing.about')->name('about');

// Estas son para usarlas con servicios ya que hacen operaciones que involucran data proveniente de la base de datos
/*
    Route::get('/hello-world');
    Route::post();
    Route::put();
    Route::delete();
    Route::patch();
*/