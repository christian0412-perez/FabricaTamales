@extends('layout')

@section('title', 'Pedidos')

@section('content')
<h1>{{ 'pedidos' }}</h1>

    <ul>
        @forelse ($users as $user)
            <li>
                {{ $user->name }}, ({{ $user->celular }})
                <a href="{{ route('users.show', $user) }}">Mas info del pedido</a> |
                <a href="{{ route('users.edit', $user) }}">Editar pedido</a> |
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @empty
            <li>No hay Pedidos registrados.</li>
        @endforelse
</ul>