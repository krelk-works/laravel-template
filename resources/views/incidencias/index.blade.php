@extends('layouts.app')

@section('title', 'Incidencies')

@section('content')

<h3>Benvinguda/a {{ $usuario->nick }} departament {{ $usuario->departamento }}</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Nick de la persona</th>
                @if ($usuario->departamento === 'Informatica')
                    <th>Editar</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($incidencias as $incidencia)
                <tr>
                    <td>{{$incidencia->id}}</td>
                    <td>{{$incidencia->descripcion}}</td>
                    <td>{{$incidencia->tipo}}</td>
                    <td>{{$incidencia->estado}}</td>
                    <td>{{$incidencia->nick}}</td>
                    @if ($usuario->departamento === 'Informatica')
                        <td><a href="{{ route('incidencias.edit', $incidencia->id) }}"><button>Editar</button></a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($usuario->departamento !== 'Informatica')
        <a href="{{ route('incidencias.create') }}">Nova incidencia</a>
    @else
    <a href="#">Imprimir PDF</a>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection