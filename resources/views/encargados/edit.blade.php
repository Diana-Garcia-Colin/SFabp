@extends("layouts.template")

@section("content")
<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Encargado</h2>
        <div class="card">

            <form method="POST" action="{{ route('encargados.update', $encargado->id) }}">
                @csrf
                @method('PUT')

               <div class="mb-3">
                <label for="persona_id" class="form-label">Persona</label>
                <select name="persona_id" id="persona_id" class="form_control" required>
                    <option value="">Selecciona una persona</option>
                    @foreach($personas as $persona)
                        <option value="{{$persona->id}}" {{$encargado->persona_id == $persona->id ? 'selected' : '' }}>{{$persona->nombre}} {{$persona->ap}} {{$persona->am}}</option>
                        @endforeach

                </select>
                </div>

                

                
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('encargados.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</body>
@endsection