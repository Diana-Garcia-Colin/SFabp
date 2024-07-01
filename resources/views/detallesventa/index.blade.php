@extends("layouts.template")
g
@section("content")
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Lista de Detalles de Venta') }}
                </h2>
            </div>
        </div>
        <a href="{{ route('detallesventa.create') }}" class="btn btn-primary mb-3">Crear DVenta</a>
       
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Total</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesventa as $detalleventa)
                                        <tr>
                                            <td>{{ $detalleventa->id }}</td>
                                            <td>{{ $detalleventa->producto->nom_pro }}</td>
                                            <td>{{ $detalleventa->cantidad }}</td>
                                            <td>{{ $detalleventa->precio_unitario }}</td>
                                            <td>{{ $detalleventa->total }}</td>
                                            <td>
                                                <a href="{{ route('detallesventa.edit', $detalleventa->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                                <form action="{{ route('detallesventa.destroy', $detalleventa->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar este detalle de venta?')">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
