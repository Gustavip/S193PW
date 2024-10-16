<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

    <title> @yield('titulo') </title>

</head>
<body>
{{--inicia navbar--}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('rutaInicio')}}"> Turista sin Maps</a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rutaFormulario')? 'text-warning' : '' }}" aria-current="page" href="{{ route('rutaFormulario') }}">Registro Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('rutaClientes')? 'text-warning' : ''}}" href="{{ route('rutaClientes') }}">Consulta Clientes</a>
                </li>

                </ul>
            </div>
        </div>
    </nav>
    {{-- Finaliza navbar --}}

    @yield('contenido')

    
    

</body>
</html>