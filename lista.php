<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Ha ocurrido un error");

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
                        <li><a class="has-text-primarys has-text-dark" href="Productos.php">Productos</a></li>
                   </ul>
                </nav>
            </div>
            <br>
_UNO;

$query  = "SELECT * FROM registros_totales";
$result = $conn->query($query);
if (!$result) die("Error Fatal");

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j) 
{
  $row = $result->fetch_array(MYSQLI_ASSOC); 

  echo "<br>";
  echo "Informacion proporcionada: <br>";
  echo 'Nombre: '   . htmlspecialchars($row['nombre'])      . '<br>';
  echo 'Apellido: ' . htmlspecialchars($row['apellido'])    . '<br>'; 
  echo 'Usuario: '  . htmlspecialchars($row['usuario'])     . '<br>'; 
  echo 'Clave: '    . htmlspecialchars($row['clave'])       . '<br>'; 
  echo 'Edad: '     . htmlspecialchars($row['edad'])        . '<br>'; 
  echo 'Correo: '   . htmlspecialchars($row['correo'])      . '<br>'; 
}

$query  = "SELECT * FROM tamaño_artesanias";
$result = $conn->query($query);
if (!$result) die("Fatal Error");

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j) 
{
  $row = $result->fetch_array(MYSQLI_ASSOC); 

  echo 'Tamaño de producto: ' . htmlspecialchars($row['productsize'])  . '<br>'; 
}

$query  = "SELECT * FROM tipo_artesania";
$result = $conn->query($query);
if (!$result) die("Fatal Error");

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j) 
{
  $row = $result->fetch_array(MYSQLI_ASSOC); 

  echo 'Nombre del producto: '   . htmlspecialchars($row['tipoproducto'])   . '<br>'; 
}

$result->close(); 
$conn->close(); 

  
    echo <<<_DOS
        </body>
    </html>
_DOS;
?>