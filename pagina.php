<?php

    echo <<<_UNO
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Página de Artesanías en Madera</title>
            <link rel="stylesheet" href="colors.css">
            <script src='node_modules/jquery/dist/jquery.min.js'></script>
            <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
            <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
            <script src='javascript.js'></script>
        </head>
        
        <body class='colorpagina'>
            <div data-role='header' id="encabezado">
                <div class="columns">
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-11 is-offset-6">
                                <figure class="image is-128x128">
                                    <img src="imagenes/imagen24.jpg" class="imagen">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <p class=" has-background-danger-dark letra title is-1 has-text-link">Artesanías en Madera</p>
                    </div>
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-4 is-offset-1">
                                <figure class="image is-128x128">
                                    <img src="imagenes/imagen29.jpg" class="imagen">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <h5 class='centrado subtitle is-4 has-text-link'>Debe regístrarte para usar esta aplicación</h5>
            <div class="notification is-danger">
                <nav class="breadcrumb is-medium is-centered" aria-label="breadcrumbs">
                    <ul>
                        <li><a class="has-text-primarys has-text-dark" href="#">Artesanías en Madera:</a></li>
                        <li><a class="has-text-primarys has-text-dark" href="pagina.php">Inicio</a></li>
                        <li><a class="has-text-primarys has-text-dark" href="registro.php">Registrate</a></li>
                    </ul>
                </nav>
            </div>

            <!--Carousel-->
            <!--cambia las imagnes automaticamnete-->
            <div id="carouselExampleControls" class="carousel slide centrarCar imag border border-danger" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/imagen1.jpg" class=" imag d-block w-100" alt="Responsive image">
                        <br>
                        <br>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="letra centrado">Las mejores Artesanías en Madera.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagen2.jpg" class="imag d-block w-100" alt="Responsive image">
                        <br>
                        <br>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="letra centrado">Las mejores Artesanías en Madera.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagen3.jpg" class="imag d-block w-100" alt="Responsive image">
                        <br>
                        <br>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="letra centrado">Las mejores Artesanías en Madera.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagen4.jpg" class="imag d-block w-100" alt="Responsive image">
                        <br>
                        <br>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="letra centrado">Las mejores Artesanías en Madera.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagen5.jpg" class="imag d-block w-100" alt="Responsive image">
                        <br>
                        <br>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="letra centrado">Las mejores Artesanías en Madera.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagen9.jpg" class="imag d-block w-100" alt="Responsive image">
                        <br>
                        <br>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="letra centrado">Las mejores Artesanías en Madera.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/imagen29.jpg" class="imag d-block w-100" alt="Responsive image">
                        <br>
                        <br>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="letra centrado">Las mejores Artesanías en Madera.</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <br>

            <!--Accordion Example-->
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button id ="BotonF1" class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Importancia sobre las Artesanias
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body Info1">
                            <p class="text-justify">Se refiere al trabajo de un artesano que realiza sus trabajos a mano, con sus piezas únicas y los sentimientos que le dan a cada una de sus obras. La artesanía es totalmente cultural, ya que tiene la particularidad de variar dependiendo del contexto social, el paisaje, el clima y la historia del lugar donde se realiza. La madera puede ser trabajada para obtener múltiples formas las cuales lograremos obtener una gran diversidad de formas que nos permitirán obtener juguetes, adornos, muebles, entre otros productos.</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 centrado">
                                        <img src="imagenes/artesano.jpg" class="img-fluid image border border-success" alt="Responsive image">
                                    </div>
                                    <div class="col-md-6 centrado">
                                        <img src="imagenes/artesano2.jpg" class="img-fluid image border border-success" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                   <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button id ="BotonF2" class="btn btn-link btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 centrado">
                                            Artesanias de Objetos  
                                        </div>
                                        <div class="col-md-6 centrado">
                                            Artesanias de Animales
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body Info1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 centrado">
                                        <div class="card border-primary" style="width: 18rem;">
                                            <div class="card-body" id="colorcad">
                                                <p class="card-text">La artesanía de objetos, se representan y se ocupan más bien para la decoración de hogares o lugares como las lámparas, sillas, macetas, etc.</p>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagen1.jpg" class="img-fluid image border border-success" alt="Responsive image">
                                                        </div>
                                                        <div class="col-md-6 centrado"> 
                                                           <img src="imagenes/imagen7.jpg" class="img-fluid image border border-success" alt="Responsive image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 centrado">
                                        <div class="card border-primary" style="width: 18rem;">
                                            <div class="card-body" id="colorcad2">
                                                <p class="card-text">Las artesanías en forma de animales, al igual que las artesanías de objetos, son utilizadas para la decoración de hogares, lugares o jardines, se pueden utilizar para adornar al gusto de cada persona.</p>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagen21.jpg" class="img-fluid image image border border-success" alt="Responsive image">
                                                        </div>
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagen32.jpg" class="img-fluid image image border border-success" alt="Responsive image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingthree">
                        <h2 class="mb-0">
                            <button id ="BotonF3" class="btn btn-link btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 centrado">
                                           Artesanias Talladas
                                        </div>
                                        <div class="col-md-4 centrado">
                                            Artesanias de juguetes
                                        </div>
                                        <div class="col-md-4 centrado">
                                            Artesanias para jardinería
                                        </div>
                                    </div>
                                </div
                            </button>
                        </h2>
                    </div>
                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                        <div class="card-body Info1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 centrado">
                                        <div class="card border-primary" style="width: 18rem;">
                                            <div class="card-body border-primary" id="colorcad3">
                                                <p class="card-text">Las artesanías de madera que son talladas se consideran como las más utilizadas por la única razón de que refleja un sentimiento y también existen diferentes formas.</p>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagens6.jpg" class="img-fluid image border border-success" alt="Responsive image">
                                                        </div>
                                                        <div class="col-md-6 centrado">
                                                           <img src="imagenes/imagens11.jpg" class="img-fluid image border border-success" alt="Responsive image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 centrado">
                                        <div class="card border-primary" style="width: 18rem;">
                                            <div class="card-body border-primary" id="colorcad4">
                                                <p class="card-text">La tradición artesanal de fabricar juguetes de madera se mantiene de las personas que aún no pierden ese gusto.</p>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagen14.jpg" class="img-fluid image image border border-success" alt="Responsive image">
                                                        </div>
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagen34.jpg" class="img-fluid image image border border-success" alt="Responsive image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 centrado">
                                        <div class="card border border-primary" style="width: 18rem;">
                                            <div class="card-body" id="colorcad5">
                                                <p class="card-text">La artesanía en madera, para la jardinería, son muy bonitos, para la adornación y para poner de maceteros para las plantas.</p>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagen27.jpg" class="img-fluid image image border border-success" alt="Responsive image">
                                                        </div>
                                                        <div class="col-md-6 centrado">
                                                            <img src="imagenes/imagen31.jpg" class="img-fluid image image border border-success" alt="Responsive image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <br>
            <br>
            
            <!--Pie de pagina-->
            <div data-role="footer" id="piepag">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 centrado">
                            <p>Se brinda información de:</p>
                        </div>
                        <div class="col-md-5 centrado">
                            <img src="imagenes/contacto.png" class="icon img-fluid" alt="Responsive image">
                            <p>Contacto:</p>
                        </div>
                        <br>
                        <div class="col-md-5 text-right">
                            <p>Azulema Portillo Laparra</p>
                        </div>
                        <div class="col-md-5 centrado">
                            <img src="imagenes/telefono.jpg" class="icon img-fluid" alt="Responsive image">
                            <p>Telefono:</p>
                        </div>
                        <br>
                        <div class="col-md-5 text-right">
                            <p>983-211-1951</p>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5 centrado">
                            <img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon img-fluid" alt="Responsive image">
                            <p>Correo:</p>
                        </div>
                        <br>
                        <div class="col-md-5 text-right">
                            <p>portilloazulema@gmail.com</p>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-12 centrado">
                            <p>Hecho en México.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 centrado">
                           <p>Carrera de Programación en la Preparatoria Centro de Bachillerato Tecnológico Industrial y de Servicios no.253 "Miguel Hidalgo y Costilla".</p>
                        </div>
                   </div>
                </div>
                <div data-role="footer" id="piepag2">
                    <div class="container">
                        <div class="row">
                            <div class="col-2 centrado">
                                <!--link de facebook-->
                                <a href="https://m.facebook.com/"><img src="imagenes/facebook.png" class="icon2 img-fluid" alt="Responsive image"></a>
                            </div>
                            <div class="col-2 centrado">
                                <!--link de Gmail-->
                                <a href="https://www.google.com/intl/es/gmail/about/"><img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon2 img-fluid" alt="Responsive image"></a>
                            </div>
                            <div class="col-2 centrado">
                                <!--link de Instagram-->
                                <a href="https://www.instagram.com/"><img src="imagenes/logotipo-instagram_1045-436.jpg" class="icon2 img-fluid" alt="Responsive image"></a>
                            </div>
                            <div class="col-2 centrado">
                                <!--link de Twitter-->
                                <a href="https://twitter.com/login?lang=es"><img src="imagenes/twitter.png" class="icon2 img-fluid" alt="Responsive image"></a>
                            </div>
                            <div class="col-2 centrado">
                                <!--link de spotify-->
                                <a href="https://www.spotify.com/pe/"><img src="imagenes/spot.png" class="icon2 img-fluid" alt="Responsive image"></a>
                            </div>
                            <div class="col-2 centrado">
                                <!--link de Twitter-->
                                <a href="https://www.youtube.com/"><img src="imagenes/youtube.png" class="icon2 img-fluid" alt="Responsive image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
_UNO;
?>