<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaFormulario');

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes'); */

Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaFormulario');
Route::view('/consultar','clientes')->name('rutaClientes');
Route::view('/component','componentes')->name('rutacomponent');
