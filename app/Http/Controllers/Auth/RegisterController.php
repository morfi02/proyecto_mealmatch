<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Mostrar el formulario de registro para clientes
    public function showClientRegistrationForm()
    {
        return view('auth.register_client');
    }

    // Procesar el registro de clientes
    public function registerClient(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => 'cliente', // Asigna el rol de cliente
        ]);

        auth()->login($user);

        return redirect()->route('home')->with('success', 'usuario agregado correctamente.'); 
    }

    // Mostrar el formulario de registro para cocineros
    public function showCookRegistrationForm()
    {
        return view('auth.register_cook');
    }

    // Procesar el registro de cocineros
    public function registerCook(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // Puedes agregar validaciones para campos adicionales propios de cocinero
            // 'specialty' => 'required|string|max:100',
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => 'cocinero', // Asigna el rol de cocinero
            // Agrega más campos si es necesario, por ejemplo:
            // 'specialty' => $data['specialty'],
        ]);

        auth()->login($user);

        return redirect()->route('home')->with('success', 'Cocinero agregado correctamente.');
    }
}
