@extends('layout.app-master')
@section('content')

    @auth
        <h1>Bienvenido {{ auth()->user()->username}}</h1>
        <p><a href="/logout">Logout</a></p>
    @endauth

    @guest
        <h1>Para continuar <a href="/login"> Inicia Sesión</a></h1>
    @endguest

@endsection
