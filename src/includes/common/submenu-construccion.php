<style>
  .navbar .custom-menu {
    height: auto;
    padding: 5px;
    background: rgb(0 0 0 / 90%);
  }

  #custom-submenu {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    column-gap: 5%;
    justify-content: space-between;
  }

  #custom-submenu a {
    font-size: 12px;
  }

  #custom-submenu a:after {
    right: -30px;
  }

  .menu li {
    margin: -7px;
  }

  /* @media (max-with: 992px) {
    .navbar .custom-menu {
      height: auto;
      padding: 5px;
      background: rgb(5 140 14 / 90%);
    }

    #custom-submenu {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
  } */
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