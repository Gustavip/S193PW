<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title> Lista de Contactos </title>
   


</head>


<body>

    <h1 class="display-1 text-warning text-center"> Listado de Contactos </h1>

   
    <a href="{{ route('rutaformularioContacto') }}" class="btn btn-primary">Regresa al formulario</a>
    {{-- <a href="/formulario" class="btn btn-danger">se gurdo contacto</a> --}}
    
    <a href="{{ route('rutaprincipal') }}" class="btn btn-primary">Regresa al inicio</a>
    {{-- <a href="/formulario" class="btn btn-danger">se regreso al inicio</a> --}}

</body>

</html>