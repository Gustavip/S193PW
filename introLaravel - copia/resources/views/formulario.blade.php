@extends('layouts.plantilla')

@section('contenido')

    {{-- Inicia tarjeta con formulario --}}

     {{--@dump($id)--}}
    <div class="container mt-5 col-md-6">
          
        @if(session('exito'))
      <x-alert tipo="success"> {{session('exito')}} </x-alert>
      @endif

      @session('exito')
      <x-alert tipo="warning"> {{ $value }} </x-alert>
      @endsession

      @session('exito')
       <script> Swal.fire({
        title: "Respuesta del servidor", text: "{{$value}} ", icon: "success" }); </script>  
      @endsession

        <div class="card font-monospace">

            <div class="card-header fs-5 text-primary">
                 {{__('Registro de clientes') }}
            </div>

            <div class="card-body text-justify">

                <form action="/enviarCliente" method="Post">
                    @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label"> {{__('Nombre') }}</label>
                        <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido') }}</label>
                        <input type="text" class="form-control" name="txtapellido"value="{{old('txtapellido')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo') }}</label>
                        <input type="text" class="form-control" name="txtcorreo"value="{{old('txtcorreo')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono') }}</label>
                        <input type="text" class="form-control" name="txttelefono"value="{{old('txttelefono')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm"> {{__('Guardar Cliente') }}</button>
                </div>
                </form> 
            </div>
        </div>
    </div> 
    {{-- Finaliza tarjeta con formulario --}}

    @endsection