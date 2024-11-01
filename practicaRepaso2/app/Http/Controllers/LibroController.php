<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validaciones;

class LibroController extends Controller
{


    public function index()
    {
        return view('principal');
    }

    public function Registro()
    {
        return view('registro_libro');
    }

    public function procesarFormulario(validaciones $peticion)
    {
       
        $validacion= $peticion->validate
        ([
            'isbn' => 'required|numeric|digits:13',            
            'Titulo' => 'required|string|max:150',            
            'Autor' => 'required|string|max:255',             
            'Paginas' => 'required|integer|min:1',            
            'Año' => 'required|integer|digits:4|min:1000|max:2024',

            'Editorial' => 'required|string|max:255',         
            'Correo' => 'required|email'  
        ]);

   

        $libro = $peticion->input('Titulo');
        session()->flash('exito', 'todo correcto:libro'.$libro.' guardado ' );
        return to_route('rutaregistro');
        


    }


    
}