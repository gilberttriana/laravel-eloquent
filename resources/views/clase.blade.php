@extends('miplantilla')

@section('contenido')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Código de Clase</th>
            <th scope="col">Nombre</th>
            <th scope="col">Créditos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clases as $clase)
            <tr>
                <td>{{ $clase->codclase }}</td>
                <td>{{ $clase->nombre }}</td>
                <td>{{ $clase->credito }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection