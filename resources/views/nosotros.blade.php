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
</body>
</html>