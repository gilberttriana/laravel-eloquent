@extends('miplantilla')

@section('contenido')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Migración</th>
            <th scope="col">Lote</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($migraciones as $migracion)
            <tr>
                <td>{{ $migracion->id }}</td>
                <td>{{ $migracion->migration }}</td>
                <td>{{ $migracion->batch }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection