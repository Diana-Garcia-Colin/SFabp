<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Encargado;
use App\Models\Venta;
use App\Models\Productos;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $encargados = Encargado::all(); // Obtener todos los encargados
        $clientes = Cliente::all(); // Obtener todos los productos
        $productos = Productos::all();

        return view('ventas.create', compact('encargados', 'clientes','productos')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'encargado_id' => 'required|exists:encargados,id',
            'cliente_id' => 'required|exists:productos,id',
            'producto_id' => 'required|exists:productos,id',
            'fecha_venta' => 'required|date', // Validación para fecha_entrega
            
        ]);

        Venta::create($validatedData);
        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venta = Venta::findOrFail($id);
        return view('ventas.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venta = Venta::findOrFail($id);
        $encargados = Encargado::all();
        $clientes = Cliente::all();

        return view('ventas.edit', compact('venta', 'encargados', 'clientes','productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'encargado_id' => 'required|exists:encargados,id',
            'cliente_id' => 'required|exists:productos,id',
            'producto_id' => 'required|exists:productos,id',
            'fecha_venta' => 'required|date', // Validación para fecha_entrega
            'descripcion' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/', // Validación para cantidad_entrega
            // Agrega otras validaciones según sea necesario
        ]);

        $registro = Venta::findOrFail($id);
        $registro->update($validatedData);

        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Venta::findOrFail($id);
        $registro->delete();

        return redirect()->route('ventas.index');
    }
}

