<div id="carouselNews" class="carousel slide" data-bs-ride="carouselNews">
  <div class="carousel-indicators">
    <?php
      if (isset($images_data) && count($images_data) > 0){
        for($i = 0; $i < count($images_data); $i++) {
    ?>
    <button type="button" data-bs-target="#carouselNews"
            data-bs-slide-to="<?php echo $i ?>"
            class="<?php echo $i === 0 ? 'active' : '' ?>" aria-current="true"
            aria-label="Novedades"></button>
    <?php
        }
      }
    ?>
  </div>

  <div class="carousel-inner">
    <?php
      if (isset($images_data) && count($images_data) > 0){
        for($i = 0; $i < count($images_data); $i++) {
    ?>
    <div class="carousel-item <?php echo $i === 0 ? 'active' : '' ?>">
      <div class="carousel-item-content">
        <img src="/uploads/<?php echo $images_data[$i]['link'] ?>"
             class="d-block w-100">
      </div>
    </div>
    <?php
        }
      }
    ?>
  </div>

  <div class="carousel-title-container">
    <h4><?php echo $article_data['name'] ?></h4>
    <h3><?php echo $article_data['title'] ?></h3>
  </div>

  <button class="carousel-control-prev control-buttons" type="button"
          data-bs-target="#carouselNews" data-bs-slide="prev">
    <span class="carousel-control-prev-icon control-icon"
          aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next control-buttons" type="button"
          data-bs-target="#carouselNews" data-bs-slide="next">
    <span class="carousel-control-next-icon control-icon"
          aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>