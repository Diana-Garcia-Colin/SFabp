@extends("layouts.template")

@section("content")
    <div class="container">
        <h2 class="text-center mb-4">Editar Detalle de Venta</h2>
        <div class="card">
            <div class="card-body">

                <form method="POST" action="{{ route('detalleventas.update', $detalleventa->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="producto_id" class="form-label">Producto</label>
                        <select name="producto_id" id="producto_id" class="form-control" required>
                            @foreach($productos as $producto)
                                <option value="{{ $producto->id }}" {{ $detalleventa->producto_id == $producto->id ? 'selected' : '' }}>
                                    {{ $producto->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $detalleventa->cantidad }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio_unitario" class="form-label">Precio Unitario</label>
                        <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" value="{{ $detalleventa->precio_unitario }}" required>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('detalleventas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection