@extends("layouts.template")
@section("content")

        <h2 class="text-center mb-4">Lista de Encargados</h2>

        <a href="{{ route('encargados.create') }}" class="btn btn-primary mb-3">Crear Encargado</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Encargado</th>
                    <th></th>
                    <th></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($encargados as $encargado)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $encargado->persona->nombre }}</td>
                        <td>{{ $encargado->persona->ap }}</td>
                        <td>{{ $encargado->persona->am }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('encargados.edit', $encargado->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('encargados.destroy', $encargado->id) }}">
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