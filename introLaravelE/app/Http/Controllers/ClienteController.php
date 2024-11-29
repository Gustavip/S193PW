<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Request\validadorCliente;

class ClienteController extends Controller
{

    public function home()
    {
        return view('inicio');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta= cliente::all();
        return view('clientes',compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        $addCliente= new cliente();
        $addCliente->nombre= $request->input('txtnombre');
        $addCliente->apellido= $request->input('txtapellido');
        $addCliente->correo= $request->input('txtcorreo');
        $addCliente->telefono= $request->input('txttelefono');
        $addCliente->save();

        $msj= $request->input('txtnombre');
        session()->flash('exito','se guardo el cliente: '.$msj);
        return redirect()->black();
        }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        return view('formulario_editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
   
        public function update(validadorCliente $request, cliente $cliente)
    {
        // Actualizar el cliente
    $cliente->nombre = $request->input('txtnombre');
    $cliente->apellido = $request->input('txtapellido');
    $cliente->correo = $request->input('txtcorreo');
    $cliente->telefono = $request->input('txttelefono');
    $cliente->save();

    // Redirigir con mensaje de éxito
    session()->flash('exito', 'El cliente ha sido actualizado con éxito.');
    return redirect()->route('cliente.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
   
        public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return back()->with('exito', 'Cliente eliminado exitosamente.');
    

}
    
}
