<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Ha ocurrido un error :c");

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
            <div class="alert alert-dark" role="alert">
                <!--menu-->
                <nav class="nav menu">
                    <a class="nav-link" href="pagina.php">Página inicial Artesanías en Madera</a>
                    <a class="nav-link" href="Productos.php">Productos</a>
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
            <script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
            <script src="bootstrap/popper.min.js"></script>
            <script src="bootstrap/bootstrap.min.js"></script>
        </body>
    </html>
_DOS;
?>