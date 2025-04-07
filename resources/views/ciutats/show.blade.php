@extends('layouts.app')

@section('title', $ciutat->nom)

@section('content')
    <a href="{{ route('ciutat.index') }}"><button><= Tornar a les ciutats</button></a>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Numero d'habitants</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $ciutat->nom }}</td>
                <td>{{ $ciutat->n_habitants }}</td>
                <td><a href="{{ route('ciutat.edit', $ciutat->id )}}"><button>Editar</button></a></td>
                <td>
                <form action="{{ route('ciutat.destroy', $ciutat->id )}}" method="POST" onsubmit="return confirm('Estàs segur que vols eliminar aquesta ciutat?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection