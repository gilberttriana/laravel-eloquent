
@extends('miplantilla')

@section('contenido')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">codclase</th>
            <th scope="col">Nombre</th>
            <th scope="col">creditos</th>
            <th scope="col">Acciones</th> <!-- Agrega una columna para las acciones -->
        </tr>
    </thead>
    <tbody>
        @foreach ($clases as $clase)
            <tr>
                <td>{{ $clase->codclase }}</td>
                <td>{{ $clase->nombre }}</td>
                <td>{{ $clase->credito }}</td>
                <td>
                    <a href="{{ route('clase.edit', $clase->codclase) }}" class="btn btn-primary">Editar</a> <!-- Agrega el botón de edición -->
                    <a href="{{ route('clase.show', $clase->codclase) }}" class="btn btn-info">Detalles</a> <!-- Agrega el botón de detalles -->
                    <form action="{{ route('clase.destroy', $clase->codclase) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button> <!-- Agrega el botón de eliminar -->
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="/clase" class='btn btn-success'>Añadir Nueva clase</a>

@endsection

<footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: transparent; color: white; text-align: center; padding: 10px;">
    &copy; {{ date('Y') }} Derechos de autor reservados gilbert
</footer>