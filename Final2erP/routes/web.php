<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;


/* 
Route::view('/component','componentes')->name('rutacomponent');  
 */
Route::get('/', [ControladorVistas::class, 'principal'])->name('rutaprincipal');

Route::get('/form', [ControladorVistas::class, 'formularioContacto'])->name('rutaformularioContacto');

Route::get('/consultar', [ControladorVistas::class, 'ListadoContactos'])->name('rutaListadoContactos');


