@extends("layouts.template")

@section("content")
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
                    <input type="date" name="fecha_nac" id="fecha_nac" value="{{ old('fecha_nac', $persona->fecha_nac) }}" class="form-control" required>
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
@endsection