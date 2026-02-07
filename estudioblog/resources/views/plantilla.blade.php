<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo', 'Blog')</title>

    {{-- Estilos y scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Barra de navegación --}}
    @include('partials.nav')
    {{ fechaActual('d/m/Y') }}

    {{-- Contenido principal --}}
    <main class="container mt-4">
        @yield('contenido')
    </main>

</body>
</html>
