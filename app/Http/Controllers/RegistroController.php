<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'medico' => 'required|string|max:255',
            'paciente' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raza' => 'required|string|max:255',
            'sexo' => 'required|string|max:10',
            'propietario' => 'required|string|max:255',
            'edad' => 'required|integer',
            'fecha' => 'required|date',
        ]);

        // Aquí puedes guardar los datos en la base de datos o hacer lo que necesites con ellos
        // Ejemplo: Registro::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Datos registrados correctamente.');
    }
}
