<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Persona;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes =Cliente::all();
        return view('clientes.create'); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'correo' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'no_cuenta' => 'required|unique:clientes|max:255',
            
        ]);
        Cliente::create($validatedData);
        return redirect()->route('clientes.index');
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
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'correo' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'no_cuenta' => 'required|unique:clientes|max:255',
            
        ]);

        $cliente = Cliente::find($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Clientes::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
