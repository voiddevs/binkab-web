<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Destino</title>

    <link rel="stylesheet" href="{{asset('css/basics.css')}}">
    <link rel="stylesheet" href="{{asset('css/destinos.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <!-- Wrapper -->
	<div id="wrapper">

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-1.jpg')}})">
                        <p>Turismo</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-2.jpg')}})">
                        <p>Comida</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-3.jpg')}})">
                        <p>Cultural</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-4.jpg')}})">
                        <p>Deportes</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-5.jpg')}})">
                        <p>Entretenimiento</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-1.jpg')}})">
                        <p>Souvenirs</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-1.jpg')}})">
                        <p>Eventos</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/mazatlan/slide-1.jpg')}})">
                        <p>Tours</p>
                    </div>
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
        })
    </script>
</body>
</html>