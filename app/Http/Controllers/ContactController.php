<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // Asegúrate de que 'contact.blade.php' existe en 'resources/views'
    }
}
