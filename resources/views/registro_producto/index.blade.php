@extends("layouts.template")

@section("content")
        <h2 class="text-center mb-4">Lista de Productos</h2>

        <a href="{{ route('registro_producto.create') }}" class="btn btn-primary mb-3">Crear Productos</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del producto</th>
                    <th>Precio</th>
                    <th>Descripcion del producto</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $producto->nom_pro }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->imagen }}</td>
                        
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('registro_producto.edit', $producto->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('registro_producto.destroy', $producto->id) }}">
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