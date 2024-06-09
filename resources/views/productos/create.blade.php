@extends("layouts.template")

@section("content")
<body>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear Producto') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('productos.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nom_pro" class="form-label">Nombre del Producto</label>
                                <input type="text" name="nom_pro" id="nom_pro" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" name="precio" id="precio" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion" class="form-label">Descripcion del Producto</label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" required>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
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