<?php

  include_once '../mysql/mysql.php';

  $sql = 'SELECT * FROM articles WHERE type = 1 ORDER BY date ASC';
  $result = $conn->query($sql);


  $sql_news = 'SELECT * FROM articles WHERE type = 4 ORDER BY date ASC';
  $result_news = $conn->query($sql_news);
  
  include_once 'dashboard.php';

  $conn->close();
?>