<?php

if ($_GET['image_id'] != '') {

  include_once '../mysql/mysql.php';

  $sql = "SELECT link FROM images WHERE image_id = ".$_GET['image_id'];
  $result = $conn->query($sql);
  $image_name = $result->fetch_assoc()['link'];
  
  $target_dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
  $myFile = $target_dir.$image_name;

  $sql = "DELETE FROM images WHERE image_id = ".$_GET['image_id'];
  
  $result = $conn->query($sql);
  unlink($myFile) or die("Couldn't delete file");

  header('Location: ' . $_SERVER['HTTP_REFERER']);

  $conn->close();

  }

?>