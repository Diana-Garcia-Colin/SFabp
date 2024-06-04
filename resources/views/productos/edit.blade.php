<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>

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
            padding: 20px;
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

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
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
</html>