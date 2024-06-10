<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('perfil'); // Asegúrate de que 'perfil.blade.php' existe en 'resources/views'
    }
}
