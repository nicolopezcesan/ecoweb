<style>
  .carousel .control-buttons {
    opacity: 1;
  }

  .carousel .control-buttons .control-icon {
    background-color: rgba(0, 0, 0, 0.4);
    padding: 15%;
  }

  .carousel .control-buttons .control-icon:hover {
    color: #00a89c;
    filter: brightness(0.5) sepia(1) hue-rotate(135deg) saturate(2);
  }

</style>

<div id="slideCarousel" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">

  <div class="carousel-inner">
    <?php for ($i = 0; $i < count($carrousel_images); $i++) { ?>

      <div class="carousel-item <?php echo $i === 0 ? "active" : ""; ?>">
        <img src="<?php echo $carrousel_images[$i]; ?>" class="d-block w-100" alt="...">
      </div>

    <?php } ?>
  </div>

  <button class="carousel-control-prev control-buttons" type="button" data-bs-target="#slideCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon control-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next control-buttons" type="button" data-bs-target="#slideCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon control-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>