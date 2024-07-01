<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categorias;
use App\Models\Categoria;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Productos::all();
        $categorias = Categorias::all();
        return view('productos.create', compact('productos','categorias')); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nom_pro' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'precio' => 'required|numeric|min:0.01',
            'descripcion' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'categoria_id' => 'required|exists:categorias,id',
            'img' => 'required|string',
        ]);
        Productos::create($validatedData);
        return redirect()->route('productos.index');
    }
    public function show(string $id)
    {
        $productos = Productos::find($id);
        $categorias = Categorias::all();
        return view('productos.index', compact('productos','categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { 
        $producto = Productos::find($id);
        $categorias = Categorias::all();

        return view('productos.edit', compact('producto','categorias'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'nom_pro' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'precio' => 'required|numeric|min:0.01',
            'descripcion' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
            'categoria_id' => 'required|exists:categorias,id',
            'img' => 'required|string',
        ]);

        $producto = Productos::find($id);
        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Productos::find($id);
        $producto->delete();

        return redirect()->route('productos.index');
    }
    
}