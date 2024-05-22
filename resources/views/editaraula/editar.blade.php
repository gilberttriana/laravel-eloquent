@extends('ejemploplantilla')

@section('contenido')
<form action="{{ route('aula.update', $aula->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
        <label for="id">ID de Aula:</label>
        <input type="text" id="id" name="id" value="{{ $aula->id }}" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $aula->nombre }}" required>
    </div>
    <div>
        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" value="{{ $aula->ubicacion }}" required>
    </div>
    <div>
        <button type="submit">Actualizar Aula</button>
    </div>
</form>
@endsection
