@extends('footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mazatlán - BinKab</title>

    <link rel="stylesheet" href="{{asset('css/basics.css')}}">
    <link rel="stylesheet" href="{{asset('css/destino.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <!-- Wrapper -->
	<div id="wrapper">

        <!-- Header -->
        <header id="header" >
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
                            <li><a href="/login" class="link-homelog">Ingresar</a></li>
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
                <li><a href="/login" class="hvr-underline-from-left">Ingresar <i class="fas fa-sign-in-alt"></i></a></li>
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
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/mazatlan/eventos-1.jpg')}})">
                        <p>Semana de la moto</p>
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
                    <div class="evento" style="background-image: url({{asset('img/eventos/mazatlan/eventos-5.jpg')}})">
                        <p>Maratón</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/mazatlan/eventos-6.jpg')}})">
                        <p>Triatlón</p>
                    </div>
                </div>
            </div>
        </div>

          <!-- ¿A dónde ir? -->
          <div id="seccion-adondeir">
               <h2>¿A dónde ir?</h2>
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <img id="img-adondeir" src="{{asset('img/destinos/mazatlan/catedral-degradado.png')}}" alt="Catedral Mazatlán">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <ul>
                       <!--La Marea-->
                        <li data-toggle="modal" data-target="#laMarea">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-1.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre ">La Marea</p>
                                <p class="opcion-ubicacion">Restaurant</p>
                            </div>
                        </li>
                        
                        <!--Acuario-->
                        <li data-toggle="modal" data-target="#acuario">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-2.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Acuario Mazatlán</p>
                                <p class="opcion-ubicacion">Recreación</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#machado">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-3.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Plaza Machado</p>
                                <p class="opcion-ubicacion">Recreación</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#mazagua">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-4.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Mazagua</p>
                                <p class="opcion-ubicacion">Parque</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <ul>
                        <li data-toggle="modal" data-target="#presidio">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-5.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Presidio</p>
                                <p class="opcion-ubicacion">Restaurant</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#classico">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-6.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Classico</p>
                                <p class="opcion-ubicacion">Nocturno</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#angelaPeralta">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-7.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Ángela Peralta</p>
                                <p class="opcion-ubicacion">Cultural</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#catedral">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-8.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Catedral</p>
                                <p class="opcion-ubicacion">Cultural</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!--MODAL-->
            
            <!--La marea-->
            <div style="margin-top:65px;" class="modal fade" id="laMarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-1.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Acuario-->
            <div style="margin-top:65px;" class="modal fade" id="acuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                       
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-2.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Machado-->
            <div style="margin-top:65px;" class="modal fade" id="machado" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-3.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Mazagua-->
            <div style="margin-top:65px;" class="modal fade" id="mazagua" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-4.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Presidio-->
            <div style="margin-top:65px;" class="modal fade" id="presidio" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-5.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Classico-->
            <div style="margin-top:65px;" class="modal fade" id="classico" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-6.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Angela Peralta-->
            <div style="margin-top:65px;" class="modal fade" id="angelaPeralta" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-7.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Catedral-->
            <div style="margin-top:65px;" class="modal fade" id="catedral" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/mazatlan/recomendacion/donde-8.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est natus pariatur itaque quisquam corporis debitis tempora, neque autem vel laudantium blanditiis sequi modi quis quae fugit cum magni reprehenderit repellendus.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam maiores qui quos fuga, atque voluptate! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Tours -->
        <div id="seccion-tours">
            <h2>Tours</h2>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-1.jpg')}}" alt="Fun bus">
                    <div class="card-body">
                    <h5 class="card-title">Fun Bus</h5>
                    <p class="card-text">Fun Bus Mazatlán es un tour donde podrás conocer lo mejor de Mazatlán, recorriendo cada uno de los monumentos de la zona dorada a lo largo del malecón, desde las changueras hasta el mercado municipal. Visitarás a pie la Catedral, Plaza Machado, Teatro Ángela Peralta y la galería de máscaras para el carnaval; para cerrar con broche de oro una vista panorámica del Faro natural más alto de Latinoamérica.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-2.jpg')}}" alt="Huana Coa">
                    <div class="card-body">
                    <h5 class="card-title">Huana Coa Canopy Adventure</h5>
                    <p class="card-text">Huana Coa Canopy Adventure es un recorrido donde disfrutarás de 12 plataformas para lanzarte en tirolesas, además de sentir la adrenalina a flor de piel, podrás contemplar un paisaje lleno de vida silvestre mientras vuelas entre la selva y campos de agave azul. ¡Una experiencia inolvidable!.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-3.jpg')}}" alt="Jungle Tour">
                    <div class="card-body">
                    <h5 class="card-title">Jungle Tour & Playa</h5>
                    <p class="card-text">Explora los esteros de Mazatlán, una de las áreas poco conocidas de este destino turístico y disfruta del contacto con la naturaleza, la aventura y la observación de aves en una de las áreas más hermosas y poco visitadas de Mazatlán.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-4.jpg')}}" alt="Santuario de Tortugas">
                    <div class="card-body">
                    <h5 class="card-title">Santuario de Tortugas</h5>
                    <p class="card-text">Vistela Estación de El Verde Camacho en donde ayudará a la Protección de la Tortuga Marina. En el paseo disfrutará de una mini conferencia con el biólogo del campamento,  de un paseo en moto por la playa y si el rió lo permite un paseo en lancha a través de manglares. Finalmente tendrá la oportunidad de liberar una tortuguita al mar.</p>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-5.jpg')}}" alt="Isla de la Piedra">
                    <div class="card-body">
                    <h5 class="card-title">Isla de la Piedra</h5>
                    <p class="card-text">Isla de la Piedra es un exclusivo paraíso tropical ubicado frente a las costas de Mazatlan. Viajaremos a bordo de un Catamarán para descubrir sus rincones escondidos como la cueva de los piratas y la roca de los leones marinos entre otros. Si quieres pasar un día inolvidable y divertido en Mazatlán, este es un paseo obligado para tus vacaciones. ¡Disfrútalo!.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-6.jpg')}}" alt="La Noria y Tequilera Mazatlán">
                    <div class="card-body">
                    <h5 class="card-title">La Noria y Tequilera Mazatlán</h5>
                    <p class="card-text">La Noria y Tequilera Mazatlán, es un recorrido que te llevará por un pueblo colonial de artesanos ubicado a solo 33 kilómetros de Mazatlán, justo en las faldas de la Sierra Madre Occidental. Descubre su artesanía, así como la industria tequilera de esta región del estado de Sinaloa.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-7.jpg')}}" alt="Recorrido en Centro Histórico">
                    <div class="card-body">
                    <h5 class="card-title">Recorrido en Centro Histórico de Mazatlán</h5>
                    <p class="card-text">Recorrido en Centro Histórico de Mazatlán, es un paseo donde conocerás las principales atracciones de la ciudad de Mazatlán de una manera divertida y atrevida. Durante este recorrido podrás manejar un vehículo “Ranger de Polaris”, “Rhino de Yamaha” ó “Big Red de Honda”. Además siempre estarás acompañado de un guía, quien abordo de otro vehículo se encargará de llevarlos por las partes más históricas de la ciudad.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/mazatlan/tours/tour-8.jpg')}}" alt="Tour a El Quelite ">
                    <div class="card-body">
                    <h5 class="card-title">Tour a El Quelite</h5>
                    <p class="card-text">Tour a El Quelite Mazatlán, a través de este recorrido conoce uno de los pueblos históricos del Estado de Sinaloa. Tendrás la oportunidad de visitar el mirador, desde donde podrás admirar el “Camino Real” y el “Río El Quelite” además de todo el pueblo desde la altura.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Galeria de fotos -->
        <div class="gallery-container">  
            <h2>Galería de fotos</h2>  
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-1.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-1.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-2.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-2.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-6.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-6.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-4.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-4.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-5.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-5.jpg')}})"></div>
                        </a>
                    </div> 
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-7.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-7.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-8.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-8.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-9.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-9.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-10.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-10.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-11.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-11.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-12.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-12.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/mazatlan/galeria/MAZ-13.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/mazatlan/galeria/MAZ-13.jpg')}})"></div>
                        </a>
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
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/gallery.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        baguetteBox.run('.tz-gallery');
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
@endsection