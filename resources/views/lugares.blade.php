<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/lugares-dinamicos.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body ng-app="app">
    <div ng-controller="ctrl">
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{asset('img/logo_negro.png')}}" alt="logo binkab negro">
                </a>
               
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                                    <a class="nav-link" href="/lugares/{{ Auth::user()->id }}">Nuevo lugar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/personal/{{ Auth::user()->id }}">Mis Lugares</a>
                                </li>
                            <li class="nav-item dropdown">
                               
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                               

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
		</nav>
		<div class="container">
			<form action="{{ url('/save')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
				<label for="nombre">{{'Nombre'}}</label>
				<input type="text" name="nombre" id="nombre" value="" class="form-control">

				<label for="descripcion">{{'Descripcion'}}</label>
				<input type="text" name="descripcion" id="descripcion" value="" class="form-control">

				<label for="imagen">{{'Imagen'}}</label>
				<input type="file" name="imagen" id="imagen" value="" class="form-control">	

				<label for="ubicacion">{{'Ubicacion'}}</label>
				<input type="text" name="ubicacion" id="ubicacion" value="" class="form-control"> 

				<label for="telefono">{{'telefono'}}</label>
				<input type="text" name="telefono" id="telefono" value="" class="form-control">



				<div>
					<label>Categoria</label>
					<div class="form-group row">
						<div class="col-sm-10">
						<select  name="categoria"   class="form-control" id="categoria"  ng-required="true" class="form-control">
						<option value="">Selecciona una categoria</option>
						<option value=1>Area de deportes</option>
						<option value=2>Cultural</option>
						<option value=5>Entretenimiento</option>
						<option value=4>Restaurante</option>
						<option value=3>Turismo</option>
						<option value=6>Souvenirs</option>
						</select>
						</div>
					</div>
				</div>

				<input type="submit" value="agregar" ng-click="savePhone()">
				<input type="number" name="idUsuario" id="idUsuario" value="@{{lugares}}" class="form-control" style="visibility: hidden">	
			</form>
		</div>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter){ 
			$scope.lugares = {!! json_encode($dataLugares) !!}
            console.log($scope.lugares);
        });
</script>