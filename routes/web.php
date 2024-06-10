<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CirugiaController;
use App\Http\Controllers\VacunacionController;
use App\Http\Controllers\ConsultasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/inicio', [HomeController::class, 'index'])->name('home');
Route::post('/registro', [HomeController::class, 'store'])->name('registro');
Route::get('/servicios', [ServiceController::class, 'index'])->name('services');
Route::get('/citas', [AppointmentController::class, 'index'])->name('appointments');
Route::get('/sobre-nosotros', [AboutController::class, 'index'])->name('about');
Route::get('/consultas', [ConsultController::class, 'index'])->name('consults');
Route::get('/perfil', [ProfileController::class, 'index'])->name('profile');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/tienda', [ShopController::class, 'index'])->name('shop');
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro');
Route::get('/cirugias', [CirugiaController::class, 'index'])->name('cirugias');
Route::get('/vacunacion', [VacunacionController::class, 'index'])->name('vacunacion');
Route::get('/consultas', [ConsultasController::class, 'index'])->name('consultas');
