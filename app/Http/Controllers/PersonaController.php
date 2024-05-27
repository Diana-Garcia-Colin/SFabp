<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }
    public function create()
    {
        return view('personas.create');
    }
    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        'ap' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        'am' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        'fecha_nac' => 'required|date',
        'cargo' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        'contraseña' => 'required|string|min:1|max:255',
    ]);

    

    Persona::create($validatedData);

    return redirect()->route('personas.index');
}


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $persona = Persona::find($id);
        return view('personas.edit', compact('persona'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'ap' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'am' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'fecha_nac' => 'required|date',
            'cargo' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'contraseña' => 'required|string|min:1|max:255',
        ]);

        $persona = Persona::find($id);
        $persona->update($request->all());

        return redirect()->route('personas.index');
    }
    public function destroy(string $id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect()->route('personas.index');
    }
}



