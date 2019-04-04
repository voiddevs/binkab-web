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
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-1.jpg')}}" alt="Grutas de García">
                    <div class="card-body">
                    <h5 class="card-title">Grutas de García y su centro histórico</h5>
                    <p class="card-text">Durante el recorrido visitaremos el museo de las grutas en donde a través de una proyección podrás darte una idea de lo increíble que será tu recorrido. Otro interesante lugar que visitaremos es el mini zoológico Xempal centro recreativo, posteriormente visitaremos el centro histórico, el museo del Ojo con una muestra de artesanías de todo México.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-2.jpg')}}" alt="Cascada Cola de Caballo">
                    <div class="card-body">
                    <h5 class="card-title">Cascada Cola de Caballo</h5>
                    <p class="card-text">Se encuentra localizada aproximadamente a 40 kilómetros al Sur de Monterrey, en el municipio de Villa de Santiago, por la carretera a Cd. Victoria, Tamaulipas. Es una cascada de agua única rodeada de exuberante vegetación, de 27 metros, que cae sobre la Sierra Madre Oriental y debe su nombre a la particular caída de su torrente, el cual recuerda una cola de caballo.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-3.jpg')}}" alt="Tour en Monterrey">
                    <div class="card-body">
                    <h5 class="card-title">Tour en Monterrey</h5>
                    <p class="card-text">Conoceremos parte de su historia en un ambiente 100% colonial comenzando por el cerro del obispado, donde tendremos una excelente vista de la ciudad, además conoceremos el centro histórico, la macro plaza, catedral metropolitana, palacio Municipal, fuente de Neptuno, tendremos oportunidad de visitar la zona de las artesanías donde podremos adquirir desde dulces típicos, etc. </p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-4.jpg')}}" alt="Fundidora sobre Ruedas">
                    <div class="card-body">
                    <h5 class="card-title">Fundidora sobre Ruedas</h5>
                    <p class="card-text">El parque tiene todo lo necesario para que pases un día en grande, hay tantas actividades y lugares que visitar que un día no será suficiente; es uno de los lugares mas importantes para la recreación familiar y turística. Dentro del parque encontrarás hoteles, un Museo, pista de hielo, campo de béisbol, el parque temático de Plaza Sésamo, La Casa de los Loros, pista de Go Karts y lagos.</p>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-5.jpg')}}" alt="Tour a Chipinque">
                    <div class="card-body">
                    <h5 class="card-title">Tour a Chipinque</h5>
                    <p class="card-text">Ubicado en la Sierra Madre Oriental, dentro de los límites del Parque Nacional Cumbres de Monterrey, es un área natural de 1,791 hectáreas en donde encontraras un gimnasio al aire libre, puedes practicar el ciclismo, el senderismo y la observación de aves. Ademas cuenta con un mariposario, insectario,diversos miradores, áreas recreativas, etc.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-6.jpg')}}" alt="Grutas de Bustamante">
                    <div class="card-body">
                    <h5 class="card-title">Tour Grutas de Bustamante</h5>
                    <p class="card-text">Las grutas de Bustamante, también conocidas como las grutas del Palmito, se localizan en la Sierra de Gomas, a 107 kilómetros al noroeste de la ciudad de Monterrey y a siete kilómetros al suroeste de la cabecera del municipio de Bustamante. Formaciones creadas por la naturaleza. Asimismo se puede visitar además la Iglesia el pueblo y una panadería típica con su horno de adobe.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-7.jpg')}}" alt="Termas de San Joaquin">
                    <div class="card-body">
                    <h5 class="card-title">Tour Termas de San Joaquin</h5>
                    <p class="card-text">Una opción para disfrutar de las bondades de las Termas de San Joaquín, es nuestro balneario. En un espacio contiguo al Hotel, contamos con un área de acceso general, que durante el día permite hacer uso de las instalaciones y vivir una experiencia de bienestar inolvidable.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/monterrey/tours/tour-8.jpg')}}" alt="Cañon de Matacanes">
                    <div class="card-body">
                    <h5 class="card-title">Tour Cañon de Matacanes</h5>
                    <p class="card-text">El mejor Tour en Monterrey es el cañon de Matacanes y se encuentra dentro del parque nacional cumbres de monterrey y entre los cañones de la sierra madre en el pueblo magico de Santiago NL, la Aventura inicia en una ruta panorámica 4x4 muy famosa entre jeeperos, rumbo al Campamento Multiaventura de Emoción Extrema en el ejido Potrero Redondo.</p>
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