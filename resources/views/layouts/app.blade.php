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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        thead th {
            background-color: #f5f5f5;
            padding: 12px;
            border-bottom: 2px solid #ddd;
            text-align: left;
        }

        tbody td {
            padding: 10px 12px;
            border-bottom: 1px solid #e0e0e0;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
