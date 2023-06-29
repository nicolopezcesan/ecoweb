<?php
if (!empty($_GET['id'])) {

  $article_data;
  $images_data;

  $article = trim(strip_tags(strtolower($_GET['id'])));

  // GET ARTICLE
  $sql = 'SELECT * FROM articles WHERE article_id = "' . $article . '" LIMIT 0, 1;';
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $article_data = $result->fetch_assoc();
  }


  $sql = 'SELECT * FROM images WHERE article = "' . $article_data['article_id'] . '";';
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
      $images_data[] = $row;
    }
  }

  $conn->close();

?>
  <div class="page novedades-detail">
    <div class="container">
      <?php include "includes/novedades/carousel.php"; ?>
      <?php include "includes/novedades/content.php"; ?>
      <?php include "includes/construccion/asesor.php"; ?>
      <?php include "includes/common/newsletter.php"; ?>
      <?php include "includes/common/clients-carousel.php"; ?>
    </div>
  </div>
<?php
}
?>