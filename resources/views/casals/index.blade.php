@extends('layouts.app')

@section('title', 'Llistat de Casals')

@section('content')
    <h3>Llistat de casals</h3>
    <a href="{{ route('casal.create') }}"><button style="background: lightgreen">+ casals</button></a>
    <a href="{{ route('ciutat.create') }}"><button style="background: lightgreen">+ ciutats</button></a>
    <a href="{{ route('ciutat.index') }}"><button style="background: lightgreen">Veure ciutats</button></a>
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
            @foreach ($casals as $casal)
                <tr>
                    <td><a href="{{ route('casal.show', $casal->id) }}">{{ $casal->nom }}</a></td>
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
