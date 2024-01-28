<?php

  $images_data;

  $sql = 'SELECT title, subtitle, link FROM articles, images WHERE type = 4 AND images.article = articles.article_id ORDER BY articles.priority;';
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
      $images_data[] = $row;
    }
  }


  $article_data;

  // GET ARTICLE
  $sql = 'SELECT `article_id`, `name`, `title`, `subtitle` FROM articles WHERE type = 1 ORDER BY date DESC LIMIT 0, 7;';
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
      $article_data[] = $row;
    }
  }

?>

<div class="page home">
  <div class="container top-container">
    <?php include "includes/home/carousel.php"; ?>

    <div class="row main-title">
      <div class="col-sm-9 col-10">
        <h3>Construcción Modular</h3>
        <h2>
          EQUILIBRIO PERFECTO ENTRE<br />
          CONSTRUCCIÓN EFICAZ,<br />
          SUSTENTABILIDAD,<br />
          AGILIDAD Y ECONOMÍA.
        </h2>
      </div>
      <div class="col-sm-3 col-2 label">
        <img src="/assets/images/label.svg"
             alt="26 Años - Construccion Modular y Alquileres"
             class="label-home" />
      </div>
    </div>
  </div>
  <?php include "includes/home/construccion.php"; ?>
  <?php include "includes/novedades/construccion-novedades.php"; ?>
  <?php include "includes/home/rental.php"; ?>
  <?php include "includes/common/about.php"; ?>
  <?php include "includes/common/newsletter.php"; ?>
  <?php include "includes/common/clients-carousel-2.php"; ?>
  <?php include "includes/common/presupuesto.php"; ?>

</div>