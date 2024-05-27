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
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Lista de Personas</h2>

        <a href="{{ route('personas.create') }}" class="btn btn-primary mb-3">Create Persona</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Cargo</th>
                    <th>Contraseña</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->ap }}</td>
                        <td>{{ $persona->am }}</td>
                        <td>{{ $persona->fecha_nac }}</td>
                        <td>{{ $persona->cargo }}</td>
                        <td>{{ $persona->contraseña }}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-sm btn-info mr-2">Edit</a>
                                <form method="POST" action="{{ route('personas.destroy', $persona->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
            if (confirm('Are you sure you want to delete this person?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
</body>
</html>