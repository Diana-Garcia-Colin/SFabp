@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Lotes</h2>
        <div class="card">

            <form method="POST" action="{{ route('cantidades.update', $cantidad->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="num_prod" class="form-label">Numero de lote</label>
                    <input type="text" name="num_prod" id="num_prod" value="{{ old('num_prod', $cantidad->num_prod) }}" class="form-control" required>
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('cantidades.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
@endsection