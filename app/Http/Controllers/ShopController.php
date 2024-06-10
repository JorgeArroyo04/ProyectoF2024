<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop'); // Asegúrate de que 'shop.blade.php' existe en 'resources/views'
    }
}
