@extends('ejemploplantilla')

@section('contenido')
    <h2>Detalles del Profesor</h2>
    <ul>
        <li>ID: {{ $profesor->id }}</li>
        <li>Nombre: {{ $profesor->nombre }}</li>
        <li>Apellido: {{ $profesor->apellido }}</li>
        <li>Título: {{ $profesor->titulo }}</li>
    </ul>

    <a href="{{ route('profesor.edit', $profesor->id) }}" class="btn btn-primary">Editar</a>
@endsection