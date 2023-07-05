<?php

if (isset($_COOKIE['ecosan'])) {
  header('Location: index.php');
}

include_once './login/includes/login-form.php';

?>