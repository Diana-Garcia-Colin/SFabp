<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleVentas;
use App\Models\Productos;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DetalleVentasController extends Controller
{
    public function index(Request $request): View
    {
        $detallesventa = DetalleVentas::with('producto')
        ->select('detalle_ventas.*', 'productos.nom_pro as producto_nom_pro', 'productos.precio as producto_precio')
        ->join('productos', 'detalle_ventas.producto_id', '=', 'productos.id')
        ->get();
        $productos = Productos::all();
    return view('detallesventa.index', compact('detallesventa','productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $productos = Productos::all();
        $detallesventa= DetalleVentas::all();
        return view('detallesventa.create', compact('detallesventa', 'productos'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
        ]);

        $cantidad = $request->cantidad;
        $precio_unitario = $request->precio_unitario;
        $total = $cantidad * $precio_unitario;

        $detalleventa = [
            'producto_id' => $request->producto_id,
            'cantidad' => $cantidad,
            'precio_unitario' => $precio_unitario,
            'total' => $total
        ];

        DetalleVentas::create($detalleventa);

        return redirect()->route('detallesventa.index')
            ->with('success', 'Detalle de venta creado exitosamente.');
    }

    public function show($id): View
    {
        $detalleventa = DetalleVentas::find($id);

        return view('detallesventa.show', compact('detalleventa'));
    }

    public function edit($id): View
    {
        $detalleventa = DetalleVentas::find($id);
        $productos = Producto::all();

        return view('detallesventa.edit', compact('detallesventa', 'productos'));
    }

    public function update(Request $request, DetalleVentas $detalleventa): RedirectResponse
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
        ]);

        $cantidad = $request->cantidad;
        $precio_unitario = $request->precio_unitario;
        $total = $cantidad * $precio_unitario;

        $detalleventa->update([
            'producto_id' => $request->producto_id,
            'cantidad' => $cantidad,
            'precio_unitario' => $precio_unitario,
            'total' => $total
        ]);

        return redirect()->route('detallesventa.index')
            ->with('success', 'Detalle de venta actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        DetalleVentas::find($id)->delete();

        return redirect()->route('detallesventa.index')
            ->with('success', 'Detalle de venta eliminado exitosamente');
    }
}
