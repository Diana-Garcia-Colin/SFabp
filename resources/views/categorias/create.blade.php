@extends("layouts.template")

@section("content")
<body>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear Categorias') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="tipo_c" class="form-label">Categoria</label>
                                <input type="tipos" name="tipo_c" id="tipo_c" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection