@extends('layouts.plantilla')

@section('titulo','componentes blade')

@section('contenido')

<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar">  
    soy el contenido del primero
       </x-Card>

<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton=" no Guardar 2">  
    otro gaatoo!!
       </x-Card>

@endsection
