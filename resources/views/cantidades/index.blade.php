@extends("layouts.template")

@section("content")

        <h2 class="text-center mb-4">Lista de Cantidades</h2>

        <a href="{{ route('cantidades.create') }}" class="btn btn-primary mb-3">Crear Cantidad</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cantidades</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cantidades as $cantidad)
                    <tr>
                        <td>{{ $cantidad->id }}</td>
                        <td>{{ $cantidad->num_prod }}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('cantidades.edit', $cantidad->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('cantidades.destroy', $cantidad->id) }}">
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