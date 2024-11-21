@extends('layouts.plantilla')

@section('contenido')

    {{-- Inicia tarjetaCliente --}}

    @if(session('success'))
    <div class="alert alert-sucess">{{ session('success')}}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error')}}</div>
    @endif
    <div class="container mt-5 col-md-8">
    @session('exito')
       <script> Swal.fire({
        title: "Respuesta del servidor", 
        text: "{{$value}} ",
         icon: "success" }); </script>  
      @endsession

    @foreach ($consultarClientes as $cliente)
    

    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            Gustavo Gudiño Rangel 
        </div>

        <div class="card-body">
            <h5 class="fw-bold"> {{ $cliente->nombre }}</h5>
            <h5 class="fw-medium">{{ $cliente->correo }}</h5>
            <p class="card-text fw-lighter"> {{ $cliente->telefono }}</p>


        </div>

        <div class="card-footer text-muted">
            <form action="{{ route('rutaEditar', $cliente->id)}}"> 
            <button type="submit" class="btn btn-warning btn-sm"> {{__('Actualizar') }}</button>
            </form>

            <form action="{{ route('rutaEliminar', $cliente->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Seguro que quieres eliminar');">
    @method("DELETE")
    @csrf
    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
</form>
        </div>
    </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

    
    </div> {{--divContainer--}}
    @endsection
