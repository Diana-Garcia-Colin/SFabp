@extends("layouts.template")

@section("content")

    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear Registro de Punto de Venta') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('registrospv.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="encargado_id" class="form-label">Encargado</label>
                                <select name="encargado_id" id="encargado_id" class="form-control" required>
                                    @foreach($encargados as $encargado)
                                        <option value="{{ $encargado->id }}">{{ $encargado->persona->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="producto_id" class="form-label">Producto</label>
                                <select name="producto_id" id="producto_id" class="form-control" required>
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->nom_pro }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                                <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="cantidad_entrega" class="form-label">Cantidad de Entrega</label>
                                <input type="number" name="cantidad_entrega" id="cantidad_entrega" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('registrospv.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection