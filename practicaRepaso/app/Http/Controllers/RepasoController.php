<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepasoController extends Controller
{
    
    public function inicio()  
{
    return view('repaso1', ['resultado' => null ]);  /*  retorta a la vista repaso1 */
}

public function convertir(Request $request) /* permite acceder a los datos enviados en un formulario. */
{
    $cantidad = $request->input('cantidad');
    $conversion = $request->input('conversion'); /*  Se obtienen de los inputs del formulario */
    $resultado = '';

    switch ($conversion) {
        case 'mb_to_gb':
            $resultado = $cantidad / 1024 . ' GB';
            break;
        case 'gb_to_mb':
            $resultado = $cantidad * 1024 . ' MB';
            break;
        case 'gb_to_tb':
            $resultado = $cantidad / 1024 . ' TB';
            break;
        case 'tb_to_gb':
            $resultado = $cantidad * 1024 . ' GB';
            break;
    }

    return view('repaso1', ['resultado' => $resultado]); /* retorna la vista */
}

}

