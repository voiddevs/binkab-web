@extends('footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - BinKab</title>

    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
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
                            <li><a href="/" class="link-home">INICIO</a></li>
                            <li><a href="#" class="link-home">DESTINOS</a></li>
                            <li><a href="/nosotros" class="link-home">NOSOTROS</a></li>
                            <li><a href="#" class="link-homelog">SIGN IN <i class="fas fa-sign-in-alt"></i></a></li>
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
                <li><a href="/" class="hvr-underline-from-left">INICIO <i class="fas fa-home"></i></a></li>
                <li><a href="#" class="hvr-underline-from-left">DESTINOS <i class="fas fa-map-marked-alt"></i></a></li>
                <li><a href="/nosotros" class="hvr-underline-from-left">NOSOTROS <i class="fas fa-users"></i></a></li>
                <li><a href="#" class="hvr-underline-from-left">SIGN IN <i class="fas fa-sign-in-alt"></i></a></li>
            </ul>
        </nav>
        
        <!-- Swiper-Home -->
        <div class="swiper-container-home">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-1.jpg')}});">
                        <h2 class="titulo-slide">Asómbrate con su riqueza arquitectónica</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-2.jpeg')}});">
                        <h2 class="titulo-slide">Asómbrate con su riqueza arquitectónica</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div> 
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-3.jpg')}});">
                     <h2 class="titulo-slide">Conoce unos de los malecones más largos del mundo</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-5.jpg')}});">
                        <h2 class="titulo-slide">Disfruta una espectacular tarde en el clavadista</h2>
                        <a class="vinculo-slide hvr-underline-from-left" href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="filtro"></div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Botones 
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>-->
        </div>

        <!-- Seccion iconos -->
        <div class="seccion-iconos">
            <div class="hvr-bob">
                <img class="iconos-menu" src="{{asset('img/home/playa.png')}}" alt="playa">
                <h2>Descansa</h2>
                <p>Relajate en lugares nuevos</p>
            </div>
            <div class="hvr-bob">
                <img class="iconos-menu" src="{{asset('img/home/turismo.png')}}" alt="turismo">
                <h2>Conoce</h2>
                <p>Descubre cosas increibles</p>
            </div>
            <div class="hvr-bob">
                <img class="iconos-menu" src="{{asset('img/home/gastronomia.png')}}" alt="gastronomia">
                <h2>Disfruta</h2>
                <p>Saborea nuevos sabores</p>
            </div>
            <div  class="hvr-bob">
                <img class="iconos-menu" src="{{asset('img/home/estampa.png')}}" alt="estampa">
                <h2>Aprende</h2>
                <p>Aprende sobre nuevas culturas y personas</p>
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
                    <div style="background-image: url({{asset('img/home/lugares-1.jpg')}});" class="swiper-seccion-lugares">
                        <p>Mazatlán</p>
                    </div>
                </div>
                <div class="swiper-slide">
                     <div style="background-image: url({{asset('img/home/lugares-2.jpg')}});" class="swiper-seccion-lugares">
                        <p>Mazatlán</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image: url({{asset('img/home/lugares-3.jpg')}});" class="swiper-seccion-lugares">
                        <p>Mazatlán</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image: url({{asset('img/home/lugares-4.jpg')}});" class="swiper-seccion-lugares">
                        <p>Mazatlán</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image: url({{asset('img/home/lugares-5.jpg')}});" class="swiper-seccion-lugares">
                        <p>Mazatlán</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image: url({{asset('img/home/lugares-6.jpg')}});" class="swiper-seccion-lugares">
                        <p>Mazatlán</p>
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
          <div class="eventos">
               <div style="background-image: url({{asset('img/home/musica.jpg')}}); margin-left:150px;" class="evento">
                   <p>Festival de música</p>
               </div>
               <div style="background-image: url({{asset('img/home/cultural.jpg')}})"class="evento">
                   <p>Festival de cultura</p>
               </div>
               <div style="background-image: url({{asset('img/home/cultural.jpg')}})" class="evento">
                   
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
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>