@extends("layouts.template")

@section("content")
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear empleado') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="text" name="correo" id="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="no_cuenta" class="form-label">Número de cuenta</label>
                                <input type="text" name="no_cuenta" id="no_cuenta" class="form-control" required>
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection