<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>

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
        <h2 class="text-center mb-4">Editar Persona</h2>
        <div class="card">

            <form method="POST" action="{{ route('personas.update', $persona->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $persona->nombre) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="ap" class="form-label">Apellido Paterno</label>
                    <input type="text" name="ap" id="ap" value="{{ old('ap', $persona->ap) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="am" class="form-label">Apellido Materno</label>
                    <input type="text" name="am" id="am" value="{{ old('am', $persona->am) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
                    <input type="text" name="fecha_nac" id="fecha_nac" value="{{ old('fecha_nac', $persona->fecha_nac) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="cargo" class="form-label">Cargo</label>
                    <input type="text" name="cargo" id="cargo" value="{{ old('cargo', $persona->cargo) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="text" name="contrasena" id="contrasena" value="{{ old('contrasena', $persona->contrasena) }}" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
</html>