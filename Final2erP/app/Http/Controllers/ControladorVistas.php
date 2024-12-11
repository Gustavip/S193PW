<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
  
   
    public function principal()
    {
        return view('principal');
    }
    public function formularioContacto()
    {
    
        return view('formularioContacto');
    }
    public function ListadoContactos()
    {
        return view('ListadoContactos');
    }

    /* $validacion= $peticion->validate([
        'txtnombre'=> 'required |min:4 |max:10',
        'txtcorreo'=> 'required | email:rfc,dns',
        'txttelefono'=> 'required |numeric',
    ]); */

   
}