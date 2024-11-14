<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaFormulario');

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes'); */
/* 
Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaFormulario');
Route::view('/consultar','clientes')->name('rutaClientes'); */
/* 
Route::view('/component','componentes')->name('rutacomponent');  */ 

/* rutas para controlador vistas  */

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');



Route::get('/consultar', [ControladorVistas::class, 'consulta'])->name('rutaClientes');

Route::post('/enviarCliente', [ControladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

/* rutas para controlador clientesController */


Route::get('/cliente/create', [ClienteController::class, 'create'])->name('rutaFormulario');


