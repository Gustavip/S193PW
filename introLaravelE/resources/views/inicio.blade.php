<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> {{__('Inicio') }}</title>
    @vite(['resources/js/app.js'])

    <style>
        body, html{
            height: 100%;
        }
        .full-height{
            height: 100vh;
        }
    </style>

</head>
<body>

  <div class="d-flex flex-column justify-content-center align-items-center full-height">

   <h1 class="display-1">{{__('Bienvenido Turista Gus') }}</h1>
   <p>{{__('Preciona el boton para iniciar') }}</p>

  <!--<a href="/form" class="btn btn-primary">Ir al registro</a> -->
   <a href="/form" class="btn btn-danger">{{__('Ir al registro') }}</a> 
   <a href="{{ route('cliente.create') }}" class="btn btn-primary">{{__('Ir al registro') }}</a> 
   
  </div>
    
</body>
</html>