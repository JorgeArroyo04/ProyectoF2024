<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        return view('appointments'); // Asegúrate de que 'appointments.blade.php' existe en 'resources/views'
    }
}
