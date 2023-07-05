<script>
  $(() => {
    $(window).scroll(() => {
      const scrollPosition = $(window).scrollTop();
      const width = window.innerWidth;
      if (scrollPosition > 80) {
        $("#mainMenu").fadeOut();
        $("#submenu-main").fadeIn();
      } else if (scrollPosition === 0) {
        $("#mainMenu").fadeIn();
        setTimeout(() => {
          if ($("#navbarNavAltMarkup").hasClass('show')) {
            $("#submenu-main").fadeOut();
          }
        }, 400);
      }
    });
  });
</script>

<style>
  .navbar .custom-menu {
    height: auto;
    padding: 5px;
    background: rgb(0 0 0 / 90%);
  }

  #custom-submenu a {
    font-size: 11px;
    padding: 10px 8px;
  }

  #custom-submenu li {
    padding: 0 10px;
  }

  body .menu #custom-submenu li:after {
    position: unset;
  }

  .menu .menu-links li a:after {
    right: 20px;
  }
</style>


<?php

$section = $_SERVER['SCRIPT_NAME'];
$selItem = function ($itemName) use ($section) {
  return ($section === $itemName) ? 'selected' : '';
}

?>

<nav id="submenu-main" class="navbar">
  <div class="menu custom-menu">
    <div class="container p-0">
      <ul id="custom-submenu" class="menu-links navbar-nav d-flex flex-wrap flex-row justify-content-sm-start justify-content-xs-between justify-content-between">

        <? foreach ($submenuArray as $value) { ?>
          <li class="nav-item">
            <a class="nav-link <?php echo $selItem($value[1]); ?>" data-toggle="tab" href=<?php echo $value[1] ?>>
              <?php echo $value[0] ?>
            </a>
          </li>
        <?php } ?>

      </ul>
    </div>
  </div>
</nav>