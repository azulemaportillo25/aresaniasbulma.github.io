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
            <!--Bootstrap css-->
            <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        </head>
        <body class='colorpagina'>
            <script>
                function alerta(){
                    alert("Fue exitosa tu compra");
                }
             </script>
            <div data-role='header' id="encabezado">
                <!--Offset classes-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen24.jpg" class="img-fluid imagen" alt="Responsive image"></div>
                        <div class="col-md-4"><p class="font-italic display-3 letra">Artesanías en Madera</p></div>
                        <div class="col-md-4"><img src="imagenes/imagen29.jpg" class="img-fluid float-right imagen" alt="Responsive image"></div>
                    </div>
                </div>
            </div>
            <br>
            <!--alerta-->
            <div class="alert alert-dark" role="alert">
                <!--menu-->
                <nav class="nav menu">
                    <a class="nav-link" href="pagina.php">Página inicial Artesanías en Madera</a>
                    <a class="nav-link" href="Productos.php">Inicio</a>
                    <a class="nav-link active" href="lista.php">Lista de Productos</a>
                </nav>
            </div>
            <br>

            <div class="p-3 mb-2 bg-primary centrado"><h5>Secciones de Artesanía en Madera</h5></div>
            <br>

            <!--Cadrd: Example-->
            <div class="card centrado centrarCar" style="width: 38rem; background: cyan;">
               <div class="card-body">
                  <h5 class="card-title">Formulario de registro</h5>
                  <form method="post" action="productos2.php">
                    <div class="form-group">
                       <label for="formGroupExampleInput">Nombre Producto:</label>
                       <input type="text" class="form-control" id="formGroupExampleInput" name="tipoproducto">
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Guardar datos</button>
                    <button type="button" class="btn btn-outline-dark"><a href="lista.php" onclick="alerta()">Finalizar compra</a></button>
                  </form>
               </div>
            </div>
            <br>
            <br>

            <h3 class="letra3">Artesanía de Objetos</h3>
            <br>
                <!--Offset classes-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen1.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Lámpara de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen7.jpg" class="img-fluid imagen3" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Floreros de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen29.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Barco de lámpara brillante.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen8.jpg" class="img-fluid  imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Sillas mesedora de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen16.jpg" class="img-fluid imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Cucharas de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen28.jpg" class="img-fluid imagen6" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Mesedora de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen40.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Cofre de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen37.jpg" class="img-fluid imagen3" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Taza de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen18.jpg" class="img-fluid imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Casa de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="letra3">Artesanía de Animales</h3>
                <br>
                <!--Offset classes-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen21.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Garzas de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen32.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Caballo de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen5.jpg" class="img-fluid  imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Porta cervilletas de un defín de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen9.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Tucán de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen23.jpg" class="img-fluid imagen3" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Pez espada de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen36.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Colibrí de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagens11.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Elefante de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen41.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Búho de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen42.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Conejo de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <h3 class="letra3">Artesanía Talladas</h3>
                <br>
                <!--Offset classes-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen17.jpg" class="img-fluid imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Obrero de madera.</p>
                                </div>
                            </div></div>
                        <div class="col-md-4"><img src="imagenes/imagen38.jpg" class="img-fluid imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Estatua de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen39.jpg" class="img-fluid  imagen4" alt="Responsive image">
                        <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Señor de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagens6.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Flor talla de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen43.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Adorno de pájaros de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen44.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Adorno de una rosa de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen45.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Flor de alcatraz tallada de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen46.jpg" class="img-fluid imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Tigre de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen47.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Esfera de una flor de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <h3 class="letra3">Artesanía de Juguetes</h3>
                <br>
                <!--Offset classes-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen50.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Muñeca de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen13.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Camión de carga de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen14.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Camioneta de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen15.jpg" class="img-fluid imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Camión de carga de polvo de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen33.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Muñeco de cascanueces de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen34.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Robot de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen28.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Mesedora de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen48.jpg" class="img-fluid imagen5" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Carrito con valero de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen49.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Oso de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <h3 class="letra3">Artesanía de Jardinería</h3>
                <br>
                <!--Offset classes-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen31.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Troncos para las plantas de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen27.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Cajas para las plantas de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen14.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Camioneta de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen2.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Tronco de madera para velas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen4.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Pozo de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen51.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Casa para pájaros de madera.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"><img src="imagenes/imagen24.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Triciclo de madera para las masetas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen35.jpg" class="img-fluid imagen4" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Jarrón de madera.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"><img src="imagenes/imagen52.jpg" class="img-fluid imagen2" alt="Responsive image">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2 colorm2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nombre
                                </button>
                                <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;" id="colorm1">
                                    <p class="mb-0">Cajas de madera para las masetas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            
         
            <script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
            <script src="bootstrap/popper.min.js"></script>
            <script src="bootstrap/bootstrap.min.js"></script>    
        </body>
    </html>
_UNO;


   function get_post($conn, $var) /*Aqui esta mandando a llamar la funcion de "get_post" */
   {
     return $conn->real_escape_string($_POST[$var]); /*El metodo de real_escape_string, escapa los caracteres especiales de una cadena 
     para usarla en la sentencia sql, tomando en cuenta el conjunto de caracteres actual de la conexion */
   }

?>