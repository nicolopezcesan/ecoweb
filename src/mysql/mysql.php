<?php
  ini_set('display_errors', 1);

  $servername = "mysql";
  $username = "root";
  $password = "root";
  $dbname = "ecosan";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>