<?php include "includes/common/head-scripts.php"; ?>
<!DOCTYPE html>
<html lang="es">
<?php include "includes/common/head.php"; ?>

<body>
  <?php

    $section = preg_replace('/\\.[^.\\s]{3,4}$/', '', $_SERVER['SCRIPT_NAME']);
    include "includes/common/menu.php"; 
    include "includes/common/submenu-rentals.php";
    include "pages/rentals.php";
    include "includes/common/footer.php";
  ?>
  <script src="/javascript/scripts.js"></script>
</body>

</html>