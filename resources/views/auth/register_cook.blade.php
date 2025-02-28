@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white text-center">
                    <h3>Registro de Cocinero</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register.cook.post') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required>

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" required>

                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmar Contraseña:</label>
                            <input id="password_confirmation" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>

                        <!-- Campo extra opcional: Especialidad (lo puedes descomentar si lo necesitas) -->
                        <!--
                        <div class="mb-3">
                            <label for="specialty" class="form-label">Especialidad:</label>
                            <input id="specialty" type="text" class="form-control"
                                   name="specialty" value="{{ old('specialty') }}">
                        </div>
                        -->

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrarse como Cocinero</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
