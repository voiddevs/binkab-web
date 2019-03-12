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
                <nav>    
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Áreas de deporte</a></li>
                <li><a href="#">Cultura</a></li>
                <li><a href="#">Turismo</a></li>
                <li><a href="#">Comida</a></li>
                <li><a href="#">Entretenimiento</a></li>
            </ul>
        </nav>

        <!-- Swiper-Home -->
        <div class="swiper-container-home">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-1.jpg')}});"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-2.jpeg')}});"></div> 
                </div>
                <div class="swiper-slide">
                    <div class="slides-home" style="background-image: url({{asset('img/slides/slide-3.jpg')}});"></div>
                </div>
                ...
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>



    </div>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/menu.min.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>