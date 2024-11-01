<?php
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', [LibroController::class, 'index'])->name('principal'); /* ruta principal de inicio  */
Route::get('/registro', [LibroController::class, 'Registro'])->name('rutaregistro'); /* ruta para el registro */
Route::post('/registro', [LibroController::class, 'procesarFormulario'])->name('rutaregistro'); /* ruta para guardar  */



