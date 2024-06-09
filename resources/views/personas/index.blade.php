@extends("layouts.template")

@section("content")
        <h2 class="text-center mb-4">Lista de Personas</h2>

        <a href="{{ route('personas.create') }}" class="btn btn-primary mb-3">Crear Personas</a>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Cargo</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
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
                        <td>{{ $persona->contrasena }}</td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-sm btn-info mr-2">Editar</a>
                                <form method="POST" action="{{ route('personas.destroy', $persona->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection