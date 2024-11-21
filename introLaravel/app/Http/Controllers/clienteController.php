<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultarClientes= DB::table('clientes')->get();
        return view('clientes',compact('consultarClientes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }
    /**
     * aqui va el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);

        $usuario=$request->input('txtnombre');
        session()->flash('exito','se guardo el usuario: '.$usuario);
        return to_route('rutaFormulario');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar = DB::table('clientes')->where('id', $id)->first();
        return view('editarCliente', compact('editar'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'txtnombre' => 'required|max:255',
            'txtapellido' => 'required|max:255',
            'txtcorreo' => 'required|email',
            'txttelefono' => 'required|numeric',
        ]);
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now(),
        ]);

        $actualizar=$request->input('txtnombre');
        session()->flash('exito', 'Cliente actualizado con éxito:'.$actualizar);
        return to_route('rutaClientes');
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();
        
        return redirect()->route('rutaClientes')->with('exito', 'Cliente eliminado correctamente');
    }
}
