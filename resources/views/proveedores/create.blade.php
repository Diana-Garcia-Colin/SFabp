@extends("layouts.template")

@section("content")
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-weight-bold text-primary">
                    {{ __('Crear Proveedor') }}
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('proveedores.store') }}">
                            @csrf

                           <div class="mb-3">
                                <label for="descripcion" class="from-label">Proveedores</label>
                                <select name="persona_id" id="persona_id" class="form-contrl" required>
                                    @foreach($personas as $persona)
                                        <option value="{{$persona->id }}">{{$persona->nombre}} {{$persona->ap}} {{$persona->am}}</option>
                                        @endforeach
                                </select>
                            </div>
                           
                            

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection