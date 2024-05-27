<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido!!</title>
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
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear Persona') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('personas.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="ap" class="form-label">Apellido Paterno</label>
                                <input type="text" name="ap" id="ap" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="am" class="form-label">Apellido Materno</label>
                                <input type="text" name="am" id="am" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
                                <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="cargo" class="form-label">Cargo</label>
                                <input type="text" name="cargo" id="cargo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="text" name="contraseña" id="contraseña" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
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
</html>