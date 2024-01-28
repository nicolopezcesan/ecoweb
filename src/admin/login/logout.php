<?php

setcookie('ecosan', '', time() - 60, "/", $_SERVER['SERVER_NAME']);
header('Location: ../index.php');

?>