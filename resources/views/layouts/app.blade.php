<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MealMatch - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body style="background-color: #FFF3E0;">


    <!-- Navegación -->
    @include('layouts.navigation')

    <!-- Contenido Principal -->
    <main class="mt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow py-4 text-center mt-12">
        <p class="text-gray-600">&copy; 2025 MealMatch. Todos los derechos reservados.</p>
    </footer>
</body>

</html>