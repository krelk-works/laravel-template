@extends('layouts.app')

@section('title', 'Nueva incidencia')

@section('content')

<form action="{{ route('incidencias.store') }}" method="POST">
    @csrf
    Descripcion: <br>
    <input type="text" name="descripcion" id="descripcion">
    <br>
    Tipo: <br>
    <select name="tipo" id="tipo">
        <option value="Software">Software</option>
        <option value="Software">Hardware</option>
    </select>
    <br>
    <input type="hidden" name="nick" value="{{$usuario->nick}}">
    <input type="hidden" name="estado" value="Pendiente">
    
    <br>
    <br>

    <button type="submit">Crear</button>
</form>

@endsection