<?php

include_once '../../mysql/mysql.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if (mysqli_num_rows($result) > 0) {
    setcookie('ecosan', $username, strtotime('+30 days'), "/", $_SERVER['SERVER_NAME']);
    header('Location: ../index.php');
  } else {
    echo '<p>Invalid username or password</p>';
  }
}
