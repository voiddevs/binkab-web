@extends('footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guanajuato - BinKab</title>

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
                <h1>Guanajuato</h1>
                <p>Guanajuato, México</p>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/guanajuato/slide-1.jpg')}})"></div>
                    <p class="titulo-seccion">Turismo</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/guanajuato/slide-2.jpg')}})"></div>
                    <p class="titulo-seccion">Comida</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/guanajuato/slide-3.jpg')}})"></div>
                    <p class="titulo-seccion">Cultural</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/guanajuato/slide-4.jpg')}})"></div>
                    <p class="titulo-seccion">Deportes</p>
                </div>
                <div class="swiper-slide">
                    <div class="slide-seccion-destino" style="background-image: url({{asset('img/destinos/guanajuato/slide-5.jpg')}})"></div>
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
            </ul>
        </div>

        <!-- Sección Información -->
        <div class="container-fluid" id="info-destino">
            <div class="row">
                <div class="col-sm-3">
                    <!--  <img id="img-info-izq" src="{{asset('img/destinos/mazatlan/palmera_izq.png')}}" alt="palmera izquierda"> -->
                </div>
                <div class="col-sm-6">
                    <p>La extraordinaria ciudad de Guanajuato, patrimonio mundial de la Unesco, fue fundada en 1559 debido a los ricos yacimientos de plata y oro de la región. Los opulentos edificios coloniales, las impresionantes plazas llenas de árboles y las casas de colores brillantes se amontonan en las empinadas laderas de un estrecho barranco donde se encuentran excelentes museos, hermosos teatros y un mercado fino en las calles empedradas. Las carreteras principales de la ciudad giran alrededor de las laderas y se sumergen en largos túneles subterráneos y húmedos, antes ríos.</p>
                </div>
                <div  class="col-sm-3">
                   <!-- <img id="img-info-der" src="{{asset('img/destinos/mazatlan/palmera_der.png')}}" alt="palmera derecha"> -->      
                </div>
            </div>    
        </div>
    
        <!-- Parallax -->
        <div style="background-image:url({{asset('img/destinos/guanajuato/parallax.jpg')}});" class="parallax-destino"><div class="filtro-destino"></div></div>

        <!-- Eventos del destino -->
        <div id="seccion-eventos">
            <h2>Eventos</h2>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/guanajuato/eventos-1.jpg')}})">
                        <p>Festival Cervantino</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/guanajuato/eventos-2.jpg')}})">
                        <p>Orquesta Sinfónica</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="evento" style="background-image: url({{asset('img/eventos/guanajuato/eventos-3.jpeg')}})">
                        <p>115 Aniversario del Teatro Juárez</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="evento" style="background-image: url({{asset('img/eventos/guanajuato/eventos-4.jpg')}})">
                        <p>Juárez Barroco</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/guanajuato/eventos-5.jpg')}})">
                        <p>Pedro y el lobo</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="evento" style="background-image: url({{asset('img/eventos/guanajuato/eventos-7.jpg')}})">
                        <p>Feria De Las Fresas</p>
                    </div>
                </div>
            </div>
        </div>

         <!-- ¿A dónde ir? -->
         <div id="seccion-adondeir">
               <h2>¿A dónde ir?</h2>
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <img id="img-adondeir" src="{{asset('img/destinos/guanajuato/guanajuato.png')}}" alt="Teatro juarez">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <ul>
                       <!--La Marea-->
                        <li data-toggle="modal" data-target="#laMarea">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-1.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre ">Casa de Diego Rivera</p>
                                <p class="opcion-ubicacion">Museo</p>
                            </div>
                        </li>
                        
                        <!--Acuario-->
                        <li data-toggle="modal" data-target="#acuario">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-2.jpeg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Teatro Juárez</p>
                                <p class="opcion-ubicacion">Teatro</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#machado">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-3.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Museo de las Momias</p>
                                <p class="opcion-ubicacion">Museo</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#mazagua">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-4.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Las Mercedes</p>
                                <p class="opcion-ubicacion">Restaurant</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <ul>
                        <li data-toggle="modal" data-target="#presidio">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-5.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Jardín de los Milagros</p>
                                <p class="opcion-ubicacion">Restaurant</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#classico">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-6.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Golem</p>
                                <p class="opcion-ubicacion">Bar</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#angelaPeralta">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-7.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Basílica</p>
                                <p class="opcion-ubicacion">Cultural</p>
                            </div>
                        </li>
                        <li data-toggle="modal" data-target="#catedral">
                            <div data-toggle="modal" data-target="#myModal" class="opcion-imagen" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/donde-8.jpg')}})"></div>
                            <div class="opcion-info hvr-forward">
                                <p class="opcion-nombre">Museo del Juguete</p>
                                <p class="opcion-ubicacion">Museo</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!--MODAL-->
            
            <!--Casa de diego rivera-->
            <div style="margin-top:65px;" class="modal fade" id="laMarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-1.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Casa de Diego Rivera - Museo</h5>
                        </div>
                        <div class="modal-body">
                            <p>Abierto como museo en el año de 1975 se ubica en la que fuera la casa natal del famoso pintor mexicano Diego Rivera. Su acervo en exhibición forma parte de la importante colección del Ing. Marte R. Gómez incluyendo desde obras realizadas durante su infancia como “Cabeza clásica”, hasta sus últimas obras realizadas un año antes de su muerte en 1956, como “Paloma de la paz” y “Madame Libet”.
Adicionalmente, su acervo cuenta con la colección de “Mini estampa”, constituida por obra de artistas reconocidos, como el Maestro José Luis Cuevas entre otros.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Teatro JUAREZ-->
            <div style="margin-top:65px;" class="modal fade" id="acuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                       
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-2.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Teatro Juarez - Teatro</h5>
                        </div>
                        <div class="modal-body">
                            <p>El Teatro Juárez es uno de los recintos de su género más bellos del país. Su edificación inició en el año de 1873 bajo el auspicio del General Florencio Antillón en los terrenos ocupados originalmente por el antiguo convento de San Diego de Alcalá.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Museo de momias-->
            <div style="margin-top:65px;" class="modal fade" id="machado" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-3.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Museo de momias</h5>
                        </div>
                        <div class="modal-body">
                            <p>Aquí vas a apreciar los restos momificados de nuestros ancestros geográficos y culturales. La actual colección de momias naturales más grande del mundo, patrimonio cultural del Municipio de Guanajuato, de la que hoy pueden apreciarse en este recinto 57 elementos.! Ut adipisci sunt quas, in laboriosam cumque sed, sequi blanditiis iste repudiandae nisi recusandae debitis.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--las mercedes-->
            <div style="margin-top:65px;" class="modal fade" id="mazagua" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-4.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Las Mercedes - Restaurante</h5>
                        </div>
                        <div class="modal-body">
                            <p>El restaurante Las Mercedes, Guanajuato es un restaurante 100% familiar donde degustar platillos con sazón mexicano es lo mejor. Su menú tradicional ha sido pasado de generación en generación y cada día aumenta en calidad, frescura y sabor.

                            Sus platillos son dignos de ser nombrados en importantes revistas gracias a su textura, color, sabor y aroma en los que el pozole es el principal plato a disfrutar seguido de los chiles en nogada acompañados por una cerveza o un caballito de tequila.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--jardin de los milagros-->
            <div style="margin-top:65px;" class="modal fade" id="presidio" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-5.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">El Jardín de los Milagros - Restaurante</h5>
                        </div>
                        <div class="modal-body">
                            <p>El Jardín de Los Milagros, un sitio donde el chef Bricio Domínguez, nacido en Toluca pero guanajuatense por adopción, combina las emociones y la comida. Ubicado en una casona que fue propiedad de Juan Nepomuceno -militar, político y diplomático que participó en la Batalla de El Álamo- se degusta una cocina de generación plagada de sabores y texturas. 
                            "Mi cocina nace de mi corazón, de lo más profundo de mis sentimientos, de esos rincones que todo el mundo tenemos" Bricio,
                            Te invitamos a degustar su cocina de autor, con los elementos guanajuatenses.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Golem-->
            <div style="margin-top:65px;" class="modal fade" id="classico" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-6.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Golem - Bar</h5>
                        </div>
                        <div class="modal-body">
                            <p>Golem es un bar de vino, cerveza, café y té, que incluso es galería, ubicado en el centro de Guanajuato.

                                Si quieres ir a disfrutar de un buen ambiente, con buena música y un buen vino, 
                                este es el lugar perfecto.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--basilica-->
            <div style="margin-top:65px;" class="modal fade" id="angelaPeralta" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
               
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-7.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Basílica - Cultural</h5>
                        </div>
                        <div class="modal-body">
                            <p>Se le denominó Parroquia de Guanajuato hasta el año de 1957, en que se le elevó a la categoría de la Basílica de Nuestra Señora de Guanajuato. Su construcción se inició en el año de 1771 y se concluyó en 1796, los mineros fueron quienes cubrieron los costos del lugar. En ese año se llevó al templo la  imagen de la Virgen de Guanajuato, la cual dice la tradición, fue donada por el rey Felipe II. Es una magnifica escultura en madera estofada, llama la atención la dulce belleza de los rostros de la Virgen y el Niño y tiene una rica base de plata repujada de estilo barroco.
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Cmuseo de juguete-->
            <div style="margin-top:65px;" class="modal fade" id="catedral" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document" style="height:570px">
                    <div class="modal-content"  >
                        <div class="modal-header img-modal" style="background-image: url({{asset('img/destinos/guanajuato/recomendacion/modal/modalg-8.jpg')}});" >
                            <button type="button" class="close" data-dismiss="modal"><img class="img-close" src="{{asset('img/close.png')}}" alt=""></button>
                        </div>
                        <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Museo de juguete - Museo</h5>
                        </div>
                        <div class="modal-body">
                            <p>Puedes pasar una hora agradable en el museo del juguete de San Miguel de Allende, de especial interés para los niños y los jóvenes de corazón. Cuenta con tres salas de exposición permanentes: una dedicada a casas de muñecas, otra a animales y el transporte y la tercera sala, llamada “la feria”, contiene máscaras, instrumentos musicales y atracciones de feria en miniatura.
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
                    <img class="card-img-top" src="{{asset('img/destinos/guanajuato/tours/tour-1.jpg')}}" alt="Fun bus">
                    <div class="card-body">
                    <h5 class="card-title">Tour Centro Histórico</h5>
                    <p class="card-text">Tour Centro Histórico Guanajuato, considerado como Patrimonio de la
                    Humanidad por la UNESCO desde 1989. Es una de las ciudades más
                    hermosas de México, con grandes edificios, monasterios, callejones y
                    verdaderos palacios con una hermosa arquitectura colonial construidos en
                    cantera rosada, verde y morada. Conocerás el Teatro Juárez, el Templo de
                    San Diego entre otros símbolos de Guanajuato que sin duda alguna te va a
                    cautivar.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/guanajuato/tours/tour-2.jpg')}}" alt="Huana Coa">
                    <div class="card-body">
                    <h5 class="card-title">Cata de chocolate</h5>
                    <p class="card-text">Cata de Chocolate, en esta vida hay cosas irresistibles como el chocolate y
                    el mezcal. Ven a disfrutar de una deliciosa cata de chocolate y mezcal
                    artesanal.
                    Disfruta en este paseo de una deliciosa cata de chocolates artesanales
                    acompañados de un original maridaje. Deleita a tu paladar con esta
                    experiencia gastronómica con la degustación de diferentes chocolates
                    acompañados de un exquisito y selecto mezcal. Todo esto mientras un
                    experto te explica las características de cada uno de ellos.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/guanajuato/tours/tour-3.jpg')}}" alt="Santuario de Tortugas">
                    <div class="card-body">
                    <h5 class="card-title">Callejoneada en Guanajuato</h5>
                    <p class="card-text">Callejoneada en Guanajuato, disfruta uno de los recorridos más
                    tradicionales de esta ciudad acompañado de una estudiantina que narrará
                    historias y entonará algunas canciones, al mismo tiempo, conocerás las
                    plazas, callejones y los rincones más románticos de la ciudad. Este paseo
                    cultural, es ideal para ser parte del ambiente de fiesta.
                    ¡Diviértete con las ocurrencias de estos músicos y déjate llevar por el
                    contagioso ritmo de sus melodías!</p>
                    </div>
                </div>
                
            </div>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/guanajuato/tours/tour-4.jpg')}}" alt="Isla de la Piedra">
                    <div class="card-body">
                    <h5 class="card-title">Tour Ruta de la Independencia</h5>
                    <p class="card-text">Tour Ruta de la Independencia, una buena forma de conocer la historia de
                    un país es vivirla. Con este tour harás un recorrido por algunos de los
                    destinos más importantes relacionados a la Independencia de México como
                    lo son Dolores Hidalgo, Atotonilco y San Miguel de Allende. Aquí podrás
                    visitar lugares como La Parroquia de Nuestra Señora de Dolores, el Museo
                    Casa Allende, entre otros así como disfrutar de las deliciosas nieves típicas
                    de la región. ¡Un tour ideal para celebrar a México!</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/guanajuato/tours/tour-5.jpg')}}" alt="La Noria y Tequilera Mazatlán">
                    <div class="card-body">
                    <h5 class="card-title">Circuito Día de Muertos 6 días</h5>
                    <p class="card-text">Circuito Día de Muertos 6 días te lleva a disfrutar de un recorrido lleno de
                        tradiciones, cultura e historia en donde visitarás Michoacán, Aguascalientes
                        y Guanajuato.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/destinos/guanajuato/tours/tour-6.jpg')}}" alt="Recorrido en Centro Histórico">
                    <div class="card-body">
                    <h5 class="card-title">Tour a Alhóndiga de Granaditas</h5>
                    <p class="card-text">Tour a Alhóndiga de Granaditas y más Museos, ven a conocer los museos
                        imprescindibles de cualquier visita a Guanajuato. Descubre la historia,
                        ciudades y artistas que con sus obras han dado pie a que la oferta cultural
                        del estado de Guanajuato sea interminable. 
                        El recorrido incluye un paseo por los principales museos y edificios de la
                        Ciudad de Guanajuato: El Museo regional de la Alhóndiga de Granaditas, El
                        Museo Casa Diego Rivera, El Museo de Olga consta y Chávez Morado, El
                        Museo del Pueblo, El Museo Iconográfico del Quijote.</p>
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
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-1.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-1.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-2.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-2.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-6.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-6.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-4.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-4.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-5.jpeg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-5.jpeg')}})"></div>
                        </a>
                    </div> 
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-7.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-7.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-8.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-8.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-9.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-9.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-10.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-10.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-11.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-11.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-12.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-12.jpg')}})"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a class="lightbox" href="{{asset('img/destinos/guanajuato/galeria/GUAN-13.jpg')}}">
                            <div class="imagen-galeria" style="background-image: url({{asset('img/destinos/guanajuato/galeria/GUAN-13.jpg')}})"></div>
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