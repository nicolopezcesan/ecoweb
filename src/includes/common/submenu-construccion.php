<script>
  $(() => {
    $(window).scroll(() => {
      const scrollPosition = $(window).scrollTop();
      if (scrollPosition > 80) {
        $("#mainMenu").fadeOut();
        $("#submenu-main").fadeIn();
      } else if (scrollPosition === 0) {
        $("#mainMenu").fadeIn();
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
$submenuArray = [
  ["SERVICIO INTEGRAL", "/construccion-servicio-integral.php"],
  ["HOSPITALES Y SALUD", "/construccion-hospitales-centros-salud.php"],
  ["OBRA INDUSTRIAL", "/construccion-obra-industrial.php"],
  ["ARQ. COMERCIAL", "/construccion-arquitectura-comercial.php"],
  ["ARQ. VIVIENDAS", "/construccion-arquitectura-vivienda.php"],
  ["OFICINAS/LAB.", "/construccion-oficinas-laboratorios.php"],
  ["OBRAS CAMPAMENTOS", "/construccion-campamentos.php"],
  ["ARQ. CONTAINERS", "/construccion-arquitectura-containers-maritimos.php"],
  ["OBRA CIVIL Y PÚBLICA", "/construccion-obra-civil-publica.php"],
];

include_once 'includes/common/submenu-main.php';

?>