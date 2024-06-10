<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro de Punto de Venta</title>

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
            color: #fff.
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff.
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Registro de Punto de Venta</h2>
        <div class="card">

            <form method="POST" action="{{ route('registrospv.update', $registropv->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="encargado_id" class="form-label">Encargado</label>
                    <select name="encargado_id" id="encargado_id" class="form-control" required>
                        @foreach($encargados as $encargado)
                            <option value="{{ $encargado->id }}" {{ $registropv->encargado_id == $encargado->id ? 'selected' : '' }}>
                                {{ $encargado->persona->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="producto_id" class="form-label">Producto</label>
                    <select name="producto_id" id="producto_id" class="form-control" required>
                        @foreach($productos as $producto)
                            <option value="{{ $producto->id }}" {{ $registropv->producto_id == $producto->id ? 'selected' : '' }}>
                                {{ $producto->nom_pro }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                    <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" value="{{ $registropv->fecha_entrega }}" required>
                </div>

                <div class="mb-3">
                    <label for="cantidad_entrega" class="form-label">Cantidad de Entrega</label>
                    <input type="number" name="cantidad_entrega" id="cantidad_entrega" class="form-control" value="{{ $registropv->cantidad_entrega }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('registrospv.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
</html>
