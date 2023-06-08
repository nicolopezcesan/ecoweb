<?php
  $prensa_json = file_get_contents("data/prensa.json");
  $prensa = json_decode($prensa_json, false);

  $index = 0;
?>


<section class="noticias">
  <div class="extra-bg">
    <div class="container container-noticias">

      <div class="row justify-content-center section">


        <?php foreach ($prensa as $item) { ?>
        <div class="col-sm-4 prensa-item">
          <a href="<?php echo $item->link; ?>" target="_blank">
            <div class="img-bg main-image">

              <img src="<?php echo $item->image; ?>"
                   alt="<?php echo $item->name; ?>" class="d-block w-100">
            </div>

            <h3 class="title-news"><?php echo $item->name; ?></h3>
          </a>
        </div>
        <?php  $index++; } ?>

      </div>

      <div class="row">
        <div class="col-sm-12 button-noticias">
          <button type="button"
                  class="btn btn-primary btn-lg">
            Ver más novedades <i class="bi bi-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>