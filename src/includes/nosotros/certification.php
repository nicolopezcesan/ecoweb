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
              POLÍTICAS DE CALIDAD Y MEDIOAMBIENTE Y SOSTENIBILIDAD<i id="arrow-icon" style="margin-left: 20px;" class="bi bi-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="info-box" class="row justify-content-center">
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-12 legales">
            <h2>POLÍTICA DE CALIDAD Y MEDIOAMBIENTE</h2><br>
            <hr class="border border-2"> </hr><br>
            <h4 class="text-white"> EN <strong>ECOSAN SA</strong>, NUESTRA MISIÓN ES MANTENERNOS COMO LÍDERES DEL
                MERCADO DE LA CONSTRUCCIÓN MODULAR INDUSTRIALIZADA, Y PRESTACIÓN
                DE SERVICIOS DE ALQUILER DE MÓDULOS Y BAÑOS, BUSCANDO LA PLENA
                SATISFACCIÓN DE LAS NECESIDADES DE NUESTROS CLIENTES, OFRECIENDO
                SERVICIOS Y PRODUCTOS DE LA MÁS ALTA CALIDAD. NUESTRAS ESTRATEGIAS SE
                BASAN EN POLÍTICAS DE INNOVACIÓN Y SUSTENTABILIDAD QUE ABARCAN TODA
                LA CADENA DE VALOR, APORTANDO VENTAJAS COMPETITIVAS EN TODAS LAS
                ETAPAS DEL PROCESO.</h4> <br>
            
            <h3>EN VIRTUD DE ESA MISIÓN TODOS LOS INTEGRANTES DE ECOSAN S.A.
                ASUMIMOS EL COMPROMISO DE:</h3>
            
            <p>Entender el negocio del Cliente para identificar y satisfacer tanto sus expectativas como
              sus necesidades explícitas y latentes.</p>

            <p>Cumplir y respetar los compromisos asumidos.</p>

            <p>Crear relaciones sólidas, sustentables y de mutuo respeto con nuestros Clientes y
              Proveedores.</p>

            <p>Lograr con el aporte de ideas, sugerencias, creatividad, participación y esmero de todo
              el personal, la mejora de nuestros productos, servicios y procesos.</p>

            <p>Priorizar la continuidad del servicio brindado, previniendo los principales riesgos para el
              Cliente, reduciendo sus impactos y solucionando los problemas en tiempos competitivos.</p>

            <p>Capacitarnos con el afán de cumplir nuestros objetivos y mejorar continuamente.</p>

            <p>Cumplir, respetar y hacer respetar los procesos y procedimientos para el cumplimiento
              de la Gestión Ambiental y de la Calidad.</p>

            <p>Promover y difundir nuestros valores entre todos los integrantes de la empresa.</p>

            <p>Asegurar el cumplimiento de los requisitos legales y otros requisitos a los que adhiera
              la empresa, que rigen el desarrollo de su actividad.</p>

            <p>Mejorar la eficacia del Sistema Integrado de Gestión Ambiental y de la Calidad y
              optimizar la performance ambiental de la empresa.</p>

            <p>Priorizar el objetivo de prevención de la contaminación ambiental, orientado hacia el
              control del consumo de los recursos no renovables, los efluentes líquidos y la correcta
              gestión de los residuos.</p>
            
            <p>Establecer, cumplir y mantener actualizados, en pos de una mejora continua,
              los objetivos y las metas de Calidad y Medioambiente de la empresa.</p>

            <p>Dar a conocer y hacer entender esta Política a todas las personas pertenecientes
              a la empresa o que trabajen para ella.</p><br>

            <h3>NUESTRA VISIÓN:</h3>

            <h4 class="text-white"> Aspiramos a ser la empresa líder en nuestro país y extendernos a otros países,
              comprometida con el desarrollo e innovación permanente de soluciones Constructivas
              Modulares e Industrializadas. Nos destacamos por estar a la vanguardia de las propuestas
              industriales sustentables y por la excelencia de nuestros productos, servicios y equipo
              humano. Todo esto se basa en un sistema de gestión productivo eficiente y altamente
              integrado.</h4><br>

            <h3>NUESTROS VALORES:</h3><br>
            <h5 class="text-white">EXCELENCIA:</h5><h5> Nos esforzamos diariamente para ser los mejores en nuestra industria, proporcionando productos y servicios que superen las expectativas de nuestros clientes.
              La calidad en las relaciones dentro de la familia ECOSAN S.A. es el pilar de nuestra
              excelencia.</h5><br>
            
            <h5 class="text-white">SERVICIO:</h5><h5>La vocación de servicio y la satisfacción plena de nuestros clientes son la fuerza que nos impulsa a seguir creciendo.</h5><br>
            
            <h5 class="text-white">FLEXIBILIDAD:</h5><h5>Nos atrevemos a explorar nuevos caminos y a proponer soluciones origina- les a través de ideas, procedimientos, servicios y productos, con el fin de mejorar nuestros
                procesos de gestión integrados. Esto implica mirar hacia el futuro y anticipar los cambios
                en los mercados, clientes y tecnologías.</h5><br>
            
            <h5 class="text-white">SUSTENTABILIDAD:</h5><h5>Estamos comprometidos con la preservación del medio ambiente y el uso eficiente de los recursos energéticos. La sostenibilidad está integrada en todos
                nuestros procesos de gestión, promoviendo la mejora continua en el desempeño ambiental
                y energético y previniendo la contaminación desde la fuente. Fomentamos la eficiencia en
                el uso de la energía y los recursos naturales, compartiendo estos principios con toda
                nuestra cadena de valor y manteniendo un diálogo abierto con las partes interesadas.</h5><br>

            <h5 class="text-white">LIDERAZGO:</h5><h5>Tenemos una visión clara de hacia dónde nos dirigimos, enfocando nuestros recursos para ser una empresa líder en el mercado. Reconocemos y potenciamos las
                capacidades de nuestros colaboradores en este camino hacia el éxito.</h5><br><br><br>

            <h2>POLÍTICA DE SOSTENIBILIDAD</h2><br>
            <hr class="border border-2"> </hr><br>
            <h4 class="text-white"> EN <strong>ECOSAN</strong> ,TRABAJAMOS ENFOCADOS EN LA GENERACIÓN DE VALOR PARA
                NUESTROS CLIENTES Y COLABORADORES, COMPROMETIDOS ECONÓMICA,
                SOCIAL Y AMBIENTALMENTE CON NUESTRO ENTORNO. RECONOCEMOS
                NUESTRA RESPONSABILIDAD EN MINIMIZAR EL IMPACTO AMBIENTAL, MEJORAR
                LAS CONDICIONES LABORALES Y CONTRIBUIR POSITIVAMENTE A LAS COMUNIDADES
                EN LAS QUE OPERAMOS. ES POR ESO QUE INTEGRAMOS LA SOSTENIBILIDAD
                COMO UN PILAR FUNDAMENTAL EN EL DISEÑO, CONSTRUCCIÓN Y OPERACIÓN
                DE LOS PRODUCTOS Y SERVICIOS QUE DESARROLLAMOS. </h4> <br>
            
            <h3>EN VIRTUD DE ESA MISIÓN TODOS LOS INTEGRANTES DE ECOSAN S.A.
                ASUMIMOS EL COMPROMISO DE:</h3><br>

                <h5 class="text-white">GESTIÓN DE RESIDUOS:</h5><h5>Reducir la generación de residuos y promover su reutilización y reciclaje alineados con el modelo de Economía Circular.</h5><br>

                <h5 class="text-white">EFICIENCIA ENERGÉTICA:</h5><h5> Optimizar el consumo de energía de nuestras operaciones y contribuir a la eficiencia de este recurso a través de nuestros productos y servicios,
                  reduciendo así las emisiones de gases de efecto invernadero. </h5><br>

                <h5 class="text-white">CONSUMO DE AGUA:</h5><h5>Reducir nuestro consumo de agua y promover prácticas de uso responsable. Además, buscamos transformar la forma en que se utiliza y se valora el
                  agua a través de nuestros productos y servicios. </h5><br>

                <h5 class="text-white">MATERIALES SOSTENIBLES:</h5><h5>Priorizar el uso de materiales provenientes de fuentes reutilizables y recicladas, contribuyendo así a una gestión responsable de recursos
                  naturales, con menor impacto ambiental y que sean un aporte positivo para el entorno.</h5><br>

                <h5 class="text-white">CUMPLIMIENTO NORMATIVO:</h5><h5>Cumplir con la legislación ambiental y laboral vigente y promover la adhesión a estándares voluntarios alineados con la sostenibilidad.</h5><br>

                <h5 class="text-white">DIVERSIDAD E IGUALDAD:</h5><h5>Promover la diversidad, la igualdad de oportunidades y el respeto en el lugar de trabajo. Fomentar la participación y la retroalimentación de los
                  empleados en la estrategia de sostenibilidad. </h5><br>

                <h5 class="text-white">COMUNICACIÓN:</h5><h5>Comunicar regularmente nuestros logros y desafíos de sostenibilidad a todas las partes interesadas, incluidos colaboradores,
                  clientes y proveedores. </h5><br>

                <h5 class="text-white">PRÁCTICAS DE CONSUMO RESPONSABLE:</h5><h5>Integrar criterios ambientales, sociales y éticos en nuestras compras y contrataciones. Buscamos transformar la cadena de
                  suministro, fomentando prácticas más sostenibles en la industria.</h5><br>

                <h5 class="text-white">MEJORA CONTINUA:</h5><h5>Medir nuestro desempeño en materia ambiental, social y económica con el objetivo de monitorear la estrategia de sostenibilidad de
                  la empresa y asegurarnos de que estamos evolucionando hacia un futuro más sostenible.</h5><br><br>

                <h5 class="text-white">Esta política de sostenibilidad es un compromiso compartido con quienes formamos
                  parte de ECOSAN, y se implementa en todas las áreas de la operación. La misma es
                  pasible de evaluación y actualización regular con el objetivo de verificar la eficacia en
                  la consecución de nuestras metas y en caso de ser necesario, se realizan adaptaciones
                  para impulsar nuestra mejora continua.</h5><br>


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