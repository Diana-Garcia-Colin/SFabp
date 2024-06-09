@extends("layouts.template")

@section("content")
        <h2 class="text-center mb-4">Lista de Lotes</h2>

        <a href="{{ route('lotes.create') }}" class="btn btn-primary mb-3">Crear Lotes</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero de lotes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lotes as $lote)
                    <tr>
                        <td>{{ $lote->id }}</td>
                        <td>{{ $lote->num_lote }}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('lotes.edit', $lote->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('lotes.destroy', $lote->id) }}">
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