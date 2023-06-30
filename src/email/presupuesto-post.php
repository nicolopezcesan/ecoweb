<?php

$producto = $_POST['producto'];
$uso = $_POST['uso'];
$condicion = $_POST['condicion'];
$meses = 1;
$cantidad = $_POST['cantidad'];
$usuarios = $_POST['usuarios'];
$lugar = $_POST['lugar'];
$comentarios = $_POST['comentarios'];
$name = $_POST['name'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

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

      <h2 style='margin: 30px 0 20px;'>Producto</h2>
      <p><b> Producto: </b>" . $producto . "</p>
      <p><b> Uso: </b>" . $uso . "</p>
      <p><b> Condición: </b>" . $condicion . "</p>
      <p><b> Meses: </b>" . $condicion . "</p>
      <p><b> Cantidad: </b>" . $cantidad . "</p>
      <p><b> Cantidad de usuarios: </b>" . $usuarios . "</p>
      <p><b> Lugar: </b>" . $lugar . "</p>
      <p><b> Comentarios: </b>" . $comentarios . "</p>
    </div>
  </body>
</html>
";

echo $body;

// Static data
$to = "nicolopezcesan@gmail.com"; // info@ecosan.com.ar
$subject = "Presupuesto";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Ecosan <ecosan@consultas.com.ar>' . "\r\n";

mail($to, $subject, $body, $headers);

echo "La consulta fue enviada existosamente.";
