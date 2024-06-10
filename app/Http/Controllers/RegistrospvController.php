<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Encargado;
use App\Models\Registropv;
use Illuminate\Http\Request;

class RegistrospvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrospv = Registropv::all();
        return view('registrospv.index', compact('registrospv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $encargados = Encargado::all(); // Obtener todos los encargados
        $productos = Productos::all(); // Obtener todos los productos

        return view('registrospv.create', compact('encargados', 'productos')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'encargado_id' => 'required|exists:encargados,id',
            'producto_id' => 'required|exists:productos,id',
            'fecha_entrega' => 'required|date', // Validación para fecha_entrega
            'cantidad_entrega' => 'required|integer|min:1', // Validación para cantidad_entrega
            // Agrega otras validaciones según sea necesario
        ]);

        Registropv::create($validatedData);
        return redirect()->route('registrospv.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = Registropv::findOrFail($id);
        return view('registrospv.show', compact('registropv'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registropv = Registropv::findOrFail($id);
        $encargados = Encargado::all();
        $productos = Productos::all();

        return view('registrospv.edit', compact('registropv', 'encargados', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'encargado_id' => 'required|exists:encargados,id',
            'producto_id' => 'required|exists:productos,id',
            'fecha_entrega' => 'required|date', // Validación para fecha_entrega
            'cantidad_entrega' => 'required|integer|min:1', // Validación para cantidad_entrega
            // Agrega otras validaciones según sea necesario
        ]);

        $registro = Registropv::findOrFail($id);
        $registro->update($validatedData);

        return redirect()->route('registrospv.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Registropv::findOrFail($id);
        $registro->delete();

        return redirect()->route('registrospv.index');
    }
}
