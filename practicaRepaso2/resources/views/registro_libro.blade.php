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
                <input type="text" class="isbn" name="isbn" class="{{old('txtISBN')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtISBN')}}</small>
            </div>
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="titulo" name="Titulo" class="{{old('txtTitulo')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtTitulo')}}</small>
            </div>
            
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" class="Autor" name="Autor" class="{{old('txtAutor')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtAutor')}}</small>
                
            </div>
            
            <div class="mb-3">
                <label for="paginas" class="form-label">Páginas:</label>
                <input type="text" class="Paginas" name="Paginas" class="{{old('txtPaginas')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtPaginas')}}</small>
                
            </div>
            
            <div class="mb-3">
                <label for="anio" class="form-label">Año:</label>
                <input type="text" class="Año" name="Año" class="{{old('Año')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtAño')}}</small>
                
            </div>
            
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" class="Editorial" name="Editorial" class="{{old('txtEditorial')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtEditorial')}}</small>
                
            </div>
            
            <div class="mb-3">
                <label for="Correo" class="form-label">Correo:</label>
                <input type="text" class="Correo" name="Correo" class="{{old('txtCorreo')}}">
                        <samll class="text-danger fst-italic">{{ $errors->first('txtCorreo')}}</small>
                        </div class="row mb-3">
            </div>
             
            <button type="submit" class="btn btn-success btn-sm">Guardar Libro</button>
        </form>
    </div>

@endsection
