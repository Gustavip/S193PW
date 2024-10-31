<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{


    public function index()
    {
        return view('principal');
    }

    public function create()
    {
        return view('registro_libro');
    }

    public function store(Request $request)
    {
        // Validaciones
        $request->validate([
            'isbn' => 'required|numeric|digits:13',            // Solo números, exactamente 13 dígitos
            'Titulo' => 'required|string|max:150',             // String, máximo 150 caracteres
            'Autor' => 'required|string|max:255',              // String, máximo 255 caracteres
            'Paginas' => 'required|integer|min:1',             // Solo enteros positivos
            'Año' => [
                'required',
                'integer',
                'digits:4',
                'min:1000',                                    // Mínimo año permitido
                'max:' . date('Y'),                            // Máximo hasta el año actual
            ],
            'Editorial' => 'required|string|max:255',          // String, máximo 255 caracteres
            'Correo' => 'required|email'                       // Formato de correo electrónico
        ]);
    
        // Guardar en la base de datos (suponiendo que el modelo Libro existe)
        // \App\Models\Libro::create($request->all());
    
        // Mensaje de éxito
        return redirect()->route('libro.create')->with('success', "Libro '{$request->Titulo}' guardado correctamente");
    }
    
}