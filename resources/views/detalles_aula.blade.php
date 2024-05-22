@extends('miplantilla')

@section('contenido')
    <h2>Detalles de la aula</h2>
    <ul>
        <li>ID: {{ $aula->id }}</li>
        <li>Nombre: {{ $aula->nombre }}</li>
        <li>Créditos: {{$aula->ubicacion }}</li>

    </ul>
@endsection