@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Registro de Punto de Venta</h2>
        <div class="card">

            <form method="POST" action="{{ route('registrospv.update', $registropv->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="encargado_id" class="form-label">Encargado</label>
                    <select name="encargado_id" id="encargado_id" class="form-control" required>
                        @foreach($encargados as $encargado)
                            <option value="{{ $encargado->id }}" {{ $registropv->encargado_id == $encargado->id ? 'selected' : '' }}>
                                {{ $encargado->persona->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="producto_id" class="form-label">Producto</label>
                    <select name="producto_id" id="producto_id" class="form-control" required>
                        @foreach($productos as $producto)
                            <option value="{{ $producto->id }}" {{ $registropv->producto_id == $producto->id ? 'selected' : '' }}>
                                {{ $producto->nom_pro }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                    <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" value="{{ $registropv->fecha_entrega }}" required>
                </div>

                <div class="mb-3">
                    <label for="cantidad_entrega" class="form-label">Cantidad de Entrega</label>
                    <input type="number" name="cantidad_entrega" id="cantidad_entrega" class="form-control" value="{{ $registropv->cantidad_entrega }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('registrospv.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
@endsection
