@extends("layouts.template")
@section("content")
<body>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear de Venta') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('ventas.store') }}">
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
                                <label for="cliente_id" class="form-label">Cliente</label>
                                <select name="cliente_id" id="cliente_id" class="form-control" required>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->persona->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="producto_id" class="form-label">Producto</label>
                                <select name="producto_id" id="producto_id" class="form-control" required>
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->nom_pro }}{{ $producto->precio}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="fecha_venta" class="form-label">Fecha de Venta</label>
                                <input type="date" name="fecha_venta" id="fecha_venta" class="form-control" required>
                            </div>

                           

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
