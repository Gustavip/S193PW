<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
   /*  usamos este controlaro para administrar la logica de las vistas  */
   
    public function home()
    {
        return view('inicio');
    }
    public function fromulario()
    {
    
        return view('formulario');
    }
    public function consulta()
    {
        return view('clientes');
    }
}
