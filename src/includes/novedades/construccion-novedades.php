<section class="construccion-novedades">
  <div class="extra-bg">
    <div class="banner-title">
      <h2>ULTIMAS NOVEDADES Y PROYECTOS</h2>
      <hr class="line-below" />
    </div>
    <div class="container container-novedades">
      <div class="row justify-content-center">


        <?php

      if (isset($article_data) && count($article_data) > 0) {
        
        for($i = 0; $i < count($article_data); $i++) {

          $sql = 'SELECT link FROM images WHERE article = "'.$article_data[$i]['article_id'].'" LIMIT 0,1;';
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $article_image = $result->fetch_assoc();
          }

    ?>
        <div class="col-sm-<?php echo $i % 3 ? "6" : "12" ?>">
          <div class="img-bg main-image"
               style="background-image: url('/uploads/<?php echo $article_image['link'] ?>')">
            <div class="hover-img">
              <div class="image-content-novedades">
                <h3><?php echo $article_data[$i]['name'] ?></h3>
                <h2>
                  <?php echo $article_data[$i]['title'] ?>
                </h2>
                <p>
                  <?php echo $article_data[$i]['subtitle'] ?>
                </p>
                <a href="novedades-detail.php?id=<?php echo $article_data[$i]['article_id'] ?>"
                   class="btn btn-secondary <?php echo $i % 3 ? "btn-sm" : "btn-lg"?>">MAS
                  INFO</a>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
      }
    ?>

      </div>

      <div class="row">
        <div class="col-sm-12">
          <a href="/construccion" class="btn btn-primary btn-lg">
            Todos Los Proyectos <i class="bi bi-chevron-right"></i>
          </a>
        </div>
      </div>


    </div>
  </div>
</section>