@extends('layouts.app')

@section('title', 'Editar registre')

@section('content')
    <a href="{{ route('casal.index') }}">Tornar</a>
    <form action="{{ route('casal.update', $casal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="{{ $casal->nom }}">
        <br>
        <label for="data_inici">Data d'inici</label>
        <input type="date" name="data_inici" id="data_inici" value="{{ $casal->data_inici }}">
        <br>
        <label for="data_final">Data final</label>
        <input type="date" name="data_final" id="data_final" value="{{ $casal->data_final }}">
        <br>
        <label for="n_places">Numero de places</label>
        <input type="number" name="n_places" id="n_places" value="{{ $casal->n_places }}">
        <br>
        <label for="id_ciutat">Ciutat</label>
        <select name="id_ciutat" id="id_ciutat" value="{{ $casal->id_ciutat }}">
            @foreach ($ciutats as $ciutat)
                <option value="{{ $ciutat->id }}">{{ $ciutat->nom }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Actualitzar</button>
    </form>
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