<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Destino</title>

    <link rel="stylesheet" href="{{asset('css/basics.css')}}">
    <link rel="stylesheet" href="{{asset('css/destino.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <!-- Wrapper -->
	<div id="wrapper">

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
                    <a class="nav-link" href="#">Turismo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Comida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cultura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Deporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Entretenimiento</a>
                </li>
            </ul>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Souvenirs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tours</a>
                </li>
            </ul>
        </div>

        <!-- Sección Información -->
        <div class="container-fluid" id="info-destino">
            <div class="row">
                <div class="col-sm-3">
                    <img id="img-info-izq" src="{{asset('img/destinos/mazatlan/palmera_izq.png')}}" alt="palmera izquierda">
                </div>
                <div class="col-sm-6">
                    <p>Gracias a los 20 km de playas arenosas, Mazatlán se convirtió en uno de los destinos de playa más
                    atractivos y visitados de México a mediados del siglo XX, antes de que pasara de su apogeo a una
                    categoría de paquetes turísticos de paquete medio. Recientemente, sin embargo, el núcleo
                    histórico de Mazatlán, conocido como neoclásico tropical, ha sido restaurado y poblado por la
                    clase creativa. El resultado es una ciudad costera con mucho encanto. Una nueva carretera
                    audazmente diseñada desde el interior significa que las playas ahora son más accesibles para los
                    mexicanos también, y que las buenas vibraciones han regresado.</p>
                </div>
                <div  class="col-sm-3">
                    <img id="img-info-der" src="{{asset('img/destinos/mazatlan/palmera_der.png')}}" alt="palmera derecha">       
                </div>
            </div>    
        </div>
    
        <!-- Parallax -->
        <div style="background-image:url({{asset('img/destinos/mazatlan/parallax.jpg')}});" class="parallax-destino"><div class="filtro-destino"></div></div>
        
        <!-- Eventos del destino -->
        <div id="seccion-eventos">
            <h2>Eventos</h2>
            <div class="row">
                <div class="col-sm-3 evento" style="background-image: url({{asset('img/home/musica.jpg')}})">
                    <p>Festival de música</p>
                </div>
                <div class="col-sm-3 evento" style="background-image: url({{asset('img/home/cultural.jpg')}})">
                    <p>Festival de cultura</p>
                </div>
                <div class="col-sm-6 evento" style="background-image: url({{asset('img/home/cultural.jpg')}})">
                    <p>Festival de cultura</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 evento" style="background-image: url({{asset('img/home/musica.jpg')}})">
                    <p>Festival de música</p>
                </div>
                <div class="col-sm-3 evento" style="background-image: url({{asset('img/home/cultural.jpg')}})">
                    <p>Festival de cultura</p>
                </div>
                <div class="col-sm-3 evento" style="background-image: url({{asset('img/home/cultural.jpg')}})">
                    <p>Festival de cultura</p>
                </div>
            </div>
        </div>



    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
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