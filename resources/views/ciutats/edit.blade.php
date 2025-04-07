@extends('layouts.app')

@section('title', 'Edició de ciutat')

@section('content')
    <a href="{{ route('ciutat.index') }}">Tornar</a>
    <form action="{{ route('ciutat.update', $ciutat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="{{ $ciutat->nom }}">
        <br>
        <label for="n_habitants">Numero d'habitants</label>
        <input type="number" name="n_habitants" id="n_habitants" value="{{ $ciutat->n_habitants }}">
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