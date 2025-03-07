<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function clienteDashboard()
    {
        return view('cliente.dashboard');
    }

    public function cocineroDashboard()
    {
        return view('cocinero.dashboard');
    }
}
