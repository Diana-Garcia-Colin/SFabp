@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Producto</h2>
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

                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Categoria</label>
                    <select name="categoria_id" id="categoria_id" class="form-control" required>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->tipo_c }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="img" type="file" id="img">
                            <br>
                            <br>

                            @if ( !empty ( $productos->img) )

                                <span>Imagen Actual: </span>
                                <br>
                                <img src="../../../uploads/{{ $productos->img }}" width="200" class="img-fluid">

                            

                            @endif

                        </div>

                    </div>

                

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
@endsection