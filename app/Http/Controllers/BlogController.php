<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog'); // Asegúrate de que 'blog.blade.php' existe en 'resources/views'
    }
}
