@extends('layout')

@section('title', "Crear pedido")

@section('content')
<div class="principal">
    <h1>Encargar Pedido</h1>


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
    <form method="POST" action="{{ url('pedidos')}} ">
        {{ csrf_field() }}
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="user" value="{{ old('name') }}">
        <br>
        <label for="celular">Numero de telefono:</label>
        <input type="text" name="celular" id="celular" placeholder="961 111 11 11" value="{{ old('celular') }}">
        <br>
        <div class="row">
        <div class="col-md-4">
			<div class="card" style="background-color:	#F0E68C;">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.la-cocina-mexicana.com/base/stock/Recipe/493-image/493-image_web.jpg" width="100" height="170" />
			    <div class="card-block">
                    <div class="card-footer">
                        <label for="chipilin">tamales de chipilin:</label>
                        <br>
                        <input type="integer" name="chipilin" id="chipilin" placeholder="ingresa la cantidad de tamales deseados" value="0">
				    </div>
				</div>
			</div>
		</div>
        <div class="col-md-4">
			<div class="card" style="background-color:	#F0E68C;">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://dam.cocinafacil.com.mx/wp-content/uploads/2021/01/tamales-chiapanecos-de-cambray.jpg" width="100" height="170" />
			    <div class="card-block">
                    <div class="card-footer">
                    <label for="cambray">tamales de cambray:</label>
                        <br>
                        <input type="integer" name="cambray" id="cambray" placeholder="ingresa la cantidad de tamales deseados" value="0">
				    </div>
				</div>
			</div>
		</div>
        <div class="col-md-4">
			<div class="card" style="background-color:	#F0E68C;">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://pbs.twimg.com/media/DLZsyfhUEAAbwdu.jpg" width="100" height="170" />
			    <div class="card-block">
                    <div class="card-footer">
                    <label for="bola">tamales de bola:</label>
                        <br>
                        <input type="integer" name="bola" id="bola" placeholder="ingresa la cantidad de tamales deseados" value="0">
				    </div>
				</div>
			</div>
		</div>
        <div class="col-md-4">
			<div class="card" style="background-color:	#F0E68C;">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://lossaboresdemexico.com/wp-content/uploads/2012/10/Pictes-de-elote.jpg" width="100" height="170" />
			    <div class="card-block">
                    <div class="card-footer">
                    <label for="elote">tamales de elote:</label>
                        <br>
                        <input type="integer" name="elote" id="elote" placeholder="ingresa la cantidad de tamales deseados" value="0">
				    </div>
				</div>
			</div>
		</div>
        <div class="col-md-4">
			<div class="card" style="background-color:	#F0E68C;">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://dam.cocinafacil.com.mx/wp-content/uploads/2019/01/tamal-frijol-y-chorizo-con-hoja-santa.jpg" width="100" height="170" />
			    <div class="card-block">
                    <div class="card-footer">
                    <label for="hierbasanta">tamales de hierbasanta:</label>
                        <br>
                        <input type="integer" name="hierbasanta" id="hierbasanta" placeholder="ingresa la cantidad de tamales deseados" value="0">
				    </div>
				</div>
			</div>
		</div>
        <div class="col-md-4">
			<div class="card" style="background-color:	#F0E68C;">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://d1uz88p17r663j.cloudfront.net/resized/ec3bf35b7ae9d11762af7d7452c67c7e_Tamal_de_Mole_1200_600.jpg" width="100" height="170" />
			    <div class="card-block">
                    <div class="card-footer">
                    <label for="mole">tamales de mole:</label>
                        <br>
                        <input type="integer" name="mole" id="mole" placeholder="ingresa la cantidad de tamales deseados" value="0">
				    </div>
				</div>
			</div>
		</div>
        </div>
        <div class="elicopter">
			<div class="row align-self-center" >
               <div class="card" style="background-color:	#F0E68C;">
				<h5 class="card-header">
					Entregamos todos los miercoles de 7 a 9 <br>
                    en la cabeza maya
				</h5>
				<div class="card-body">
					<p class="card-text">
						los pagos son contra entrega.
					</p>
				</div>
				<div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg align-self-center ">Crear</button>
				</div>
			</div>
            </div>

        
    </form>

    <p>
        <a href="{{ route('users.index') }}">Regresar</a>
    </p>

</div>
@endsection