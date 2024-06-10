<?php

// app/Http/Controllers/ConsultController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function index(Request $request)
    {
        // Lógica para mostrar la página de consultas
        return view('consults'); // Asegúrate de que exista una vista llamada 'consults.blade.php' en la carpeta 'resources/views'
    }
}
