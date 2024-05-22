@extends('miplantilla')

@section('contenido')

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Código de Clase</th>
            <th scope="col">ID Profesor</th>
            <th scope="col">ID Aula</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($impartes as $imparte)
            <tr>
                <!-- Enlace a los detalles de la clase -->
                <td><a href="{{ url('/clase/' . $imparte->c_codclase) }}">{{ $imparte->c_codclase }}</a></td>
                
                <!-- Enlace a los detalles del profesor -->
                <td><a href="{{ url('/profesor/' . $imparte->p_idprofesor) }}">{{ $imparte->p_idprofesor }}</a></td>
                
                <!-- Enlace a los detalles del aula -->
                <td><a href="{{ url('/aula/' . $imparte->a_idaula) }}">{{ $imparte->a_idaula }}</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection