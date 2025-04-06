@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="nick" placeholder="Nick" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Iniciar sesión</button>
    </form>
    <a href="{{ route('register') }}">¿No tienes cuenta?</a>
@endsection