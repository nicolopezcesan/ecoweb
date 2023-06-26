<?php
  $construction_json = file_get_contents("data/construccion.json");
  $constructions = json_decode($construction_json, false);

  $index = 0;
?>

<section class="grid-images">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="img-fluid">
          <div class="row">

            <?php foreach ($constructions as $item) { ?>
            <div class="col-sm-12 col-md-6 col-lg-4 arq-images carousel">
              <img src="<?php echo $item->image; ?>">
              <div class="hover-img">
                <h5><?php echo $item->name; ?></h5>

                <a href="<?php echo $item->link; ?>"
                   class="btn btn-secondary btn-xs p-2 my-2">MAS INFO</a>
              </div>
            </div>
            <?php  $index++; } ?>

          </div>
        </div>
      </div>
    </div>
</section>