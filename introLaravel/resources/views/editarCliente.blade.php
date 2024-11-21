@extends('layouts.plantilla')

@section('contenido')

<div class="container mt-5 col-md-8">
    <h2>Actualizar Cliente</h2>
    <form method="POST" action="{{ route('rutaActualizar', $editar->id) }}">
    @csrf
    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label"> {{__('Nombre') }}</label>
                        <input value="{{$editar->nombre}}" type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido') }}</label>
                        <input value="{{$editar->apellido}}" type="text" class="form-control" name="txtapellido"value="{{old('txtapellido')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo') }}</label>
                        <input value="{{$editar->correo}}" type="text" class="form-control" name="txtcorreo"value="{{old('txtcorreo')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono') }}</label>
                        <input value="{{$editar->telefono}}" type="text" class="form-control" name="txttelefono"value="{{old('txttelefono')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
            
            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm"> {{__('Guardar Cliente') }}</button>
                </div>
                </form> 
</div>
@endsection
