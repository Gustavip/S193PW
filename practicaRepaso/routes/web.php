<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/repaso1', [App\Http\Controllers\RepasoController::class, 'index'])->name('repaso1');
