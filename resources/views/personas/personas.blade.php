@extends('ejemploplantilla')

@section('contenido')

<table class="table table-striped">

    <thead class="thead-dark">

    <tr><th scope="col">No</th><th scope="col">Nombre</th><th scope="col">Apellido</th></tr></thead>

    <tbody>

       

        @foreach ($personas as $persona )       

            <tr><td>{{$persona->id}}</td><td>{{$persona->nombre}}</td><td>{{$persona->apellido}}</td></tr>

        @endforeach

       

    </tbody>

</table>

@endsection