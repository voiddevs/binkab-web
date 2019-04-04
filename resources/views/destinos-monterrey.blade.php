@extends('footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monterrey - BinKab</title>

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
                <h1>Monterrey</h1>
                <p>Nuevo León, México</p>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/monterrey/slide-1.jpg')}})"></div>
                    <p class="titulo-seccion">Turismo</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/monterrey/slide-2.jpg')}})"></div>
                    <p class="titulo-seccion">Comida</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/monterrey/slide-3.jpg')}})"></div>
                    <p class="titulo-seccion">Cultural</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/monterrey/slide-4.jpg')}})"></div>
                    <p class="titulo-seccion">Deportes</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/monterrey/slide-5.jpg')}})"></div>
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
                     <!-- <img id="img-info-der" src="{{asset('img/destinos/mazatlan/palmera_der.png')}}" alt="palmera derecha">  -->
                </div>
                <div class="col-sm-6">
                    <p>Posee una gran cultura e historia y además con el paso de los años la ciudad ha ido desarrollándose 
                    y hoy por hoy es un centro de negocios, industrial y económico muy importante. Es rica también en 
                    paisajes espectaculares, zonas verdes y monumentos históricos. Hay muchos lugares que te encantará 
                    conocer como El Cerro de la Silla, El Cerro de las Mitras, La Sierra Madre, donde están sus paisajes 
                    montañosos, sus aguas termales y numerosos museos. Además, la librería Conarte es considerada una de las 
                    más bellas de la Tierra como lo reconoce la revista Wired.</p>
                </div>
                <div  class="col-sm-3">
                    <!-- <img id="img-info-der" src="{{asset('img/destinos/mazatlan/palmera_der.png')}}" alt="palmera derecha">  -->      
                </div>
            </div>    
        </div>
    
        <!-- Parallax -->
        <div style="background-image:url({{asset('img/destinos/monterrey/parallax.jpg')}});" class="parallax-destino"><div class="filtro-destino"></div></div>

        <!-- Eventos del destino -->
        <div id="seccion-eventos">
            <h2>Eventos</h2>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-1.jpg')}})">
                        <p>Pa'l Norte</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-2.jpg')}})">
                        <p>MLB México</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-3.jpg')}})">
                        <p>Campeonato Superwelter</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-4.jpg')}})">
                        <p>Beyond Wonderland</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-5.jpg')}})">
                        <p>Liga MX</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/monterrey/eventos-6.jpg')}})">
                        <p>Abierto GNP</p>
                    </div>
                </div>
            </div>
        </div>

          <!-- ¿A dónde ir? -->
          <!-- ¿A dónde ir? -->
          <div id="seccion-adondeir">
               <h2>¿A dónde ir?</h2>
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <img id="img-adondeir" src="{{asset('img/destinos/monterrey/monterrey.png')}}" alt="Monterrey">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <ul>
                       <!--La Mar del zur-->
                        <li data-toggle="modal" data-target="#marzur">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-1.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre ">Mar del Zur</p>
                                <p class="opcion-ubicacion">Restaurant</p>
                            </div>
                        </li>
                        
                        <!--Acuario-->
                        <li data-toggle="modal" data-target="#fundidora">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-2.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Parque Fundidora</p>
                                <p class="opcion-ubicacion">Parque</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#macroplaza">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-3.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Macroplaza</p>
                                <p class="opcion-ubicacion">Recreación</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#cerrosilla">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-4.jpeg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Cerro de la Silla</p>
                                <p class="opcion-ubicacion">Recreación</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <ul>
                        <li data-toggle="modal" data-target="#granpastor">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-5.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">El Gran Pastor</p>
                                <p class="opcion-ubicacion">Restaurant</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#strana">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-6.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Strana</p>
                                <p class="opcion-ubicacion">Nocturno</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#museoarte">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-7.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Museo de Arte</p>
                                <p class="opcion-ubicacion">Cultural</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#catedral">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/donde-8.jpg')}})"></div>
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
            <div style="margin-top:65px;" class="modal fade" id="marzur" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-1.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Mar del Zur - Restaurant</h5>
                        </div>
                        <div class="modal-body">
                            <p>Mar del Zur es un restaurante de cocina de autor creado por el Chef Eduardo Wichtendahl Palazuelos.
                            <br><br>Su fusión de gastronomía mexicana y tailandesa, a la que bautizó como cocina MEX-THAI, rescata el sabor y la pasión con la que se inició la cocina de los tiempos.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Acuario-->
            <div style="margin-top:65px;" class="modal fade" id="fundidora" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                       
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-2.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Parque Fundidora - Parque</h5>
                        </div>
                        <div class="modal-body">
                            <p>Parque Fundidora es un parque urbano incluyente y multifuncional, que contribuye a reforzar el tejido social ofreciendo un espacio verde, seguro, y de acceso 100% gratuito.
                            <br><br>Se le ha otorgado el título de Museo de Sitio de Arqueología Industrial por el Instituto Nacional de Antropología e Historia, por el valor histórico de las 27 macro estructuras, 127 piezas de maquinaria y herramientas siderúrgicas, hoy piezas museográficas, 16 naves y un sinfín de otros activos que conforman este acervo que representa un patrimonio industrial invaluable para Nuevo León.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Machado-->
            <div style="margin-top:65px;" class="modal fade" id="macroplaza" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content">
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-3.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Macroplaza - Recreación</h5>
                        </div>
                        <div class="modal-body">
                            <p>Visita la Macroplaza, cuarta plaza más grande del mundo, cuenta con una extensión de 40 hectáreas donde podrás admirar antiguos monumentos, edificios coloniales y bellísimas fuentes para un sano esparcimiento, disfrutar de sus extensas áreas verdes al aire libre y conoce con tu familia uno de los iconos más importantes de nuestro estado.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Mazagua-->
            <div style="margin-top:65px;" class="modal fade" id="cerrosilla" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-4.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Cerro de la Silla - Recreación</h5>
                        </div>
                        <div class="modal-body">
                            <p>El Cerro de la Silla es una montaña que forma parte del sistema de estribaciones de la Sierra Madre Oriental. Este se encuentra abarcando partes territoriales de los municipios de Guadalupe (31.62%), Monterrey (13.23%) y Juárez (55.15%) Nuevo León, y constituye un ícono de la ciudad de Monterrey y un símbolo para los regiomontanos. Cuenta con 4 picos llamados: Antena, Norte, Sur y La Virgen. Siendo el de mayor altitud el Pico Norte con 1,821 m.s.n.m.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Presidio-->
            <div style="margin-top:65px;" class="modal fade" id="granpastor" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-5.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">El Gran Pastor - Restaurant</h5>
                        </div>
                        <div class="modal-body">
                            <p>Para muchos comensales, éste es el restaurante que ofrece el mejor cabrito en Monterrey. Sea o no cierta tal afirmación, definitivamente quedarás satisfecho ya sea que pidas su codiciado cabrito, una carne asada, machito, riñonada, frijoles con veneno o cualquier otro platillo. Su café de olla y postres son también muy recomendados.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Classico-->
            <div style="margin-top:65px;" class="modal fade" id="strana" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-6.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Strana - Nocturno</h5>
                        </div>
                        <div class="modal-body">
                        Mezcla perfecta de lujo, entretenimiento y exclusividad. Strana es el lugar donde redefinimos la vida nocturna, un lugar con un ambiente magnético, un espacio donde se viven experiencias únicas e inigualables, el lugar donde eres tú, donde vibras con la mejor música, conoces a tus mejores amigos y vives noches espectaculares. 
                        <br><br>Somos casa de exclusivos conciertos internacionales que incluyen a estrellas como Tiesto, Avicii, Deadmau5, Nervo, Steve Aoki, Bob Sinclair entre muchos otros. 
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Angela Peralta-->
            <div style="margin-top:65px;" class="modal fade" id="museoarte" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-7.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Museo de Arte Contemporáneo - Cultural</h5>
                        </div>
                        <div class="modal-body">
                            <p>También conocido por su acrónimo MARCO, está ubicado en la ciudad de Monterrey, Nuevo León, México. Es obra del arquitecto mexicano Ricardo Legorreta y fue inaugurado el 28 de junio de 1991. MARCO se fundó con la misión de generar exposiciones y seleccionar proyectos provenientes de otras instituciones, enfocados a ofrecer al público un marco de referencia respecto al momento actual del arte contemporáneo, nacional e internacional. MARCO busca ser la institución cultural promotora de arte contemporáneo más importante de América Latina.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Catedral-->
            <div style="margin-top:65px;" class="modal fade" id="catedral" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/monterrey/recomendacion/modal/modal-8.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Catedral metropolitana - Cultural</h5>
                        </div>
                        <div class="modal-body">
                            <p>El edificio cuenta con una nave central en forma de cruz latina flanqueada por capillas hornacinas. La nave tiene bóvedas de arista rematada con una cúpula octagonal. El interior es sobrio y ecléctico. Cuenta con una mezcla de estilos arquitectónicos, neoclásico y barroco; este último especialmente en su fachada. La capilla del sagrario cuenta con un frontal de plata repujada. En el coro se encuentra un órgano Merklin de 1893 actualmente dañado y fuera de servicio.</p>
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
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-1.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-1.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-2.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-2.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-3.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-3.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-4.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-4.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-5.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-5.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-6.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-6.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-7.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-7.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-8.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-8.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-9.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-9.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-10.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-10.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-11.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-11.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/monterrey/galeria/MON-12.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/monterrey/galeria/MON-12.jpg')}})"></div>
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