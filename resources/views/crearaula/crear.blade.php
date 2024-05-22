@extends('ejemploplantilla')

@section('contenido')
<form action="{{ route('aula.store') }}" method="POST">
    @csrf
    
    <div>
        <label for="id">ID de Aula:</label>
        <input type="text" id="id" name="id" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" required>
    </div>
    <div>
        <button type="submit">Crear Aula</button>
    </div>
</form>
@endsection