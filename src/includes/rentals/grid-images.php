<?php
  $rental_json = file_get_contents("data/rental.json");
  $rentals = json_decode($rental_json, false);

  $index = 0;
?>

<section class="grid-images">
  <div class="banner-title">
    <h2>Nuestros productos</h2>
    <hr class="line-below" />
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="img-fluid">
          <div class="row">

            <?php foreach ($rentals as $item) { ?>

            <div class="col-sm-4 col-6 arq-images carousel">
              <img src="<?php echo $item->image; ?>" class="d-block"
                   alt="<?php echo $item->name; ?>">
              <div class="hover-img">
                <h5><?php echo $item->name; ?></h5>
                <!-- <hr class="line-below" /> -->
                <a href="<?php echo $item->link; ?>"
                   class="btn btn-danger btn-xs rounded-0 p-2 my-2">MAS INFO</a>
              </div>
            </div>

            <?php  $index++; } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>