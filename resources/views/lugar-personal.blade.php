<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mis Lugares - BinKab</title>
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
        <div class="container">
            <h1 class="title-verlugares">Mis Lugares</h1>
            <div id="contenedor-principal"></div>
        </div>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter, $compile){ 
            $scope.lugares = {!! json_encode($dataLugares->toArray()) !!}
            $scope.titulo="hola";
            console.log($scope.lugares);
            $scope.lugarNombre= $scope.lugares[0].nombre
            var myEl = angular.element( document.querySelector( '#contenedor-principal' ) );
            for(var x=0; x<$scope.lugares.length;x++){
                myEl.append($compile('<div class="container">'+'<div class="row">'+'<div class="col-5">'
                +'<div class="imagen" style="background-image: url(http://127.0.0.1:8000/storage/'+$scope.lugares[x].imagen+'")></div>'
                +'</div>'+'<div class="col-7">'+'<h2>'+$scope.lugares[x].nombre+'</h2>'
                +'<h5>Teléfono: '+$scope.lugares[x].telefono+'</h5>'
                +'<p>Descripción:'+$scope.lugares[x].descripcion+'</p>'
                +'<p>'+'<i class="fas fa-map-marked"></i> '+$scope.lugares[x].ubicacion+'</p>'+'<div class="row">'
                + "<form class='form-group' action='/fotografias/"+$scope.lugares[x].id+"' method='get'>"
                    +"<input id='button"+x+"' type='submit' value='Agregar Fotografias' class = 'btn btn-outline-info btn-lg boton2' ng-click='seeMore(1)'></input>"
                    +"</form>"
                    +"<form class='form-group' action='/actividades/"+$scope.lugares[x].id+"' method='get'>"
                    +"<input  id='button"+x+"' type='submit' value='Agregar Actividades' class = 'btn btn-outline-info btn-lg boton2' ng-click='seeMore(1)'></input>"
                    +"</form>"
                    + "<form class='form-group' >"
                    +"<input id='button"+x+"' type='submit' value='X' class = 'btn btn-outline-danger btn-lg boton2' ng-click='delete("+$scope.lugares[x].id+")'></input>"
                    +"</form>"
                    +'</div>'
                    +'</div>'+'</div>'+'</div>'
                    )($scope)); 
                // myEl.append($compile(
                   
                //     )($scope));
            }

            $scope.delete=function(id){
			$http.delete('/borrar/'+id).then(
				function(response){
					alert("Eliminado Correctamente");
					console.log(response);
				},function(errorResponse){
				}
			);
	}



            
        });
        
</script>