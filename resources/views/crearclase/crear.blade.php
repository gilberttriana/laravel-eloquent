@extends('ejemploplantilla')

@section('contenido')
<form action="{{ route('clase.store') }}" method="POST">
    @csrf
    
    <div>
        <label for="codclase">codclase:</label>
        <input type="text" id="codclase" name="codclase" required>
    </div>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="creditos">creditos:</label>
        <input type="text" id="creditos" name="creditos" required>
    </div>
    <div>
        <button type="submit">Crear clase</button>
    </div>
</form>
@endsection