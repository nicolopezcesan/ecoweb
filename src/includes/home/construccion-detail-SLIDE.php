<?php
  $construction_json = file_get_contents("data/construccion.json");
  $constructions = json_decode($construction_json, false);

  $index = 0;

  $items_per_slide = 1;
  $items_total = count($constructions);
  $pages_total = round($items_total / 5)
?>

<!-- justify-content-center -->

<section class="construccion">
  <div class="banner-title">
  </div>
  <div class="container imagen-slides">
    <div class="construccion-carousel text-center">

      <div id="construccionCarousel"
           class="carousel slide"
           data-bs-ride="carousel">
        <div class="carousel-inner"
             role="listbox">


          <?php for($i = 0; $i < $pages_total; $i++) { ?>
          <div class="carousel-item <?php echo $i == 0 ? "active" : ""; ?>">


            <?php 
              for($x = $i * $items_per_slide; $x < ($i * $items_per_slide + $items_per_slide); $x++) { 
                $item = $constructions[$x]
              ?>

            <div class="container-fluid col-12 col-sm-4 img-bg">
              <img src="/assets/images/construccion-productos/Construccion-9-Obra-Civil-Publica-1.jpg" class="d-block w-100"
                   alt="Construccion Obra Civil y Publica">
              <div class="hover-img">
                <!-- <h5><?php echo $item->name; ?><br />
                  <?php echo $item->description; ?></h5> -->
                <a href="<?php echo $item->link; ?>"
                   class="btn btn-secondary btn-xs p-2 my-2">MAS
                  INFO</a>
              </div>
            </div>
              
<!-- /////////////////////////////////////////////////////////////////////////////////// -->

            <!-- <div class="container-fluid col-12 col-sm-4 img-bg">
              <img src="<?php echo $item->image; ?>" class="d-block w-100"
                   alt="<?php echo $item->name; ?>">
              <div class="hover-img">
                <h5><?php echo $item->name; ?><br />
                  <?php echo $item->description; ?></h5>
                <a href="<?php echo $item->link; ?>"
                   class="btn btn-secondary btn-xs p-2 my-2">MAS
                  INFO</a>
              </div>
            </div> -->

<!-- /////////////////////////////////////////////////////////////////////////////////// -->

            <?php } ?>
          </div>
          <?php 
            } 
          ?>

        </div>
        <a class="carousel-control-prev bg-transparent w-aut"
           href="#construccionCarousel"
           role="button"
           data-bs-slide="prev">
          <i class="bi bi-chevron-left"></i>
        </a>
        <a class="carousel-control-next bg-transparent w-aut"
           href="#construccionCarousel"
           role="button"
           data-bs-slide="next">
          <i class="bi bi-chevron-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>