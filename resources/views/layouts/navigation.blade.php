<nav class="#FFF3E0 text-black">
    <div class="container mx-auto flex justify-between items-center py-3">
        <a href="{{ route('home') }}" class="text-xl font-bold">MealMatch</a>

        <div class="space-x-4">
            <a href="{{ route('home') }}" class="hover:underline">Inicio</a>
            @auth
                @if (Auth::check())
                    @if (Auth::user()->rol === 'cliente')
                        <a href="{{ route('cliente.dashboard') }}">Panel Cliente</a>
                    @elseif (Auth::user()->rol === 'cocinero')
                        <a href="{{ route('cocinero.dashboard') }}">Panel Cocinero</a>
                    @endif
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