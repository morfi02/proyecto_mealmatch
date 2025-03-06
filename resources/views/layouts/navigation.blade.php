<nav class="bg-blue-500 text-white">
    <div class="container mx-auto flex justify-between items-center py-3">
        <a href="{{ route('home') }}" class="text-xl font-bold">MealMatch</a>

        <div class="space-x-4">
            <a href="{{ route('home') }}" class="hover:underline">Inicio</a>
            @auth
                @if(Auth::user()->rol === 'cliente')
                    <a href="{{ route('zona.cliente') }}" class="hover:underline">Zona Cliente</a>
                @endif
                <a href="{{ route('profile.edit') }}" class="hover:underline">Perfil</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:underline">Cerrar sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:underline">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="hover:underline">Registrarse</a>
            @endauth
        </div>
    </div>
</nav>
