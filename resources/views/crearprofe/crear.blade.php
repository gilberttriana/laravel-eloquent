@extends('ejemploplantilla')

@section('contenido')
<form action="{{ route('profesor.store') }}" method="POST">
    @csrf
    
    <div>
        <label for="id">id:</label>
        <input type="text" id="id" name="id" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido" required>
    </div>
    <div>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
    </div>
    <div>
        <button type="submit">Crear Profesor</button>
    </div>
</form>
@endsection