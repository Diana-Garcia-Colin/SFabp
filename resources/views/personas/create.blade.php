@extends("layouts.template")

@section("content")
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
                                <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="cargo" class="form-label">Cargo</label>
                                <input type="text" name="cargo" id="cargo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="text" name="contrasena" id="contrasena" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection