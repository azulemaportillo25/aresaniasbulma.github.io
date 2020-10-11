<?php
  
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Ha ocurrido un error :c");

  if (!empty($_POST['nombre'])    &&
      !empty($_POST['apellido'])  &&
      !empty($_POST['usuario'])   &&
      !empty($_POST['clave'])     &&
      !empty($_POST['edad'])      &&
      !empty($_POST['correo']))
  {
    $forename = get_post($conn, 'nombre');
    $surname  = get_post($conn, 'apellido');
    $username = get_post($conn, 'usuario');
    $password = get_post($conn, 'clave');
    $age      = get_post($conn, 'edad');
    $email    = get_post($conn, 'correo');
    $query    = "INSERT INTO registros_totales VALUES" .
      "('$forename', '$surname', '$username', '$password', '$age', '$email')";
    $result   = $conn->query($query);
    if (!$result) echo "INSERT fallido<br><br>";

  }

  $forename = $surname = $username = $password = $age = $email = "";

  if (isset($_POST['nombre']))
    $forename = fix_string($_POST['nombre']);
  if (isset($_POST['apellido']))
    $surname  = fix_string($_POST['apellido']);
  if (isset($_POST['usuario']))
    $username = fix_string($_POST['usuario']);
  if (isset($_POST['clave']))
    $password = fix_string($_POST['clave']);
  if (isset($_POST['edad']))
    $age      = fix_string($_POST['edad']);
  if (isset($_POST['correo']))
    $email    = fix_string($_POST['correo']);

  $fail  = validate_forename($forename); //llama a su funcion y lo valida
  $fail .= validate_surname($surname); //llama a su funcion y lo valida
  $fail .= validate_username($username); //llama a su funcion y lo valida
  $fail .= validate_password($password); //llama a su funcion y lo valida
  $fail .= validate_age($age); //llama a su funcion y lo valida
  $fail .= validate_email($email); //llama a su funcion y lo valida

  if ($fail == "")
  {
    echo "</head><body>Datos del formulario que fueron validados con exito:
      $forename, $surname, $username, $password, $age, $email.</body></html>";

    // This is where you would enter the posted fields into a database,
    // preferably using hash encryption for the password.

	exit;
  }

  echo <<<_UNO
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Página de regístrase a Artesanías en Madera</title>
      <link rel="stylesheet" href="color.css">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
      <style>
        body{
          background-color: coral;
        }
        .alerts{
          background-color: darkgreen;
        }
      </style>

      <script> //empieza  el script
      function validate(form)
      {
        fail  = validateForename(form.forename.value) //llama a su funcion y lo valida
        fail += validateSurname(form.surname.value) //llama a su funcion y lo valida
        fail += validateUsername(form.username.value) //llama a su funcion y lo valida
        fail += validatePassword(form.password.value) //llama a su funcion y lo valida
        fail += validateAge(form.age.value) //llama a su funcion y lo valida
        fail += validateEmail(form.email.value) //llama a su funcion y lo valida

        if   (fail == "")   return true
        else { alert(fail); return false } //manda una alerta de si no retorno
      }

      function validateForename(field)
      {
        return (field == "") ? "No Forename was entered.\n" : "" //que el nombre no este vacio
      }
      
      function validateSurname(field)
      {
        return (field == "") ? "No Surname was entered.\n" : "" //que no este vacio
      }

      function validateUsername(field)
      {
        if (field == "") return "No Username was entered.\n" //que no este vacio
        else if (field.length < 5)
          return "Usernames must be at least 5 characters.\n" //que tenga 5 caracteres
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
        return ""
      }

      function validatePassword(field)
      {
        if (field == "") return "No Password was entered.\n" //que no este vacio
        else if (field.length < 5)
          return "Passwords must be at least 6 characters.\n"
        else if (! /[a-z]/.test(field) ||
                 ! /[A-Z]/.test(field) ||
                 ! /[0-9]/.test(field))
          return "Passwords require one each of a-z, A-Z and 0-9.\n"
        return ""
      }

      function validateAge(field)
      {
        if (isNaN(field)) return "No Age was entered.\\n" //que no este vacio y isNaN: no es numero
        else if (field < 18 || field > 110)
          return "Age must be between 18 and 110.\n"
        return ""
      }

      function validateEmail(field)
      {
        if (field == "") return "No Email was entered.\n" //que no este vacio
          else if (!((field.indexOf(".") > 0) &&
                     (field.indexOf("@") > 0)) ||
                     /[^a-zA-Z0-9.@_-]/.test(field))
            return "The Email address is invalid.\n"
        return ""
      }
    </script> <!--se cierra el script-->

      </head>
      <body>
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
        </div>
        <br>
       
       <!--Cadrd: Example-->
       <div class="card centrado centrarCar" style="width: 38rem; background: cyan;">
           <div class="card-body">
             <h5 class="card-title">Formulario de registro</h5>
             Lo sentimos se encontraron los siguientes errores<br>
             en su formulario: <p><font color=red size=1><i>$fail</i></font></p>
             <form method="post" action="registro.php" onsubmit="return validate(this)">
               <div class="form-group">
                 <label for="formGroupExampleInput">Nombres:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" value="$forename">
               </div>
               <div class="form-group">
                 <label for="formGroupExampleInput2">Apellidos:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput2" name="apellido" value="$surname">
               </div>
               <div class="form-group">
                 <label for="formGroupExampleInput3">Nombre de usuario:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput3" name="usuario" value="$username">
               </div>
               <div class="form-group">
                 <label for="formGroupExampleInput4">Contraseña</label>
                 <input type="password" class="form-control" id="formGroupExampleInput4" name="clave" value="$password">
               </div>
               <div class="form-group">
                 <label for="formGroupExampleInput5">Años</label>
                 <input type="text" class="form-control" id="formGroupExampleInput5" name="edad" value="$age">
               </div>
               <div class="form-group">
                 <label for="formGroupExampleInput6">Correo</label>
                 <input type="text" class="form-control" id="formGroupExampleInput6" name="correo" value="$email">
               </div>
               <button type="submit" class="btn btn-outline-dark">Guardar datos</button>
               <button type="button" class="btn btn-outline-dark"><a href="Productos.php">Pagina de Productos</a></button>
             </form>
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
       
       <script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
       <script src="bootstrap/popper.min.js"></script>
       <script src="bootstrap/bootstrap.min.js"></script>

     </body>
   </html>
