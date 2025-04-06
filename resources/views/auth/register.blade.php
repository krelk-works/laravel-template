@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Registro</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="nick" placeholder="Nick" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
        <button type="submit">Registrarse</button>
    </form>
    <a href="{{ route('login') }}">¿Ya tienes cuenta?</a>
@endsection