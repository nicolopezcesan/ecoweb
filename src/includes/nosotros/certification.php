<script>
  $(document).ready(function () {
    let isHide = true;
    $("#info-box").fadeOut();
    $("#info-button").click(() => {
      if (isHide) {
        $("#info-box").fadeIn();
        $("#arrow-icon").addClass("open");
      } else {
        $("#info-box").fadeOut();
        $("#arrow-icon").removeClass("open");
      }
      isHide = !isHide;
    });
  });
</script>

<style>
  .open::before {
    transform: rotate(90deg);
  }
</style>

<section class="certification">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div class="row justify-content-center">
          <div class="col-sm-10 certificacion-container">
            <h2 class="certification-title">NUESTRAS CERTIFICACIONES</h2>
            <p class="certification-subtitle">Para Ecosan S.A. es
              estratégico como parte de su gestión asegurar la calidad de
              nuestros productos y servicios, establecer acciones para la
              preservación y cuidado del medio ambiente, como la
              certificación en el diseño, producción y construcción, además
              de la seguridad de nuestros colaboradores. Bajo este objetivo
              asumimos el compromiso de trabajar en conformidad con los
              requisitos de nuestros clientes y bajo los requisitos de
              normas nacionales e internacionales.</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-10 logos-container">
            <div class="col-sm-6">
              <img src="/assets/images/logos-iso.svg" class="logos-iso">
            </div>
            <button id="info-button" type="button" class="btn btn-primary btn-lg">
              POLITICA DE CALIDAD Y MEDIOAMBIENTE<i id="arrow-icon" style="margin-left: 20px;" class="bi bi-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="info-box" class="row justify-content-center">
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-12 legales">
            <h2>DECLARACIÓN DE LA POLÍTICA DE CALIDAD Y
              MEDIOAMBIENTE</h2>
            <hr />
            <h3>NUESTRA MISIÓN:</h3>

            <p>Ser la empresa líder en Argentina dentro del rubro provisión
              y servicios de Baños
              Portátiles, oficinas móviles y conjuntos habitacionales para la
              Industria de la
              Construcción, Petróleo, Gas, Minería y Eventos.
            </p>
            <p>Logrando la Satisfacción integral de Nuestros Clientes,
              ofreciéndoles Productos y
              Servicios de Calidad.
            </p>

            <h3>EN VIRTUD DE ESA MISIÓN TODOS LOS
              INTEGRANTES DE ECOSAN S.AASUMIMOS ELCOMPROMISO DE:</h3>

            <p>Entender el negocio del Cliente para identificar y
              satisfacer tanto sus expectativas
              como sus necesidades explícitas y latentes
            </p>
            <p>Cumplir y respetar los compromisos asumidos.</p>
            <p>Crear relaciones sólidas, sustentables y de mutuo respeto
              con nuestros Clientes y
              Proveedores.
            </p>
            <p>Lograr con el aporte de ideas, sugerencias, creatividad,
              participación y esmero de
              todo el personal, la mejora de nuestros productos, servicios y
              procesos.
            </p>
            <p>Priorizar la continuidad del servicio brindado, previniendo
              los principales riesgos
              para el Cliente, reduciendo sus impactos y solucionando los
              problemas en tiempos
              competitivos.
            </p>
            <p>Capacitarnos con el afán de cumplir nuestros objetivos y
              mejorar continuamente.</p>
            <p>Cumplir, respetar y hacer respetar los procesos y
              procedimientos para el
              cumplimiento de la Gestión Ambiental y de la Calidad.
            </p>
            <p>Promover y difundir nuestros valores entre todos los
              integrantes de la empresa.</p>
            <p>Asegurar el cumplimiento de los requisitos legales y otros
              requisitos a los que
              adhiera la empresa, que rigen el desarrollo de su actividad.
            </p>
            <p>Mejorar la eficacia del Sistema Integrado de Gestión
              Ambiental y de la Calidad y
              optimizar la performance ambiental de la empresa.
            </p>
            <p>Priorizar el objetivo de prevención de la contaminación
              ambiental, orientado hacia
              el control del consumo de los recursos no renovables, los
              efluentes líquidos y la
              correcta gestión de los residuos.
            </p>
            <p>Establecer, cumplir y mantener actualizados, en pos de una
              mejora continua, los
              objetivos y las metas de Calidad y Medioambiente de la empresa.
            </p>
            <p>Dar a conocer y hacer entender esta Política a todas las
              personas pertenecientes a
              la empresa o que trabajen para ella.
            </p>

            <h3>NUESTRA VISIÓN:</h3>

            <p>Lograr ser líder en nuestro segmento y penetrar en el
              mercado externo.</p>

            <h3>NUESTROS VALORES:</h3>

            <p>Vocación de Servicios, para lograr la satisfacción de nuestros Clientes.</p>
            <p>Responsabilidad y Respeto, para cumplir los compromisos asumidos con nuestros Clientes y Proveedores.</p>
            <p>Seriedad, para sostener víncpos perdurables y de mutuo beneficio.</p>
            <p>Rapidez de Respuesta, para solucionar problemas detectados por el Cliente o por Ecosan.</p>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 van-container">
      </div>
    </div>
  </div>
</section>