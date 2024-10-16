@extends('layouts.plantilla')

@section('contenido')

    {{-- Inicia tarjeta con formulario --}}
    <div class="container mt-5 col-md-6">
        <div class="card font-monospace">

            <div class="card-header fs-5 text-primary">
                Registro de clientes
            </div>

            <div class="card-body text-justify">

                <form action="/enviarCliente" method="Post">
                    @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtnombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="txtapellido">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" name="txtcorreo">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="tel" class="form-control" name="txttelefono">
                    </div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">Guardar Cliente</button>
                </div>
                </form> 
            </div>
        </div>
    </div> 
    {{-- Finaliza tarjeta con formulario --}}

    @endsection