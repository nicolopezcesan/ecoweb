<?php

$name = $_POST['name'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$rubro = $_POST['rubro'];
$cargo = $_POST['cargo'];
$pais = $_POST['pais'];
$comentarios = $_POST['comentarios'];

$body = "
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      Presupuesto
    </title>

    <style>
      body {
        font-family: sans-serif;
        line-height: 12px;
      }
      div {
        padding: 10px 5px;
      }
      h2 {
        padding: 5px 0;
      }
    </style>
  </head>
  
  <body>
    <div>
      <h2>Datos Personales</h2>
      <p><b> Nombre y Apellido: </b>" . $name . "</p>
      <p><b> Empresa: </b>" . $empresa . "</p>
      <p><b> Teléfono: </b>" . $telefono . "</p>
      <p><b> Email: </b>" . $email . "</p>

      <p><b> Rubro: </b>" . $rubro . "</p>
      <p><b> Cargo: </b>" . $cargo . "</p>
      <p><b> País: </b>" . $pais . "</p>
      <p><b> Comentarios: </b>" . $comentarios . "</p>
    </div>
  </body>
</html>
";

// Static data
$to = "info@ecosan.com.ar";
// $to = "nicolopezcesan@gmail.com";
$subject = "Contacto";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Ecosan <ecosan@consultas.com.ar>' . "\r\n";

mail($to, $subject, $body, $headers);

include 'layout.php';

?>