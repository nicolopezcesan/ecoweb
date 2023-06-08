<?php
  $rental_json = file_get_contents("data/rental.json");
  $rentals = json_decode($rental_json, false);

  $rentals = array_slice($rentals, 0, 4);
  $index = 0;
?>

<section class="rentals" id="rental">
  <div class="banner-title">
    <h2>Rental de Módulos y Baños</h2>
    <hr class="line-below" />
  </div>



  <div class="container">
    <div class="row justify-content-sm-center">

      <div class="col-sm-10 col-12">
        <div class="row">
          <?php foreach ($rentals as $item) { ?>

          <div class="col-sm-3 col-12">
            <div class="img-bg">
              <img src="<?php echo $item->image; ?>" class="d-block"
                   alt="<?php echo $item->name; ?>">
              <div class="hover-img">
                <h5><?php echo $item->name; ?></h5>
                <a href="<?php echo $item->link; ?>"
                   class="btn btn-secondary btn-xs p-2 my-2">MAS
                  INFO</a>
              </div>
            </div>
          </div>

          <?php 
              $index++;
            } 
          ?>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-12 text-center">
      <a href="/rentals"
         class="btn btn-secondary btn-lg rentals-more">
        Alquileres y Ventas <i class="bi bi-chevron-right"></i>
      </a>
    </div>

  </div>

</section>