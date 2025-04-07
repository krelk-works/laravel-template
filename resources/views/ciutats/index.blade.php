@extends('layouts.app')

@section('title', 'Llistat de ciutats')

@section('content')
    <h3>Llistat de ciutats</h3>
    <a href="{{ route('casal.index') }}"><button><= Tornar als casals</button></a>
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
            @foreach ($ciutats as $ciutat)
                <tr>
                    <td><a href="{{ route('ciutat.show', $ciutat->id) }}">{{ $ciutat->nom }}</a></td>
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
            @endforeach
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