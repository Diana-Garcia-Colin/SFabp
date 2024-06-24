<?php

namespace App\Http\Controllers;
use App\Models\Lote;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lotes = Lote::all();
        return view('lotes.index', compact('lotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lotes.create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'num_lote' => 'required|integer|min:1',
        ]);
        Lote::create($validatedData);
        return redirect()->route('lotes.index');
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
        $lote = Lote::find($id);
        return view('lotes.edit', compact('lote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'nunm_lote' => 'required|integer|min:1',
        ]);

        $lote = Lote::find($id);
        $lote->update($request->all());

        return redirect()->route('lotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lote = Lote::find($id);
        $lote->delete();

        return redirect()->route('lotes.index');
    }
}
