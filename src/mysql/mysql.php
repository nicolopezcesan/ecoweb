<?php
ini_set('display_errors', 1);

if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
  // Local
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "ecosan";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  mysql_set_charset('utf-8');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
} else {

  // Production
  $servername = "mysql.globalgate.com.ar";
  $username = "Jkf76FHa";
  $password = "MEtwA9Kx";
  $dbname = "ECO";

  // Ecosan RENTAL
  /* 
      $servername = "localhost";
      $username = "esteba58_ecosan";
      $password = "sindocs3553";
      $dbname = "esteba58_ecosan";
      */

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
}
