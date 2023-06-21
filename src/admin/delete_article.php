<?php
include_once './login/includes/auth-middleware.php';

if ($_GET['article_id'] != '') {
  
  include_once '../mysql/mysql.php';

  $sql = "DELETE FROM articles WHERE article_id = ".$_GET['article_id'];
  $result = $conn->query($sql);

  $sql = "DELETE FROM images WHERE article = ".$_GET['article_id'];
  $result = $conn->query($sql);

  $sql = "DELETE FROM videos WHERE article = ".$_GET['article_id'];
  $result = $conn->query($sql);

  header('Location: ' . $_SERVER['HTTP_REFERER']);

  $conn->close();

  }

?>