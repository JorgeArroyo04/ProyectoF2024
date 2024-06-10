<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacunacionController extends Controller
{
    public function index()
    {
        return view('vacunacion'); // Asegúrate de que 'vacunacion.blade.php' existe en 'resources/views'
    }
}
