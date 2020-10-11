<!DOCTYPE html>
<html>
    <head>
      <title>configuracion de la base de datos</title>
    </head>
    <body>

      <h3>configurando...</h3>

<?php

   require_once 'login.php';

   createTable('registros_totales', 
               'nombre VARCHAR(128),
               apellido VARCHAR(128),
               usuario VARCHAR(16),
               clave VARCHAR(16),
               edad SMALLINT,
               correo VARCHAR(128),
               INDEX(nombre(8)),
               INDEX(apellido(8)),
               INDEX(usuario(5)),
               INDEX(clave(6)),
               INDEX(edad),
               INDEX(correo(8))');

    createTable('tamaño_artesanias',
                'productsize VARCHAR(100),
                INDEX(productsize(8))');
    
    createTable('tipo_artesania',
                'tipoproducto VARCHAR(100),
                INDEX(tipoproducto(8))');

?>

      <br>...configurado.
    </body>
</html>
