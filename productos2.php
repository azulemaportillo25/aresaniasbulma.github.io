<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Ha ocurrido un error :c");

if (!empty($_POST['tipoproducto']))
{
  $tipoproducto = get_post($conn, 'tipoproducto');
  $query       = "INSERT INTO tipo_artesania VALUES" .
    "('$tipoproducto')";
  $result      = $conn->query($query);
  if (!$result) echo "INSERT fallido<br><br>";

}

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
            <script>
                function alerta(){
                    alert("Fue exitosa tu compra");
                }
             </script>
            
            <div data-role='header' class="encabezado">
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

            <!--menu-->
            <div class="notification is-danger">
                <nav class="breadcrumb is-medium is-centered" aria-label="breadcrumbs">
                    <ul>
                        <li><a class="has-text-primarys has-text-dark" href="pagina.php">Página inicial Artesanías en Madera:</a></li>
                        <li><a class="has-text-primarys has-text-dark" href="Productos.php">Inicio</a></li>
                        <li><a class="has-text-primarys has-text-dark" href="lista.php">Lista de Productos</a></li>
                   </ul>
                </nav>
            </div>
            <br>

            <h5 class="letra centrado subtitle is-3 has-text-white has-background-primary-dark">Secciones de Artesanía en Madera</h5>
            <br>

            <!--card con formulario-->
            <div class="centrado centrarCar">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8 centrarCar">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <article class="tile is-child notification is-primary">
                                    <p class="title centrado">Formulario de compra</p>
                                    <br>
                                    <form method="post" action="Productos2.php">
                                        <label class="label centrado">Nombre Producto::</label>
                                        <input class="input is-rounded" type="text" placeholder="Rounded input" name="tipoproducto">
                                        <button type="submit"class="button is-danger is-outlined">Guardar datos</button>
                                        <button type="button" class="button is-link is-outlined"><a href="lista.php" onclick="alerta()">Finalizar compra</a></button>
                                    </form>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <br>
            <br>
            <br>

            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Objetos</p>
            <br>

            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen1.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span>Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Lámpara de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                       <img src="imagenes/imagen7.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                       <p>Floreros de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen29.jpg" class="img-fluid imagen2" alt="Responsive image">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                <p>Barco de lámpara brillante.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen8.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Sillas mesedora de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
           
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen16.jpg" class="imagen3">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span>Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Cucharas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen28.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                   <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Mesedora de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen40.jpg" class="img-fluid imagen2" alt="Responsive image">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                               <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Cofre de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen37.jpg" class="imagen3">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                               <div class="dropdown-content has-background-warning">
                                    <div class="dropdown-item">
                                        <p>Taza de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column is-4 is-offset-5">
                    <img src="imagenes/imagen18.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Casa de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Animales</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen21.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Garzas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen32.jpg" class="imagen4">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                   <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Caballo de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen5.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Porta cervilletas de un defín de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="column">
                        <img src="imagenes/imagen9.jpg" class="imagen2">
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                   <span> Nombre</span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content has-background-warning">
                                   <div class="dropdown-item">
                                        <p>Tucán de madera.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen23.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Pez espada de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen36.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Colibrí de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagens11.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Elefante de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen41.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Búho de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column is-4 is-offset-5">
                    <img src="imagenes/imagen42.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p class="mb-0">Conejo de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            
            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía Talladas</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen17.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Obrero de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen38.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Estatua de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen39.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Señor de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagens6.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Flor talla de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen43.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Adorno de pájaros de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen44.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Adorno de una rosa de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen45.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Flor de alcatraz tallada de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen46.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tigre de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-4 is-offset-5">
                    <img src="imagenes/imagen47.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Esfera de una flor de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Juguetes</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen50.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Muñeca de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen13.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Camión de carga de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen14.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Camioneta de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen15.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Camión de carga de polvo de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen33.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Muñeco de cascanueces de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen34.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Robot de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen48.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Carrito con valero de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen49.jpg" class="imagen5">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Oso de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            
            <p class="title is-3 is-spaced letra3 has-text-black">Artesanía de Jardinería</p>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen31.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Troncos para las plantas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen27.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Cajas para las plantas de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen2.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Tronco de madera para velas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen4.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Pozo de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column">
                    <img src="imagenes/imagen51.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Casa para pájaros de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen24.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Triciclo de madera para las masetas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen35.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Jarrón de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="imagenes/imagen52.jpg" class="imagen4">
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button has-background-primary" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <span> Nombre</span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content has-background-warning">
                                <div class="dropdown-item">
                                    <p>Cajas de madera para las masetas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </body>
    </html>
_UNO;


   function get_post($conn, $var) /*Aqui esta mandando a llamar la funcion de "get_post" */
   {
     return $conn->real_escape_string($_POST[$var]); /*El metodo de real_escape_string, escapa los caracteres especiales de una cadena 
     para usarla en la sentencia sql, tomando en cuenta el conjunto de caracteres actual de la conexion */
   }

?>