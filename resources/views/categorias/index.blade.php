@extends("layouts.template")

@section("content")
        <h2 class="text-center mb-4">Lista Categorias</h2>

        <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Crear Categoria</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo de categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $categoria->tipo_c }}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('categorias.destroy', $categoria->id) }}">
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