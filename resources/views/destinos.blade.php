@extends('footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destinos - BinKab</title>

    <link rel="stylesheet" href="{{asset('css/basics.css')}}">
    <link rel="stylesheet" href="{{asset('css/destinos.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body class="is-preload">
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
        
        <div class="seccion-banner">
           <p>Destinos</p>
            <div style="background-image:url({{asset('img/destinos/banner-destinos.jpg')}});" class="banner"></div>
            <div class="filtro-banner"></div>
        </div>
                
        <div id="seccion-opciones-destinos" class="container-fluid" style="width: auto;">
            <div class="row">
                <div class="col-sm-3">
                    <a href="/destinos/mazatlan">
                        <div class="destino">
                            <img src="{{asset('img/destinos/lugares-1.jpg')}}" alt="">
                            <div class="filtrodestino"></div>
                            <p>Mazatlán</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" >
                    <a href="/destinos/guanajuato">
                        <div class="destino">
                            <img src="{{asset('img/destinos/lugares-2.jpg')}}" alt="">
                            <div class="filtrodestino"></div>
                            <p>Guanajuato</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" >
                    <a href="/destinos/monterrey">
                        <div class="destino">
                            <img src="{{asset('img/destinos/lugares-3.jpg')}}" alt="">
                            <div class="filtrodestino"></div>
                            <p>Monterrey</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3" >
                   
                </div>
            </div>
        </div>
        
        
        
        <!-- Footer -->
        @section('footer')
            @parent
        @endsection

    </div>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
</body>
</html>