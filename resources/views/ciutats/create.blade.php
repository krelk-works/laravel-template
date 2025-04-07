@extends('layouts.app')

@section('title', 'Nova ciutat')

@section('content')
    <a href="{{ route('casal.index') }}">Tornar a casals</a>
    <a href="{{ route('casal.index') }}">Ciutats</a>
    <form action="{{ route('ciutat.store') }}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="n_habitants">Numero d'habitants</label>
        <input type="number" name="n_habitants" id="n_habitants" value="0">
        <br>
        <button type="submit">Afegir</button>
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