_UNO;
   
function validate_forename($field)
{
    return ($field == "") ? "No Forename was entered<br>": "";
}

function validate_surname($field)
{
    return($field == "") ? "No Surname was entered<br>" : "";
}

function validate_username($field)
{
  if ($field == "") return "No Username was entered<br>";
  else if (strlen($field) < 5)
    return "Usernames must be at least 5 characters<br>";
  else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
    return "Only letters, numbers, - and _ in usernames<br>";
  return "";		
}

function validate_password($field)
{
  if ($field == "") return "No Password was entered<br>";
  else if (strlen($field) < 6)
    return "Passwords must be at least 6 characters<br>";
  else if (!preg_match("/[a-z]/", $field) ||
           !preg_match("/[A-Z]/", $field) ||
           !preg_match("/[0-9]/", $field))
    return "Passwords require 1 each of a-z, A-Z and 0-9<br>";
  return "";
}

function validate_age($field)
{
  if ($field == "") return "No Age was entered<br>";
  else if ($field < 18 || $field > 110)
    return "Age must be between 18 and 110<br>";
  return "";
}

function validate_email($field)
{
  if ($field == "") return "No Email was entered<br>";
    else if (!((strpos($field, ".") > 0) &&
               (strpos($field, "@") > 0)) ||
                preg_match("/[^a-zA-Z0-9.@_-]/", $field))
      return "The Email address is invalid<br>";
  return "";
}

function fix_string($string)
{
  if (get_magic_quotes_gpc()) $string = stripslashes($string);
  return htmlentities ($string);
}


   $result->close();
   $conn->close();

   function get_post($conn, $var) /*Aqui esta mandando a llamar la funcion de "get_post" */
   {
     return $conn->real_escape_string($_POST[$var]); /*El metodo de real_escape_string, escapa los caracteres especiales de una cadena 
     para usarla en la sentencia sql, tomando en cuenta el conjunto de caracteres actual de la conexion */
   }

?>