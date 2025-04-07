@extends('layouts.app')

@section('title', $casal->nom)

@section('content')
    <a href="{{ route('casal.index') }}">Tornar</a>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Data d'inici</th>
                <th>Data final</th>
                <th>Num places</th>
                <th>Ciutat</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $casal->nom }}</td>
                <td>{{ $casal->data_inici }}</td>
                <td>{{ $casal->data_final }}</td>
                <td>{{ $casal->n_places }}</td>
                <td>{{ $casal->ciutat->nom }}</td>
                <td><a href="{{ route('casal.edit', $casal->id) }}"><button>Editar</button></a></td>
                <td>
                <form action="{{ route('casal.destroy', $casal->id) }}" method="POST" onsubmit="return confirm('Estàs segur que vols eliminar aquest casal?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                </td>
            </tr>
        </tbody>
    </table>
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