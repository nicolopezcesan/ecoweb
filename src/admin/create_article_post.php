<?php

if (!empty($_POST['title'])) {
  
  include_once '../mysql/mysql.php';

  $sql = 'INSERT INTO articles
            (`name`, `title`, `subtitle`, `content`, `type`, `date`) 
          VALUES
            ("'.strip_tags(addslashes($_POST['name'])).'", 
              "'.strip_tags(addslashes($_POST['title'])).'", 
              "'.strip_tags(addslashes($_POST['subtitle'])).'", 
              "'.addslashes($_POST['content']).'", 
              '.$_POST['type'].',
              now()
            )';
            

  $redirect_file = 'create_article';
  if (isset($_GET['from'])) {
    $redirect_file = $_GET['from'];
  }

  if ($conn->query($sql) === TRUE) {
      header('Location: '.$redirect_file.'.php?created=1&article_id='.$conn->insert_id);
  } else {
      header("Location: '.$redirect_file.'.php?created=0");
  }

  $conn->close();
}
  
?>