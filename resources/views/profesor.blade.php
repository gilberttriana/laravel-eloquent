@extends('miplantilla')

@section('contenido')
    @if ($profesores->isEmpty())
        <p>No hay profesores registrados.</p>
    @else
        <table class='table table-striped'>
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Título</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->id }}</td>
                        <td>{{ $profesor->nombre }}</td>
                        <td>{{ $profesor->apellido }}</td>
                        <td>{{ $profesor->titulo }}</td>
                        <td>

                            <a href="{{ route('profesor.edit', $profesor->id) }}" class="btn btn-primary">Editar</a>
                     <form action="{{ route('profesor.destroy', $profesor->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form> 
                            <a href="{{ route('profesor.show', $profesor->id) }}" class="btn btn-info">Detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <br>
      <a href="/profesor" class='btn btn-success'>Añadir Nuevo Profesor</a>
@endsection
<footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: transparent; color: white; text-align: center; padding: 10px;">
    &copy; {{ date('Y') }} Derechos de autor reservados gilbert
</footer>