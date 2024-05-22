@extends('ejemploplantilla')

@section('contenido')
<form action="{{ route('clase.update', $clase->codclase) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
        <label for="id">ID clase:</label>
        <input type="text" id="codclase" name="codclase" value="{{ $clase->codclase }}" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $clase->nombre }}" required>
    </div>
    <div>
        <label for="credito">creditos:</label>
        <input type="text" id="credito" name="credito" value="{{ $clase->credito }}" required>
    </div>
    <div>
        <button type="submit">Actualizar clase</button>
    </div>
</form>
@endsection
