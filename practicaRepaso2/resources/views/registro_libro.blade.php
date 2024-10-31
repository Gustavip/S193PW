@extends('layouts.plantilla')
@section('title', 'Registro de Libro')
@section('content')
    <div class="container mt-8 col-md-10"> 
        <h1>Registro de Libro</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <form action="{{ route('libro.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN:</label>
                <input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}">
                <small class="text-danger fst-italic">{{ $errors->first('isbn') }}</small>
            </div>
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" name="Titulo" class="form-control" value="{{ old('Titulo') }}">
                <small class="text-danger fst-italic">{{ $errors->first('Titulo') }}</small>
            </div>
            
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" name="Autor" class="form-control" value="{{ old('Autor') }}">
                <small class="text-danger fst-italic">{{ $errors->first('Autor') }}</small>
            </div>
            
            <div class="mb-3">
                <label for="paginas" class="form-label">Páginas:</label>
                <input type="text" name="Paginas" class="form-control" value="{{ old('Paginas') }}">
                <small class="text-danger fst-italic">{{ $errors->first('Paginas') }}</small>
            </div>
            
            <div class="mb-3">
                <label for="anio" class="form-label">Año:</label>
                <input type="text" name="Año" class="form-control" value="{{ old('Año') }}">
                <small class="text-danger fst-italic">{{ $errors->first('Año') }}</small>
            </div>
            
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" name="Editorial" class="form-control" value="{{ old('Editorial') }}">
                <small class="text-danger fst-italic">{{ $errors->first('Editorial') }}</small>
            </div>
            
            <div class="mb-3">
                <label for="Correo" class="form-label">Correo:</label>
                <input type="text" name="Correo" class="form-control" value="{{ old('Correo') }}">
                <small class="text-danger fst-italic">{{ $errors->first('Correo') }}</small>
            </div>
             
            <button type="submit" class="btn btn-success btn-sm">Guardar Libro</button>
        </form>
    </div>
@endsection
