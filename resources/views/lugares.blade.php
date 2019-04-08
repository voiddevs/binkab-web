<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuevo lugar - Binkab</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                                <a class="nav-link" href="/home">Dashboard</a>
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
        <div id="contenedor">
        </div>
		<div class="container" id="btnSubmit">
        <input type="text" id="permiso" value="{{ Auth::user()->permiso }}" style="visibility: hidden">
        <h1  class="title-verlugares">Nuevo Lugar</h1>
			<form name="lugares" action="{{ url('/save')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row formulario">
                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label for="nombre">{{'Nombre:'}}</label>
                    <input type="text" name="nombre" id="nombre" required maxlength="30" value="" onkeypress="return inputCaracteres(event)" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label for="telefono">{{'Teléfono:'}}</label>
                    <input type="number" name="telefono" id="telefono" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)" required onkeydown="return event.keyCode !== 69" value="" class="form-control">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                    <label for="descripcion">{{'Descripción:'}}</label>
                    <input type="text" name="descripcion" id="descripcion" required onkeypress="return inputCaracteres(event)" maxlength="500" value="" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label for="ubicacion">{{'Ubicación:'}}</label>
                    <input type="text" name="ubicacion" id="ubicacion" required onkeypress="return inputCaracteres(event)"  maxlength="100" value="" class="form-control">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label>{{'Categoria:'}}</label>
						<select  name="categoria"   class="form-control" id="categoria"  required class="form-control">
                            <option value="">Selecciona una categoria</option>
                            <option value=1>Area de deportes</option>
                            <option value=2>Cultural</option>
                            <option value=5>Entretenimiento</option>
                            <option value=4>Restaurante</option>
                            <option value=3>Turismo</option>
                            <option value=6>Souvenirs</option>
						</select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label for="imagen">{{'Imagen:'}}</label>
                    <input type="file" name="imagen" id="imagen" value="" required class="form-control-file">	
                </div>
            </div>
            <input class="btn btn-outline-success btn-lg" type="submit" ng-disabled="!lugares.$valid" value="Agregar" ng-click="savePhone()">
			<input class="btn btn-outline-success btn-lg" type="number" name="idUsuario" id="idUsuario" value="@{{lugares}}" class="form-control" style="visibility: hidden">	
            </form>
		</div>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter){ 
            $scope.permiso=  angular.element( document.querySelector( '#permiso' ) ).val();
            console.log($scope.permiso);    
            $scope.lugares = {!! json_encode($dataLugares) !!}
            $scope.lugares2 = {!! json_encode($dataLugares2) !!}
            $scope.lugares2  = $scope.lugares2.length;
            console.log($scope.lugares);
            console.log($scope.lugares2);

            if($scope.permiso == 2 && $scope.lugares2 >=1){
                var element = document.getElementById("btnSubmit");
                element.remove();
                var myEl = angular.element( document.querySelector( '#contenedor' ) );
                myEl.append('<h1>Lo sentimos <i class="far fa-sad-tear"></i><br>Necesita adquirir la membresia de 2 o mas lugares para seguir agregando mas lugares.</h1><br><br><a href="/home"><p class="lead hvr-icon-wobble-horizontal">Regresa a dashboard <i class="fa fa-arrow-right hvr-icon"></i></p></a>'
                );
            }
            
        });
        

function inputCaracteres(e){ 
    letrasAdmit = " áéíóúabcdefghijklmnñopqrstuvwxyz123456789._-?#$()¿¡!:,%&'";//Teclas que se pondrán presionar
    exepciones = "8-32-39-46"; //(BackSpace , flecha izquierda, flecha derecha, Supr).
    tecla_especial = false;
    key = e.keyCode || e.which;
    teclaPress = String.fromCharCode(key).toLowerCase();
    for(var i in exepciones){
        if(key == exepciones[i]){
            tecla_especial = true;
            break;
        }
    }
    if(letrasAdmit.indexOf(teclaPress)==-1 && !tecla_especial){
        console.log("Tecla no admitida");
        return false;
    }
} 

    
</script>