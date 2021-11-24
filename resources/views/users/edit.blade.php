@extends('layout')

@section('title', "Editar pedido")

@section('content')
    <h1>Editar pedido</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("pedidos/{$user->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="Christian Alonso" value="{{ old('name', $user->name) }}">
        <br>
        <label for="celular">Numero de telefono:</label>
        <input type="text" name="celular" id="celular" placeholder="961 111 11 11" value="{{ old('celular', $user->celular) }}">
        <br>
        <label for="cambray">tamales de cambray:</label>
        <input type="integer" name="cambray" id="cambray" placeholder="ingresa la cantidad de tamales deseados" value="{{ old('cambray', $user->cambray) }}">
        <br>
        <label for="bola">tamales de bola:</label>
        <input type="integer" name="bola" id="bola" placeholder="ingresa la cantidad de tamales deseados" value="{{ old('bola', $user->bola) }}">
        <br>
        <label for="chipilin">tamales de chipilin:</label>
        <input type="integer" name="chipilin" id="chipilin" placeholder="ingresa la cantidad de tamales deseados" value="{{ old('chipilin', $user->chipilin) }}">
        <br>
        <label for="elote">tamales de elote:</label>
        <input type="integer" name="elote" id="elote" placeholder="ingresa la cantidad de tamales deseados" value="{{ old('hierbasanta', $user->elote) }}">
        <br>
        <label for="hierbasanta">tamales de hierbasanta:</label>
        <input type="integer" name="hierbasanta" id="hierbasanta" placeholder="ingresa la cantidad de tamales deseados" value="{{ old('hierbasanta', $user->hierbasanta) }}">
        <br>
        <label for="mole">tamales de mole:</label>
        <input type="integer" name="mole" id="mole" placeholder="ingresa la cantidad de tamales deseados" value="{{ old('mole', $user->mole) }}">
        <br>
        <label for="total">total:</label>
        <input type="integer" name="total" id="total" placeholder="ejemplo total">
        <br>
        <button type="submit">Actualizar</button>
    </form>

    <p>
        <a href={{ url("/allusers") }}>Regresar</a>
    </p>
@endsection