<section class="form">
  <div class="banner-title">
    <h2>CONTACTENOS</h2>
    <hr class="line-below" />
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-12 form-container top-container">
            <img src="/assets/images/bg-form.png" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact-anchor" class="contact-form">
    <div class="grey-bg">
      <div class="banner-title-form">
        <h2>COMPLETE AHORA EL FORMULARIO</h2>
        <hr class="line-below" />
      </div>
    </div>

    <form action="email/contacto-post.php" method="post">
      <div class="container form-container">
        <div class="row justify-content-center">
          <div class="col-sm-12 ">
            <div class="row">
              <div class="col-sm-4 boxes">
                <label class="title" for="username">APELLIDO Y NOMBRE:
                  <abbr title="required" aria-label="required">*</abbr>
                </label>
                <input class="box" type="text" name="name" required aria-required="true" />
              </div>
              <div class="col-sm-4 boxes">
                <label class="title" for="empresa">EMPRESA: <abbr title="required" aria-label="required">*</abbr></label>
                <input class="box" type="text" name="empresa" required aria-required="true" />
              </div>
              <div class="col-sm-4 boxes">
                <label class="title" for="rubro">RUBRO: <abbr title="required" aria-label="required">*</abbr></label>
                <input class="box" type="text" name="rubro" placeholder="Ej: Industria Petrolera" required aria-required="true" />
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-12 ">
            <div class="row">
              <div class="col-sm-3 boxes">
                <label class="title" for="username">CARGO: <abbr title="required" aria-label="required">*</abbr></label>
                <input class="box" type="text" name="cargo" required />
              </div>
              <div class="col-sm-3 boxes">
                <label class="title" for="empresa">TELEFONO: <abbr title="required" aria-label="required">*</abbr></label>
                <input class="box" type="text" name="telefono" required />
              </div>
              <div class="col-sm-3 boxes">
                <label class="title" for="rubro">EMAIL: <abbr title="required" aria-label="required">*</abbr></label>
                <input class="box" class="title form-control" name="email" type="email" required aria-required="true" placeholder="ejemplo@gmail.com" required />
              </div>
              <div class="col-sm-3 boxes">
                <label class="title" for="rubro">CIUDAD/PAIS: <abbr title="required" aria-label="required">*</abbr></label>
                <input class="box" type="text" name="pais" placeholder="Ej: Chubut, Argentina" required />
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-12 ">
            <div class="row">
              <div class="col-sm-10 boxes">
                <label class="title" for="username">CONSULTA/COMENTARIO:
                  <abbr title="required" aria-label="required">*</abbr>
                </label>
                <textarea name="comentarios" id="comentarios" class="text-box form-control" required></textarea>
              </div>

              <div class="col-sm-2 buton-legal">
                <h3 class="legal">(*) para poder enviar este formulario debera llenar estos campos obligatorios.</h3>
                <button type="submit" class="btn btn-form rounded-0">
                  ENVIAR <i class="bi bi-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

  </div>
  <!-- <div class="row justify-content-center">
      <div class="col-sm-10">
          <div class="row">
              <div class="col-sm-9">
                  <label for="username">CONSULTA/COMENTARIOS: <abbr title="required" aria-label="required">*</abbr></label>
                  <input id="username" type="text" name="cargo" />
              </div>
      
              <div class="col-sm-3">
                  <h3 class="legal"></h3>
                  <button type="button" class="btn btn-primary btn-lg">POLITICA DE CALIDAD Y MEDIOAMBIENTE<i class="bi bi-chevron-right"></i></button>
              </div>
          </div>
      </div>
      </div> -->
</section>