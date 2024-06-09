<?php

namespace App\Http\Controllers;
use App\Models\Encargado;
use App\Models\Persona;
use Illuminate\Http\Request;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $encargados = Encargado::all();
        return view('encargados.index', compact('encargados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas =Persona::all();
        return view('encargados.create', compact('personas')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'persona_id' => 'required|exists:personas,id',
            
        ]);
        Encargado::create($validatedData);
        return redirect()->route('encargados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $encargado = Encargado::find($id);
        $personas=Persona::all();
        return view('encargados.edit', compact('encargado','personas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'persona_id' => 'required|exists:personas,id',
            
        ]);

        $encargado = Encargado::findOrFail($id);
        $encargado->update($validatedData);

        return redirect()->route('encargados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $encargado = Encargado::find($id);
        $encargado->delete();

        return redirect()->route('encargados.index');
    }
}
