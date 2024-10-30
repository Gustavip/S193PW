<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LibroController::class, 'inicio'])->name('principal');
Route::get('/registro', [LibroController::class, 'crear'])->name('registro_libro');
Route::post('/registro', [LibroController::class, 'almacenar'])->name('libro.almacenar');