@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Prodcuto</h2>
        <div class="card">

            <form method="POST" action="{{ route('productos.update', $producto->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nom_pro" class="form-label">Nombre del producto</label>
                    <input type="text" name="nom_pro" id="nom_pro" value="{{ old('nom_pro', $producto->nom_pro) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio del producto</label>
                    <input type="number" name="precio" id="precio" value="{{ old('precio', $producto->precio) }}" class="form-control" required step="0.01" min="0">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion del producto</label>
                    <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', $producto->descripcion) }}" class="form-control" required>
                </div>

                

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
@endsection