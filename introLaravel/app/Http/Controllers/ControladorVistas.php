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
    public function formulario()
    {
    
        return view('formulario');
    }
    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(request $peticion)
    {
    /* return 'si llego la info del cliente wey'; */
       /*  Muestra todo lo que trae la peticion  */
   /*  return $peticion->all(); */
    
   /* ruta de donde se realizo la peticion  */
   /*  return $peticion->path(); */

   /*  Url del origen la peticion */ 
    /* return $peticion->url(); */

   /*  Url del origen la peticion  */

   //redireccion usando la ruta 
   /*  return redirect('/');
 */
      //redireccion usando el nombre de la ruta 
   /*  return redirect()->route('rutaClientes'); */

    //redireccion al origen de la peticion 
    /* return back(); */

    //redireccion con variable adjunta
    /* $id= [['usuario'=>1],['usuario'=>2]];

    return view('formulario',compact('id')); */

   //redireccion con un mensaje flash en session 
    $usuario= $peticion->input('txtnombre');

    session()->flash('exito','se guardo el usuario: '.$usuario);
    return to_route('rutaFormulario');



       
    }

}
