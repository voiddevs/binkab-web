@extends('footer')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/lugares-dinamicos.css')}}">
    <link rel="stylesheet" href="{{asset('css/basics.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body ng-app="app">
<div ng-controller="ctrl">
     <!-- Wrapper -->
	<div id="wrapper">
        <!-- Header -->
        <header id="header">
            <div class="inner">
                <div>
                    <a href="/"><img src="{{asset('img/logo_blanco.png')}}" alt="logo-binkab"></a>
                </div>
                <!-- Nav -->
                <div id="desktop">
                    <nav>    
                        <ul>
                            <li><a href="/" class="link-home">Inicio</a></li>
                            <li><a href="/destinos" class="link-home">Destinos</a></li>
                            <li><a href="/nosotros" class="link-home">Nosotros</a></li>
                            @guest
                            @if (Route::has('register'))
                                <li><a href="/login" class="link-homelog">Ingresar</a></li>
                            @endif
                            @else
                                <li><a href="/home" class="link-homelog">{{ Auth::user()->name }}</a></li>
                            @endguest
                        </ul>
                    </nav>
                </div>
                <div id="mobile">
                    <nav>    
                        <ul>
                            <li><a href="#menu">Menu</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr class="divisor-home">
        </header>


        <nav id="menu">
            <h2>Menú</h2>
            <ul>
                <li><a href="/" class="hvr-underline-from-left">Inicio <i class="fas fa-home"></i></a></li>
                <li><a href="/destinos" class="hvr-underline-from-left">Destinos <i class="fas fa-map-marked-alt"></i></a></li>
                <li><a href="/nosotros" class="hvr-underline-from-left">Nosotros <i class="fas fa-users"></i></a></li>
                @guest
                @if (Route::has('register'))
                    <li><a href="/login" class="hvr-underline-from-left">Ingresar <i class="fas fa-sign-in-alt"></i></a></li>
                @endif
                @else
                    <li><a href="/home" class="hvr-underline-from-left">{{ Auth::user()->name }} <i class="fas fa-sign-in-alt"></i></a></li>
                @endguest
                
            </ul>
        </nav>

        <!-- Slider main container -->
        <div class="swiper-container">
            <div id="title-destino">
                <h1>Mazatlán</h1>
                <p>Sinaloa, México</p>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-1.jpg')}})"></div>
                    <p class="titulo-seccion">Turismo</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-2.jpg')}})"></div>
                    <p class="titulo-seccion">Comida</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-3.jpg')}})"></div>
                    <p class="titulo-seccion">Cultural</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-4.jpg')}})"></div>
                    <p class="titulo-seccion">Deportes</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-5.jpg')}})"></div>
                    <p class="titulo-seccion">Entretenimiento</p>
                </div>
            </div>
        </div>

        <!-- Ménu de destino -->
        <div id="menu-destino">
            <ul class="nav justify-content-center ">
                <li class="nav-item">
                    <a class="nav-link" href="/lugares-dinamicos/3">Turismo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lugares-dinamicos/4">Comida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lugares-dinamicos/2">Cultura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lugares-dinamicos/1">Deporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lugares-dinamicos/5">Entretenimiento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lugares-dinamicos/6">Souvenirs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tours</a>
                </li>
            </ul>
        </div>
        <h1 id="title-seccion">Titulo</h1>
        <div id="contenedor-principal" class="row">
              
        </div>
        <!-- Footer -->
        @section('footer')
            @parent
    </div>
</div>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                // when window width is <= 320px
                500: {
                    slidesPerView: 1
                },
                // when window width is <= 480px
                1000: {
                    slidesPerView: 2
                },
                // when window width is <= 640px
                1450: {
                    slidesPerView: 3
                },
            }
        })
    </script>
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
                myEl.append('<div class="col-sm-12 col-md-6 col-lg-6">'+'<div class="row">'+
                '<div class="col-5">'+'<img class="imagen" src=" http://127.0.0.1:8000/storage/'+$scope.lugares[x].imagen+'">'+'</div>'
                +'<div class="col-7">'+'<div class="titulo">'+$scope.lugares[x].nombre+'</div>'
                +'<div class="telefono">Teléfono: '+$scope.lugares[x].telefono+'</div>'
                +'<div class="descripcion">Descripción: '+$scope.lugares[x].descripcion+'</div>'
                +'<div class="ubicacion">'+'<i class="fas fa-map-marked"></i> '+$scope.lugares[x].ubicacion+'</div>'+'</div>'+'</div>'
                ); 
                /*myEl.append($compile(
                    "<form action='/vista-actividades/"+$scope.lugares[x].id+"' method='get'>"
                    +"<input  id='button"+x+"' type='submit' value='ver mas' class = 'btn btn-primary' ng-click='seeMore(1)'></input>"
                    +"</form>"+'</div>'
                    )($scope));*/
            }


        });
        
</script>
@endsection