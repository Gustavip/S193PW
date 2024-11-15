@extends('layouts.plantilla')

@section('contenido')
    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

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
            <button type="submit" class="btn btn-warning btn-sm"> {{__('Actualizar') }}</button>
            <button type="submit" class="btn btn-danger btn-sm">  {{__('Eliminar') }} </button>
        </div>
    </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

    
    </div> {{--divContainer--}}
    @endsection
