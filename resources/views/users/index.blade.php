@extends('layout')

@section('title', 'Pedidos')

@section('content')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
{{--
    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($users as $user)
            <li>
                {{ $user->name }}, ({{ $user->celular }})
                <a href="{{ route('users.show', $user) }}">Mas info del pedido</a> |
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
    --}}
    <div class="principal">
    <h1>Fabrica de tamales AC</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="card" style="background-color:	#F0E68C;">
                    <h5 class="card-title">
								Tamales de bola
					</h5>

						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://pbs.twimg.com/media/DLZsyfhUEAAbwdu.jpg" width="100" height="170"/>
						<div class="card-block">

						</div>
					</div>
                    <hr>

				</div>
				<div class="col-md-4">
					<div class="card" style="background-color:	#F0E68C;">
                    <h5 class="card-title">
								Tamales de Cambray
							</h5>
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://dam.cocinafacil.com.mx/wp-content/uploads/2021/01/tamales-chiapanecos-de-cambray.jpg" width="100" height="170"/>
						<div class="card-block">

						</div>
					</div>
                    <hr>

				</div>
				<div class="col-md-4">
					<div class="card" style="background-color:	#F0E68C;">
                    <h5 class="card-title">
								Tamales de elote
							</h5>
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://lossaboresdemexico.com/wp-content/uploads/2012/10/Pictes-de-elote.jpg"width="100" height="170" />
						<div class="card-block">

						</div>
					</div>
                    <hr>

				</div>
                <div class="col-md-4">
					<div class="card" style="background-color:	#F0E68C;">
                    <h5 class="card-title">
								Tamales de mole
							</h5>
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://d1uz88p17r663j.cloudfront.net/resized/ec3bf35b7ae9d11762af7d7452c67c7e_Tamal_de_Mole_1200_600.jpg" width="100" height="170"/>
						<div class="card-block">

						</div>
					</div>


				</div>
                <div class="col-md-4">
					<div class="card" style="background-color:	#F0E68C;">
                    <h5 class="card-title">
								Tamales de chipilin
							</h5>
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.la-cocina-mexicana.com/base/stock/Recipe/493-image/493-image_web.jpg" width="100" height="170" />
						<div class="card-block">

						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="card" style="background-color:	#F0E68C;">
                    <h5 class="card-title">
								Tamales de hierbasanta
							</h5>
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://dam.cocinafacil.com.mx/wp-content/uploads/2019/01/tamal-frijol-y-chorizo-con-hoja-santa.jpg" width="100" height="170"/>
					</div>
				</div>
				</div>
			</div>
            </div>

            <br><br>
            <div class="elicopter">
			<div class="row align-self-center" >
               <div class="card" style="background-color:	#F0E68C;">
				<h5 class="card-header">
					Abrimos pedidos todos 
                    los jueves a las 21:00 horas
				</h5>
				<div class="card-body">
					<p class="card-text">
						Cerramos pedidos todos los martes a las 18 horas
					</p>
				</div>
				<div class="card-footer">
					Contacto: <br> fabricadetamales@gmail.com  <br>9613111111 <br>
                    <a class="btn btn-primary btn-lg align-self-center " href="/pedidos/nuevo">Ordenar</a>
				</div>
			</div>
            </div>
            </div>
			</div>
@endsection
@section('sidebar')
    @parent
@endsection