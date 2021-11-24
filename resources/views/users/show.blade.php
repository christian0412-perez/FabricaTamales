@extends('layout')

@section('title', "Cliente {$user->id}")

@section('content')
    <h1>Cliente #{{ $user->id }}</h1>

    <p>Nombre del cliente: {{ $user->name }}</p>
    <p>celular: {{ $user->celular }}</p>
    <p>tamales de bola: {{ $user->bola }}</p>
    <p>tamales de cambray: {{ $user->cambray }}</p>
    <p>tamales de elote: {{ $user->elote }}</p>
    <p>tamales de mole: {{ $user->mole }}</p>
    <p>tamales de hierbasanta: {{ $user->hierbasanta }}</p>
    <p>tamales de chipilin: {{ $user->chipilin }}</p>
    <p>total a pagar: {{ $user->total }}</p>


    <p>
        <a href={{ url("/allusers") }}>Regresar al listado de usuarios</a>
    </p>
@endsection