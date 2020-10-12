<?php // login.php
      // Change these details to suit your installation
  $hn = 'localhost'; /*el localhost*/
  $db = 'negocios'; /*la base de datos*/
  $un = 'root';          /*el ususrio*/
  $pw = '';              /*la contraseña*/

  $connection = new mysqli($hn, $un, $pw, $db);
  if ($connection->connect_error) die("Error Fatal");

  function createTable($name, $query)
  {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Tabla '$name' creada o ya existe.<br>";
  }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die("Ha ocurrido un error");
    return $result;

  }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc()) $var = stripslashes($var);
    return $connection->real_escape_string($var);

  }

?>