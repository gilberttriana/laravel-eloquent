@extends('miplantilla')

@section('contenido')
    <h2>Detalles de la Clase</h2>
    <ul>
        <li>ID: {{ $clase->codclase }}</li>
        <li>Nombre: {{ $clase->nombre }}</li>
        <li>Créditos: {{ $clase->credito }}</li>

    </ul>
@endsection