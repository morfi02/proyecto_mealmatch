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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    @vite(['resources/js/app.js'])
</head>

<body style="background-color: #FFF3E0;">


    <!-- Navegación -->
    @include('layouts.navigation')

    <!-- Contenido Principal -->
    <main class="mt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
    <div class="container">
        <div class="row">
            <!-- Sección 1: Enlaces de la empresa -->
            <div class="col-md-3">
                <h5 class="text-uppercase">Sobre Nosotros</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light text-decoration-none">Quiénes somos</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Nuestro equipo</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Misión y visión</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Blog</a></li>
                </ul>
            </div>

            <!-- Sección 2: Enlaces de ayuda -->
            <div class="col-md-3">
                <h5 class="text-uppercase">Ayuda</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light text-decoration-none">Preguntas frecuentes</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Soporte técnico</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Términos y condiciones</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Política de privacidad</a></li>
                </ul>
            </div>

            <!-- Sección 3: Servicios -->
            <div class="col-md-3">
                <h5 class="text-uppercase">Nuestros Servicios</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light text-decoration-none">Registro de clientes</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Registro de cocineros</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Ver menús disponibles</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Realizar pedido</a></li>
                </ul>
            </div>

            <!-- Sección 4: Redes sociales y contacto -->
            <div class="col-md-3">
                <h5 class="text-uppercase">Síguenos</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light text-decoration-none">Facebook</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Instagram</a></li>
                    <li><a href="/" class="text-light text-decoration-none">Twitter</a></li>
                    <li><a href="/" class="text-light text-decoration-none">YouTube</a></li>
                </ul>
                <h5 class="mt-3">Contacto</h5>
                <p class="mb-1">Email: contacto@miweb.com</p>
                <p>Teléfono: +34 123 456 789</p>
            </div>
        </div>

        <!-- Línea de separación -->
        <hr class="my-4 bg-light">

        <!-- Copyright -->
        <div class="text-center">
            <p class="mb-0">&copy; {{ date('Y') }} MiWeb - Todos los derechos reservados</p>
        </div>
    </div>
</footer>

</body>

</html>