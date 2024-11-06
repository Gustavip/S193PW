<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPrenda extends Controller


    public funcion inicio()
{
    return view ('rutaVista');
}
public function guardarPrenda(Request $request)
{
    
    $validatedData = $request->validate([
        'prenda' => 'required|string',
        'color' => 'required|string',
        'cantidad' => 'required|integer',
    ]);
}
