<?php
$includeLogo = strpos($section, 'rentals')  ? '/assets/images/ecosan-logo-rentals.svg' : '/assets/images/ecosan-logo.svg';

$selItem = function ($itemName) use ($section) {
  return strpos($section, $itemName) ? 'class="selected"' : '';
}
?>

<script>
  // collapsa el submenú construcción cuando se despliega el menú principal
  $(document).ready(function() {
      $("#navButton").click(() => {
        setTimeout(() => {
          if ($("#navbarNavAltMarkup").hasClass('show')) {
            $("#submenu-main").fadeOut();
          } else {
            $("#submenu-main").fadeIn();
          }
        }, 400)
      });
  });
</script>

<nav id="mainMenu" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid menu">

    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-between">
          <a class="navbar-brand" href="/">
            <img src="<?php echo $includeLogo; ?>" alt="Ecosan" class="logo" />
          </a>
          <button id="navButton" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
        </div>

        <div class="col-lg-9 d-flex menu-list">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="menu-links navbar-nav <?php echo str_replace('/', '', $section) ?>">
              <li><a href="/" <?php echo $selItem('index'); ?>>Home</a></li>
              <li><a href="/construccion.php" <?php echo $selItem('construccion'); ?>>Construcción</a></li>
              <li><a href="/alquileres.php" <?php echo $selItem('alquileres'); ?>>Alquileres</a></li>
              <li><a href="/nosotros.php" <?php echo $selItem('nosotros'); ?>>Nosotros</a></li>
              <li><a href="/novedades.php" <?php echo $selItem('novedades'); ?>>Novedades</a></li>
              <li><a href="/contacto.php" <?php echo $selItem('contacto'); ?>>Contacto</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</nav>