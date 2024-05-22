@extends('ejemploplantilla')

<form action="{{ route('profesor.update', $profesor->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="{{ $profesor->id }}" >
    </div> 
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $profesor->nombre }}" required>
    </div>
    <div>
        <label for="apellidos">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="{{ $profesor->apellido }}" required>
    </div>
    
    <div>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $profesor->titulo }}" required>
    </div>
    <div>
        <button type="submit">Actualizar Profesor</button>
    </div>
</form>      


