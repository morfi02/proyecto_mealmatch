<nav class="bg-white shadow-md fixed w-full z-10 top-0">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-700">MealMatch</a>
            <ul class="flex space-x-6">
                <li><a href="{{ url('/') }}" class="hover:text-blue-500">Inicio</a></li>
                <li><a href="{{ url('/') }}" class="hover:text-blue-500">Sobre Nosotros</a></li>
                <li><a href="{{ url('/') }}" class="hover:text-blue-500">Cocineros</a></li>
                <li><a href="{{ url('/') }}" class="hover:text-blue-500">Contacto</a></li>
                <li><a href="{{ url('/') }}" class="hover:text-blue-500">Carrito</a></li>
                <li><a href="{{ route('register.client') }}">Registrarme como Cliente</a></li>
                <li><a href="{{ route('register.cook') }}">Registrarme como Cocinero</a></li>

            </ul>
        </div>
    </div>
</nav>