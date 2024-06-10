@extends("layouts.template")

@section("content")
        <h2 class="text-center mb-4">Lista de Registros de Punto de Venta</h2>

        <a href="{{ route('registrospv.create') }}" class="btn btn-primary mb-3">Crear Registro de Punto de Venta</a>

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
                    <th>Producto</th>
                    <th>Fecha de Entrega</th>
                    <th>Cantidad de Entrega</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrospv as $registropv)
                    <tr>
                        <td>{{ $registropv->id }}</td>
                        <td>{{ $registropv->encargado->nombre }}</td>
                        <td>{{ $registropv->producto->nombre }}</td>
                        <td>{{ $registropv->fecha_entrega }}</td>
                        <td>{{ $registropv->cantidad_entrega }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('registrospv.edit', $registropv->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('registrospv.destroy', $registropv->id) }}">
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
@endsection
