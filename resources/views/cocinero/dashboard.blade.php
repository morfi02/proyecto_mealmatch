@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#FFF3E0] p-6"> <!-- Fondo cálido pastel -->
    <div class="max-w-7xl mx-auto">
        <!-- Encabezado -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-[#FF6F61]">Dashboard del Cocinero</h1>
            <p class="mt-2 text-[#6B5B95]">Bienvenido, {{ Auth::user()->name }}</p>
        </div>

        <!-- Formulario para crear platos -->
        <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 mb-8 border border-[#A2DDF0]">
            <h2 class="text-2xl font-bold text-[#6B5B95] mb-4">Publicar Nuevo Plato</h2>
            <form action="{{ route('dishes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-[#6B5B95] text-sm font-medium mb-2">Nombre del Plato</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="w-full px-4 py-2 border border-[#A2DDF0] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6F61] focus:border-transparent"
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-[#6B5B95] text-sm font-medium mb-2">Descripción</label>
                    <textarea 
                        name="description" 
                        class="w-full px-4 py-2 border border-[#A2DDF0] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6F61] focus:border-transparent"
                        rows="3"
                        required
                    ></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-[#6B5B95] text-sm font-medium mb-2">Precio</label>
                    <input 
                        type="number" 
                        step="0.01" 
                        name="price" 
                        class="w-full px-4 py-2 border border-[#A2DDF0] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6F61] focus:border-transparent"
                        required
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-[#6B5B95] text-sm font-medium mb-2">Imagen</label>
                    <input 
                        type="file" 
                        name="image" 
                        class="w-full px-4 py-2 border border-[#A2DDF0] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF6F61] focus:border-transparent"
                        required
                    >
                </div>
                <button 
                    type="submit" 
                    class="w-full bg-[#FF6F61] text-white py-2 px-4 rounded-lg hover:bg-[#FF8C7F] transition duration-300"
                >
                    Publicar Plato
                </button>
            </form>
        </div>

        <!-- Listado de platos -->
        <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 border border-[#A2DDF0]">
            <h2 class="text-2xl font-bold text-[#6B5B95] mb-4">Tus Platos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($dishes as $dish)
                <div class="bg-[#F0F8FF] rounded-xl shadow-md overflow-hidden">
                    <img src="{{ asset('storage/' . $dish->image) }}" class="w-full h-48 object-cover" alt="{{ $dish->name }}">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-[#6B5B95]">{{ $dish->name }}</h3>
                        <p class="text-[#6B5B95] mt-2">{{ $dish->description }}</p>
                        <p class="text-[#FF6F61] font-bold mt-2">${{ number_format($dish->price, 2) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection