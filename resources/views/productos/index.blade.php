<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera Vista</title>

    <!-- Bootstrap 5 (CSS y JS) -->
    @vite(['resources/js/app.js'])

    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f8f9fa;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .table th {
            background-color: #f8f9fa;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-custom {
        background-color: #EC92DF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #EC92DF;
            color: white;
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
        }

        .nav-item {
            margin: 0 10px;
        }
    </style>
    <div class="card-header">{{ __('Dashboard') }}</div>
<ul class="navbar-nav mr-auto flex-row">
        <li class="nav-item mx-2">
        <a class="nav-link btn-custom" href="{{ route('home') }}">{{ __('Home') }}</a>
    </li>
    <li class="nav-item mx-2">
        <a class="nav-link btn-custom" href="{{ route('personas.index') }}">{{ __('Personas') }}</a>
    </li>
    <li class="nav-item mx-2">
        <a class="nav-link btn-custom" href="{{ route('lotes.index') }}">{{ __('lotes') }}</a>
    </li>
    <li class="nav-item mx-2">
        <a class="nav-link btn-custom" href="{{ route('cantidades.index') }}">{{ __('cantidades') }}</a>
    </li>
        <li class="nav-item mx-2">
             <a class="nav-link btn-custom" href="{{ route('productos.index') }}">{{ __('Productos') }}</a>
    </li>

    </ul>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Lista de Productos</h2>

        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Create Productos</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del procuto</th>
                    <th>Precio</th>
                    <th>Descripcion del producto</th>
                
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nom_pro }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('productos.destroy', $producto->id) }}">
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
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this lote?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
</body>
</html>