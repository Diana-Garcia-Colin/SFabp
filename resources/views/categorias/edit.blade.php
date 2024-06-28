@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Categorias</h2>
        <div class="card">

            <form method="POST" action="{{ route('categorias.update', $categoria->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="tipo_c" class="form-label">Categorias</label>
                    <input type="tipos" name="tipo_c" id="tipo_c" value="{{ old('tipo_c', $categoria->tipo_c) }}" class="form-control" required>
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
@endsection