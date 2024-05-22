
@extends('miplantilla')

@section('contenido')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID de Aula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ubicación</th>
            <th scope="col">Acciones</th> <!-- Agrega una columna para las acciones -->
        </tr>
    </thead>
    <tbody>
        @foreach ($aulas as $aula)
            <tr>
                <td>{{ $aula->id }}</td>
                <td>{{ $aula->nombre }}</td>
                <td>{{ $aula->ubicacion }}</td>
                <td>
                    <a href="{{ route('aula.edit', $aula->id) }}" class="btn btn-primary">Editar</a> <!-- Agrega el botón de edición -->
                    <a href="{{ route('aula.show', $aula->id) }}" class="btn btn-info">Detalles</a> <!-- Agrega el botón de detalles -->
                    <form action="{{ route('aula.destroy', $aula->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button> <!-- Agrega el botón de eliminar -->
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="/aulac" class='btn btn-success'>Añadir Nueva aula</a>

@endsection
<footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: transparent; color: white; text-align: center; padding: 10px;">
    &copy; {{ date('Y') }} Derechos de autor reservados gilbert
</footer>

