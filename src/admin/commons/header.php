<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/admin//index.php">ECOSAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarsExampleDefault"
          aria-controls="navbarsExampleDefault" aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li
          class="nav-item <?php if ($_SERVER['REQUEST_URI'] === '/admin/') { ?>active<?php } ?>">
        <a class="nav-link text-black-10" href="/admin/index.php">Dashboard <span
                class="sr-only">(current)</span></a>
      </li>
      <li
          class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], "create_article.php?type=1") !== false) { ?>active<?php } ?>">
        <a class="nav-link text-black-10" href="/admin/create_article.php?type=1">Crear Novedad en "Home/Novedades"</a>
      </li>
      <h3 class="text-black-10">-</h3>
      <li
          class="nav-item <?php if (strpos($_SERVER['REQUEST_URI'], "create_new.php?type=4") !== false) { ?>active<?php } ?>">
        <a class="nav-link text-black-10" href="/admin/create_new.php?type=4">Crear Nueva Slide en "Home"</a>
      </li>
    </ul>
  </div>
</nav>