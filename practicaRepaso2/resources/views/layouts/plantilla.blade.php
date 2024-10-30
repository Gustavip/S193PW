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
    {{-- inicia navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('principal') }}">Biblioteca</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('libro.create') ? 'text-warning' : '' }}" href="{{ route('libro.create') }}">
                            Registro de Libros
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- termina navbar --}}

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Biblioteca </p>
    </footer>
</html>

