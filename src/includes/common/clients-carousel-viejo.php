<?php
$clients = [
    "axion.jpg",
    "cirque-du-soleil.jpg",
    "coca.jpg",
    "fargo.jpg",
    "petrobras.jpg",
    "quilmes.jpg",
    "techint.jpg",
    "ypf.jpg",
]; ?>
<div class="clients-carousel text-center">
  <div class="container">
    <div class="
       banner-title">
      <h2>Clientes destacados</h2>
      <hr class="line-below" />
    </div>
    <div class="row mx-auto my-auto justify-content-center">
      <div id="clientsCarousel"
           class="carousel slide"
           data-bs-ride="carousel">
        <div class="carousel-inner"
             role="listbox">
          <?php for ($i = 0; $i < count($clients); $i++) { ?>
          <div class="carousel-item <?php echo $i == 0 ? "active" : ""; ?>">
            <div class="col-6 col-sm-2">
              <div class="card-img">
                <img src="/assets/images/clients/<?php echo $clients[$i]; ?>"
                     class="img-fluid img-item">
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <a class="carousel-control-prev bg-transparent w-aut"
           href="#clientsCarousel"
           role="button"
           data-bs-slide="prev">
          <i class="bi bi-chevron-left"></i>
        </a>
        <a class="carousel-control-next bg-transparent w-aut"
           href="#clientsCarousel"
           role="button"
           data-bs-slide="next">
          <i class="bi bi-chevron-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>