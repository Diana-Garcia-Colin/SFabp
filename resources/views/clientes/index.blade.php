@extends("layouts.template")
@section("content")

        <h2 class="text-center mb-4">Lista de Clientes</h2>

        <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Crear Clientes</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>

                    <th>Id</th>
                    <th>Correo</th>
                    <th>Numero de cuenta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>

                        <td>{{ $cliente->correo }}</td>
                        <td>{{ $cliente->no_cuenta }}</td>


                        <td>{{ $cliente->persona->nombre }}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('clientes.destroy', $cliente->id) }}">
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

    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this lote?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

@endsection
