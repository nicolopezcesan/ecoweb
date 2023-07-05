<?php

$email = $_POST['email'];

$body = "
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title> Newsletter </title>

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
      <h2>Suscripción Newsletter</h2>
      <p>Hola, quiero suscribirme a las newsletter, mi email es: " . $email . "</p>
    </div>
  </body>
</html>
";

// Static data
// $to = "info@ecosan.com.ar";
$to = "nicolopezcesan@gmail.com";
$subject = "Suscripción a Newsletter";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Ecosan <ecosan@consultas.com.ar>' . "\r\n";

mail($to, $subject, $body, $headers);

?>