blade
Copiar código
@extends("layouts.template")

@section("content")
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear Detalle de Venta') }}
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('detallesventa.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="producto_id">Producto</label>
                                <select name="producto_id" id="producto_id" class="form-control" required>
                                    <option value="">{{ __('Selecciona un producto') }}</option>
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->nom_pro }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ old('cantidad') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="precio_unitario">Precio Unitario</label>
                                <input type="number" step="0.01" name="precio_unitario" id="precio_unitario" class="form-control" value="{{ old('precio_unitario') }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection