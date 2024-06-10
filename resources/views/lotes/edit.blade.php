@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Lotes</h2>
        <div class="card">

            <form method="POST" action="{{ route('lotes.update', $lote->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="num_lote" class="form-label">Numero de lote</label>
                    <input type="number" name="num_lote" id="num_lote" value="{{ old('num_lote', $lote->num_lote) }}" class="form-control" required>
                </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('lotes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
@endsection