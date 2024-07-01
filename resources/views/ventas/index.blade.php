@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Lista de Venta</h2>

        <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">Crear Venta</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Encargado</th>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Fecha de Venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <td>{{ $venta->id }}</td>
                        <td>{{ $venta->encargado->nombre }}</td>
                        <td>{{ $venta->clientes->nombre }}</td>
                        <td>{{ $venta->producto->nom_pro }}</td>
                        <td>{{ $venta->fecha_venta }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('ventas.destroy', $venta->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
