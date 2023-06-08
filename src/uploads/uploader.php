<?php

if ($_GET['article_id'] != '') {
  include_once '../mysql/mysql.php';

  $sql = "SELECT count(*) as total from images WHERE article = ".$_GET['article_id'].' LIMIT 0, 1;';
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  $target_dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
  $target_file = $target_dir . basename($_FILES["upload"]["name"]);

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  echo   $imageFileType;


  print_r($_FILES);
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["upload"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["upload"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {

      $final_file_name =  time().'.'.$imageFileType;
      if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_dir.$final_file_name)) {

          resizeImage($final_file_name, 1920, 1920, $target_dir, $target_dir);

          $sql = 'INSERT INTO images
            (`article`, `link`, `order_image`) 
          VALUES
            ('.$_GET['article_id'].', "'.$final_file_name.'", '.((int)$row['total']+1).');';


        if ($conn->query($sql) === TRUE) {
            $conn->insert_id;
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      } else {
          echo "Sorry, there was an error uploading your file.<br>";
      }
  }

  $conn->close();

  }

function resizeImage($image_name,$new_width,$new_height,$uploadDir,$moveToDir) {

  $path = $uploadDir . '/' . $image_name;

  $mime = getimagesize($path);

  if($mime['mime']=='image/png') { 
    $src_img = imagecreatefrompng($path);
  }

  if($mime['mime']=='image/jpg' || $mime['mime']=='image/jpeg' || $mime['mime']=='image/pjpeg') {
    $src_img = imagecreatefromjpeg($path);
  }  

  $old_x = imageSX($src_img);
  $old_y = imageSY($src_img);

  if ($old_x > $old_y) {
    $thumb_w = $new_width;
    $thumb_h = $old_y*($new_height/$old_x);
  }

  if ($old_x < $old_y) {
    $thumb_w = $old_x*($new_width/$old_y);
    $thumb_h = $new_height;
  }

  if ($old_x == $old_y) {
    $thumb_w = $new_width;
    $thumb_h = $new_height;
  }

  $dst_img = ImageCreateTrueColor($thumb_w,$thumb_h);

  imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 


  // New save location
  $new_thumb_loc = $moveToDir . $image_name;

  if($mime['mime']=='image/png') {
      $result = imagepng($dst_img,$new_thumb_loc,8);
  }
  if($mime['mime']=='image/jpg' || $mime['mime']=='image/jpeg' || $mime['mime']=='image/pjpeg') {
      $result = imagejpeg($dst_img,$new_thumb_loc,80);
  }

  imagedestroy($dst_img); 
  imagedestroy($src_img);

  return $result;
}

?>