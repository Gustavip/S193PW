<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
   
    
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('principal') }}">{{__('Biblioteca') }}</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaregistro') ? 'text-warning' : '' }}" href="{{ route('rutaregistro') }}">
                            {{__('Registro de Libro') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container my-4">
        @yield('content')
    </div>

    <footer class= "bg-dark text-warning text-center py-3">
        <p>Biblioteca VIP 31/10/2024</p>
    </footer>
</html>

