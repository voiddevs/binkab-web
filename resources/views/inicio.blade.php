@extends('footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio - BinKab</title>

    <link rel="stylesheet" href="{{asset('css/basics.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
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
        
        <!-- Swiper-Home -->
        <div class="swiper-container-home">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-1.jpg')}});">
                        <h2 class="titulo-slide">Asómbrate con su riqueza arquitectónica</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="/destinos/mazatlan">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-2.jpeg')}});">
                        <h2 class="titulo-slide">Conoce unos de los malecones más largos del mundo</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="/destinos/mazatlan">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div> 
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-3.jpg')}});">
                     <h2 class="titulo-slide">El gran desarrollo industrial y económico de México</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="/destinos/monterrey">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-4.jpg')}});">
                        <h2 class="titulo-slide">Conoce su historia y sus colores</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="/destinos/guanajuato">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <!-- Seccion iconos -->
        <div class="container-fluid seccion-iconos">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 hvr-bob columnas">
                    <img class="iconos-menu" src="{{asset('img/home/playa.png')}}" alt="playa">
                    <h2>Descansa</h2>
                    <p>Relajate en lugares nuevos</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 hvr-bob columnas">
                    <img class="iconos-menu" src="{{asset('img/home/turismo.png')}}" alt="turismo">
                    <h2>Conoce</h2>
                    <p>Descubre cosas increibles</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 hvr-bob columnas">
                    <img class="iconos-menu" src="{{asset('img/home/gastronomia.png')}}" alt="gastronomia">
                    <h2>Disfruta</h2>
                    <p>Saborea nuevos sabores</p>
                </div>
                <div  class="col-sm-6 col-md-6 col-lg-3 hvr-bob columnas">
                    <img class="iconos-menu" src="{{asset('img/home/estampa.png')}}" alt="estampa">
                    <h2>Aprende</h2>
                    <p>Aprende sobre nuevas culturas</p>
                </div>
            </div>
        </div>
        
        <!-- Seccion lugares -->
        <!-- Swiper Lugares -->
        <div class="seccion-lugares">
        <div class="swiper-container-lugares">
           <h2>Lugares</h2>
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a href="/destinos/mazatlan">
                        <div style="background-image: url({{asset('img/home/lugares-1.jpg')}});" class="swiper-seccion-lugares">
                            <p>Mazatlán</p>
                        </div>
                    </a> 
                </div>
                <div class="swiper-slide">
                    <a href="/destinos/guanajuato">
                        <div style="background-image: url({{asset('img/home/lugares-2.jpg')}});" class="swiper-seccion-lugares">
                            <p>Guanajuato</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/destinos/monterrey">
                        <div style="background-image: url({{asset('img/home/lugares-3.jpg')}});" class="swiper-seccion-lugares">
                            <p>Monterrey</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <div style="background-image: url({{asset('img/home/unknow.png')}});" class="swiper-seccion-lugares">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image: url({{asset('img/home/unknow.png')}});" class="swiper-seccion-lugares">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image: url({{asset('img/home/unknow.png')}});" class="swiper-seccion-lugares">
                    </div>
                </div>
            </div>  
        </div>
        <div class="swiper-button-prev-lugares"><i class="fas fa-chevron-circle-left"></i></div>
        <div class="swiper-button-next-lugares"><i class="fas fa-chevron-circle-right"></i></div>
        <div id="parallax-home">
            <div style="background-image:url({{asset('img/home/parallax.jpg')}});" class="parallax-lugares"></div>
            <div class="filtro-lugares"></div>
        </div>
        </div>
        
        <!-- Seccion eventos -->
        <div id="seccion-eventos">
            <h2>Eventos</h2>
            <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-1.jpg')}})">
                        <p>Pa'l Norte</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/mazatlan/eventos-2.jpg')}})">
                        <p>Festival cultural</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="evento" style="background-image: url({{asset('img/eventos/mazatlan/eventos-3.jpg')}})">
                        <p>Combate naval</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="evento" style="background-image: url({{asset('img/eventos/mazatlan/eventos-4.jpg')}})">
                        <p>Carnaval</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-6.jpg')}})">
                        <p>Abierto GNP</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/mazatlan/eventos-5.jpg')}})">
                        <p>Maratón</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @section('footer')
            @parent

    </div>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>
@endsection