<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Lotes</title>

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
</html>