<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - BinKab</title>
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
    <div class="container" ng-controller="ctrl">
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
    <h1>Vista Administrador</h1>
    <input type="text" id="permiso" value="{{ Auth::user()->permiso }}" style="visibility: hidden">
        <div id="contenedor-principal">
        </div>
	</div>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
</body>
</html>
<script>
    var app=angular.module('app',[]);
        app.controller('ctrl',function($scope, $http, $filter, $compile){ 
            $scope.permiso=  angular.element( document.querySelector( '#permiso' ) ).val();
            console.log($scope.permiso);
            if($scope.permiso == 1){

            // console.log({{ Auth::user()->name }});
            $scope.lugares = {!! json_encode($dataLugares->toArray()) !!}
            console.log($scope.lugares);
            $scope.lugarNombre= $scope.lugares[0].nombre
            console.log($scope.lugarNombre);

            $scope.change  = function(idButton) // no ';' here
            {
                console.log(idButton);
                var elem = document.getElementById(idButton);
                if (elem.value=="Desactivar") elem.value = "Activar";
                else elem.value = "Desactivar";
            }

            $scope.update = function(idUs,statusUs){
                $scope.array={
                    id:idUs,
                    status: statusUs
                };
                console.log($scope.array);
                
                $http.put('/lugaresUpdate/'+idUs, $scope.array).then(
                    function(response){
                        // alert("se modifico con exito");
                    },function(errorResponse){
                        // alert("fallo la conexion");
                    }
                );
            }


            var myEl = angular.element( document.querySelector( '#contenedor-principal' ) );
            for(var x=0; x<$scope.lugares.length;x++){
                if($scope.lugares[x].status==1)
                {
                    var texto="Activado"
                    var texto2="Desactivar"
                }
                    
                else
                {
                    var texto="Desactivar"
                    var texto2="Activar"
                }
                    
                myEl.append('<div class="container">'+'<div class="row">'
                +'<div class="col-5">'
                +'<div class="imagen" style="background-image: url(http://127.0.0.1:8000/storage/'+$scope.lugares[x].imagen+'")></div>'
                +'</div>'
                +'<div class="col-7">'
                +'<div class="titulo">'+$scope.lugares[x].nombre+'</div>'
                +'<div class="telefono">Teléfono: '+$scope.lugares[x].telefono+'</div>'
                +'<div class="descripcion">Descripción: '+$scope.lugares[x].descripcion+'</div>'
                +'<div class="ubicacion">'+'<i class="fas fa-map-marked"></i> '+$scope.lugares[x].ubicacion+'</div>'
                +'</div>'+'</div>'
                +'</div>'         
                            
                            
                            
                            
                            
                //+   '<div class="titulo">'+$scope.lugares[x].nombre+'</div>'
                //+'<img  src=" http://127.0.0.1:8000/storage/'+$scope.lugares[x].imagen+'" width="400px" height="300px>'
                //+'<div></div>'
                //+'<div class="telefono">Telefono: '+$scope.lugares[x].telefono+'</div>'
                //+'<div class="descripcion">Descripcion:'+$scope.lugares[x].descripcion+'</div>'
                //+'<div class="ubicacion">'+$scope.lugares[x].ubicacion+'</div>'
                // +'<div class="ubicacion">Estado:'+texto+'</div>'
                ); 
                // myEl.append($compile("<button id='button"+x+"' class = 'btn btn-primary' ng-click='update("+$scope.lugares[x].id+","+$scope.lugares[x].status+")'>"+texto2+"</button>")($scope));
                myEl.append($compile("<input id='button"+x+"' type='button' value='"+texto2+"' class = 'btn btn-outline-info btn-lg boton' ng-click='change($event.target.id);update("+$scope.lugares[x].id+","+$scope.lugares[x].status+")'></input>")($scope));
            }
           
                            
        }else{
            var myEl = angular.element( document.querySelector( '#contenedor-principal' ) );
            myEl.append('<div>Lo sentimos, esta vista es solo para administradores ):</div>'
            
        );
        }
        });
        
</script>