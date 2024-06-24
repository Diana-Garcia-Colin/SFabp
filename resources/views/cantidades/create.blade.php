@extends("layouts.template")

@section("content")
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear Cantidad') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('cantidades.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="num_prod" class="form-label">Cantidad:</label>
                                <input type="number" name="num_prod" id="num_prod" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('cantidades.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection