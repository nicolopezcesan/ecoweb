<?php 

  $article_data;

  // GET ARTICLE
  $sql = 'SELECT `article_id`, `name`, `title`, `subtitle` FROM articles ORDER BY date ASC LIMIT 0, 10;';
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
      $article_data[] = $row;
    }
  }


?>
<div class="page novedades">
  <?php include "includes/novedades/construccion-novedades.php"; ?>
  <?php include "includes/novedades/prensa.php"; ?>
  <?php include "includes/novedades/noticias.php"; ?>
  <?php include "includes/common/newsletter.php"; ?>
  <?php include "includes/common/clients-carousel.php"; ?>
</div>


<?php
  $conn->close();

?>