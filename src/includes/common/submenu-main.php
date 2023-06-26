<?php

$section = $_SERVER['SCRIPT_NAME'];
$selItem = function ($itemName) use ($section) {
  return ($section === $itemName) ? 'selected' : '';
}

?>

<nav class="navbar">
  <div class="menu custom-menu">
    <div class="container font-size line-height text-light">
      <ul id="custom-submenu" class="menu-links navbar-nav">

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