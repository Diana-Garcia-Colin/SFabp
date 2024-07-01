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
                           
                            @if ( !empty ( $productos->id) )
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
                            </div>

                           <div class="mb-3">
                                <label for="categoria_id" class="form-label">Categoria</label>
                                <select name="categoria_id" id="categoria_id" class="form-control" required>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->tipo_c }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="img" class="negrita">Selecciona una imagen</label>
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
                            @else
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
                            </div>

                           <div class="mb-3">
                                <label for="categoria_id" class="form-label">Categoria</label>
                                <select name="categoria_id" id="categoria_id" class="form-control" required>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->tipo_c }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="img" required="required" class="negrita">Selecciona una imagen:</label>
                                <div>
                                    <input name="img" type="file" id="img">
                                </div>
                            </div>
                            @endif


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
