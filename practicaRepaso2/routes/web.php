<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LibroController;

Route::get('/', [LibroController::class, 'index'])->name('principal'); /* ruta principal de inicio  */
Route::get('/registro', [LibroController::class, 'create'])->name('libro.create'); /* ruta para el registro */
Route::post('/registro', [LibroController::class, 'store'])->name('libro.store'); /* ruta para guardar  */

