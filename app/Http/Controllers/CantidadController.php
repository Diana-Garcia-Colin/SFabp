<?php

namespace App\Http\Controllers;
use App\Models\Cantidad;
use Illuminate\Http\Request;

class CantidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cantidades = Cantidad::all();
        return view('cantidades.index', compact('cantidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cantidades.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'num_prod' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        ]);
        Cantidad::create($validatedData);
        return redirect()->route('cantidades.index');
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
        $cantidad = Cantidad::find($id);
        return view('cantidades.edit', compact('cantidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nunm_prod' => 'required|string|min:1|max:255|regex:/^[a-zA-Z ñ]+$/',
        ]);

        $cantidad = Cantidad::find($id);
        $cantidad->update($request->all());

        return redirect()->route('cantidades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $cantidad = Cantidad::find($id);
        $cantidad->delete();

        return redirect()->route('cantidades.index');
    }
}
