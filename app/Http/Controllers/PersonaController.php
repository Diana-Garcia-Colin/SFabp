<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nombre' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'ap' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'am' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'fecha_nac' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'cargo' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'contrasena' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        ]);
        Persona::create($validatedData);
        return redirect()->route('personas.index');
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $persona = Persona::find($id);
        return view('personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'nombre' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'ap' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'am' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'fecha_nac' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'cargo' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'contrasena' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        ]);

        $persona = Persona::find($id);
        $persona->update($request->all());

        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect()->route('personas.index');
    }
}
