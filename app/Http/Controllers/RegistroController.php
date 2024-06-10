<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use App\Models\Encargado;
use App\Models\Productos;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function index()
    {
        $registro__punto__ventas = Registro::all();
        return view('registro__punto__ventas.index', compact('registro__punto__ventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registro__punto__ventas =Registro::all();
        return view('registro__punto__ventas.create', compact('encargados')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'encargado_id' => 'required|exists:encargados,id',
            
        ]);
        Registro::create($validatedData);
        return redirect()->route('registro__punto__ventas.index');
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
        $registro__punto__ventas= Registro::find($id);
        $encargados=Encargados::all();
        return view('registro__punto__ventas.edit', compact('registro__punto__ventas','encargados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'encargado_id' => 'required|exists:encargados,id',
            
        ]);

        $registro__punto__ventas= Registro::findOrFail($id);
        $registro__punto__ventas->update($validatedData);

        return redirect()->route('registro__punto__ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro__punto__ventas= Registro::find($id);
        $registro__punto__ventas->delete();

        return redirect()->route('registro__punto__ventas.index');
    }
}
