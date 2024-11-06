<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('vistaRegistro');
});
/*  
Route::get('/', [controladorPrenda::class, 'inicio'])->name('rutaVista');
  */