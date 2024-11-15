<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;


class ControladorVistas extends Controller
{
   /*  usamos este controlaro para administrar la logica de las vistas  */
   
    public function home()
    {
        return view('inicio');
    }
    public function formulario()
    {
    
      
    }
    public function consulta()
    {
        
    }

    public function procesarCliente(validadorCliente $peticion)
    {


    $usuario= $peticion->input('txtnombre');

    session()->flash('exito','se guardo el usuario: '.$usuario);
    return to_route('rutaFormulario');



       
    }

}
