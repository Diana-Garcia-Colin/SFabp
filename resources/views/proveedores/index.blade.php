@extends("layouts.template")
@section("content")

        <h2 class="text-center mb-4">Lista de Proveedores</h2>

        <a href="{{ route('proveedores.create') }}" class="btn btn-primary mb-3">Crear Proveedores</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Proveedor</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->id }}</td>
                        <td>{{ $proveedor->persona->nombre }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('proveedores.destroy', $proveedor->id) }}">
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