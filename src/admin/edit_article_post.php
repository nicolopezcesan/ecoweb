<?php
if ($_POST['title'] && $_POST['article_id']) {
  
  include_once '../mysql/mysql.php';

  $sql = 'UPDATE articles SET 
            name = "'.strip_tags(addslashes($_POST['name'])).'",
            title = "'.strip_tags(addslashes($_POST['title'])).'",
            subtitle = "'.strip_tags(addslashes($_POST['subtitle'])).'",
            content = "'.addslashes($_POST['content']).'",
            type = "'.$_POST['type'].'" 
          WHERE article_id = "'.$_POST['article_id'].'";';

  $redirect_file = 'edit_article';
  if (isset($_GET['from'])) {
    $redirect_file = $_GET['from'];
  }

  if ($conn->query($sql) === TRUE) {
      header('Location: '.$redirect_file.'.php?article_id='.$_POST['article_id'].'&edited=1');
  } else {
      header('Location: '.$redirect_file.'.php?article_id='.$_POST['article_id'].'&edited=0');
  }

  $conn->close();
}
  
?>