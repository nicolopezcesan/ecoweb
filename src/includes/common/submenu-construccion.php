<style>
  .navbar .custom-menu {
    height: auto  ;
    padding: 5px;
    max-height: 100px;
  }

  #custom-submenu {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    column-gap: 6%;
  }

  #custom-submenu a {
    font-size: 12px;
  }
  #custom-submenu a:after {
    right: -30px;
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
