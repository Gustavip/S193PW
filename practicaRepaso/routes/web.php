<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/repaso1', [App\Http\Controllers\RepasoController::class, 'inicio'])->name('repaso1');/*  Obtiene la ruta */
Route::post('/convertir', [App\Http\Controllers\RepasoController::class, 'convertir'])->name('convertir'); /* para donde dirije */
