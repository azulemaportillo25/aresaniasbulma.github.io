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
                    <div class="column letra">
                        <p class=" has-background-danger-dark title is-1 has-text-link is-italic has-text-centered">Artesanías en Madera</p>
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
            <br>
           
            <h5 class="letra centrado subtitle is-3 has-text-white has-background-primary-dark">Las mejores Artesanías en Madera.</h5>
            <br>
            <div class="card">
                <header class="card-header centrado">
                    <p class="card-header-title has-text-primary-dark" id ="BotonF1">
                        Importancia sobre las Artesanias
                    </p>
                </header>
                <div class="card-content has-background-warning">
                    <div class="content">
                        <p class="text-justify">Se refiere al trabajo de un artesano que realiza sus trabajos a mano, con sus piezas únicas y los sentimientos que le dan a cada una de sus obras. La artesanía es totalmente cultural, ya que tiene la particularidad de variar dependiendo del contexto social, el paisaje, el clima y la historia del lugar donde se realiza. La madera puede ser trabajada para obtener múltiples formas las cuales lograremos obtener una gran diversidad de formas que nos permitirán obtener juguetes, adornos, muebles, entre otros productos.</p>
                        <br>
                        <div class="columns">
                            <div class="column">
                                <div class="columns is-mobile">
                                    <div class="column is-11 is-offset-6">
                                        <img src="imagenes/artesano.jpg" class="imagen12">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="columns is-mobile">
                                    <div class="column is-4 is-offset-1">
                                       <img src="imagenes/artesano2.jpg" class="imagen12">
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!--card2-->
            <div class="card">
                 <div class="columns" id ="BotonF2">
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-11 is-offset-6">
                                <p class="card-header-title has-text-primary-dark centrado"> Artesanias de Objetos </p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-11 is-offset-4">
                               <p class="card-header-title has-text-primary-dark centrado"> Artesanias de Animales </p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="card-content has-background-warning">
                    <div class="tile is-ancestor">
                        <div class="card-content has-background-info centrarCar">
                            <div class="tile is-parent">
                               <p>La artesanía de objetos, se representan y se ocupan más bien para la decoración de hogares o lugares como las lámparas, sillas, macetas, etc.</p>    
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-6">
                                            <img src="imagenes/imagen1.jpg" class="imagen12">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-4">
                                            <img src="imagenes/imagen7.jpg" class="imagen12">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="tile is-ancestor">
                       <div class="card-content has-background-success centrarCar">
                            <div class="tile is-parent">
                               <p>Las artesanías en forma de animales, al igual que las artesanías de objetos, son utilizadas para la decoración de hogares, lugares o jardines, se pueden utilizar para adornar al gusto de cada persona.</p>    
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-6">
                                            <img src="imagenes/imagen21.jpg" class="imagen12">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                   <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-4">
                                            <img src="imagenes/imagen32.jpg" class="imagen12">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!--card3-->
            <div class="card">
                <div class="columns" id ="BotonF3">
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-11 is-offset-6">
                                <p class="card-header-title has-text-primary-dark centrado"> Artesanias Talladas</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-11 is-offset-4">
                               <p class="card-header-title has-text-primary-dark centrado"> Artesanias de juguetes</p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="card-content has-background-warning">
                    <div class="tile is-ancestor">
                        <div class="card-content has-background-info centrarCar">
                            <div class="tile is-parent">
                               <p>Las artesanías de madera que son talladas se consideran como las más utilizadas por la única razón de que refleja un sentimiento y también existen diferentes formas.</p>    
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-6">
                                            <img src="imagenes/imagens6.jpg" class="imagen12">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-4">
                                            <img src="imagenes/imagens11.jpg" class="imagen12">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="tile is-ancestor">
                       <div class="card-content has-background-success centrarCar">
                            <div class="tile is-parent">
                               <p>La tradición artesanal de fabricar juguetes de madera se mantiene de las personas que aún no pierden ese gusto.</p>    
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-6">
                                            <img src="imagenes/imagen14.jpg" class="imagen12">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                   <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-4">
                                            <img src="imagenes/imagen34.jpg" class="imagen12">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!--card4-->
            <div class="card">
                <div class="columns" id ="BotonF3">
                    <div class="column">
                        <div class="columns is-mobile">
                            <div class="column is-11 is-offset-5">
                                <p class="card-header-title has-text-primary-dark centrado">Artesanias para jardinería</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content has-background-warning">
                    <div class="tile is-ancestor">
                       <div class="card-content has-background-info centrarCar">
                            <div class="tile is-parent">
                               <p>La tradición artesanal de fabricar juguetes de madera se mantiene de las personas que aún no pierden ese gusto.</p>    
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-6">
                                            <img src="imagenes/imagen27.jpg" class="imagen12">
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                   <div class="columns is-mobile">
                                        <div class="column is-11 is-offset-4">
                                            <img src="imagenes/imagen31.jpg" class="imagen12">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!--Pie de pagina-->
            <footer class="footer" id="piepag">
                <div class="content has-text-centered">
                    <div class="columns is-gapless is-multiline is-mobile has-text-black">
                        <div class="column">Se brinda información de:</div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-1 is-offset-3 has-text-black">
                            <img src="imagenes/contacto.png" class="icon">
                            <p>Contacto:</p>
                        </div>
                        <div class="column is-4 is-offset-3 has-text-black">
                            <p>Azulema Portillo Laparra</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-1 is-offset-3 has-text-black">
                            <img src="imagenes/telefono.jpg" class="icon">
                            <p>Telefono:</p>
                        </div>
                        <div class="column is-4 is-offset-3 has-text-black">
                            <p>983-211-1951</p>
                        </div>
                    </div>
                    <div class="columns is-mobile">
                        <div class="column is-1 is-offset-3 has-text-black">
                            <img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon img-fluid" alt="Responsive image">
                            <p>Correo:</p>
                        </div>
                        <div class="column is-4 is-offset-3 has-text-black">
                            <p>portilloazulema@gmail.com</p>
                        </div>
                    </div>
                    <div class="columns is-gapless is-multiline is-mobile">
                        <div class="column has-text-black">Hecho en México.</div>
                    </div>
                    <div class="columns is-gapless is-multiline is-mobile">
                        <div class="column has-text-black">Carrera de Programación en la Preparatoria Centro de Bachillerato Tecnológico Industrial y de Servicios no.253 "Miguel Hidalgo y Costilla".</div>
                    </div>
                </div>
            </footer>

            <!--Pie de pagina 2-->
            <footer class="footer" id="piepag2">
                <div class="columns is-gapless is-multiline is-mobile">
                    <div class="column has-text-black">
                        <!--link de facebook-->
                        <a href="https://m.facebook.com/"><img src="imagenes/facebook.png" class="icon2"></a>
                    </div>
                    <div class="column has-text-black">
                        <!--link de Gmail-->
                        <a href="https://www.google.com/intl/es/gmail/about/"><img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon2"></a>
                    </div>
                    <div class="column has-text-black">
                       <!--link de Instagram-->
                        <a href="https://www.instagram.com/"><img src="imagenes/logotipo-instagram_1045-436.jpg" class="icon2"></a>    
                    </div>
                    <div class="column has-text-black">
                        <!--link de Twitter-->
                        <a href="https://twitter.com/login?lang=es"><img src="imagenes/twitter.png" class="icon2"></a>
                    </div>
                    <div class="column has-text-black">
                        <!--link de spotify-->
                        <a href="https://www.spotify.com/pe/"><img src="imagenes/spot.png" class="icon2"></a>
                    </div>
                    <div class="column has-text-black">
                        <!--link de youtube-->
                        <a href="https://www.youtube.com/"><img src="imagenes/youtube.png" class="icon2"></a>
                    </div>
                </div>
            </footer>
        </body>
    </html>
_UNO;
?>