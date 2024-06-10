<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services'); // Asegúrate de que 'services.blade.php' exista en 'resources/views'
    }
}
