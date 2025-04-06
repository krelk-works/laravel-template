<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi Sitio Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap (opcional) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Estilos personalizados --}}
    <style>
        body {
            padding-top: 80px;
        }
    </style>
</head>
<body>

    {{-- CABECERA --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Mi Proyecto Laravel</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Cerrar sesión</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- CONTENIDO DE CADA VISTA --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- PIE DE PÁGINA --}}
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            &copy; {{ date('Y') }} Mi Proyecto Laravel - Todos los derechos reservados.
        </div>
    </footer>

    {{-- Scripts opcionales --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
