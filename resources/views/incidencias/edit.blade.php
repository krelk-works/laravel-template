@extends('layouts.app')

@section('title', 'Editar una incidencia')

@section('content')

<form action="{{ route('incidencias.update', $incidencia->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nick de la persona: {{$incidencia->nick}}
    <br>
    Descripcion: {{$incidencia->descripcion}}
    <br>
    Tipo: {{$incidencia->tipo}}
    <br>
    Estado
    <select name="estado" id="estado" value="{{$incidencia->estado}}">
        <option value="Pendiente">Pendiente</option>
        <option value="En tramite">En tramite</option>
        <option value="Solucionada">Solucionada</option>
    </select>
    

    <button type="submit">Actualitzar</button>
</form>

@endsection