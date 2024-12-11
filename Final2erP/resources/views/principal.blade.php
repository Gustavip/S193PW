<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title> Home </title>
   


</head>


<body>



    <h1 class="display-1 text-danger text-center"> Inicio de sesion </h1>
    <a href="{{ route('rutaformularioContacto') }}" class="btn btn-primary">Ir al formulario</a>
   {{-- <a href="/formulario" class="btn btn-danger">Ir al formulario</a> --}}


</body>

</html>