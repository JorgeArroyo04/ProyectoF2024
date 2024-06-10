<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CirugiaController extends Controller
{
    public function index()
    {
        return view('cirugias'); // Asegúrate de que 'cirugias.blade.php' existe en 'resources/views'
    }
}
