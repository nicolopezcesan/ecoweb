<section id="solicitar-presupuesto" class="presupuesto">

  <div class="contact-button" id="presu-button">
    <div class="text">
      Solicitar Presupuesto <i class="bi bi-chevron-up" id="chevron-presu"></i>
    </div>
  </div>

  <div class="presupuesto-box" id="presu-box">
    <div class="container">
      <form action="form.php" method="post" name="presupuesto" class="margin-top-2">

        <div class="formulario-tipo-de-presupuesto">
          <h4>Producto</h4>
          <div class="row">
            <article class="col-xs-6 col-md-4">
              <label>Tipo</label>
              <select aria-required="true" id="producto" name="producto"
                      required
                      class="form-control" onchange="cambia_uso()">
                <option value="1">Construcciones Modulares
                <option value="2">Casas Industriales
                <option value="3">Habitáculos Móviles y Oficinas
                <option value="4">Containers
                <option value="5">Baños Químicos
                <option value="6">Duchas
                <option value="7">Cabinas de Vigilancia
                <option value="8">Estaciones de Reciclado
                <option value="9">Shelters
                <option value="10">Obras Civiles
              </select>
            </article>
            <article class="col-xs-6 col-md-4">
              <label>Uso <span>*</span></label>
              <select aria-required="true" name="uso" required
                      class="form-control" onchange="detectarotrouso()">
                <option value="Sanitarios y Vestuarios">Sanitarios y
                  Vestuarios
                </option>
              </select>
            </article>
            <article class="col-xs-6 col-md-2">
              <label>Condicion <span>*</span></label>
              <select aria-required="true" id="tipodepresupuesto"
                      name="tipodepresupuesto" required class="form-control"
                      onchange="habilitarcantidaddemeses(this.value);">
                <option value="Venta">Venta</option>
                <option value="Alquiler">Alquiler</option>
              </select>
            </article>
            <article id="tipo-de-presupuesto-alquiler"
                     class="col-xs-6 col-md-2">
              <label>Meses</label>
              <input type="number" min="1" id="cantidaddemeses"
                     value="1"
                     placeholder="Cantidad de Meses"
                     name="cantidaddemeses" class="form-control" disabled
                     aria-required="true" required />
            </article>
          </div>
        </div>
        <div id="formulario-evento-obra-banos-quimicos-y-duchas"
             class="formulario-evento-obra">
          <div class="row">
            <article class="col-xs-6 col-md-2">
              <label>Cantidad</label>
              <input type="number" min="1" aria-required="true"
                     name="cantidad"
                     value="1"
                     id="cantidad" required
                     placeholder="Cantidad de Unidades"
                     class="form-control" />
            </article>

            <article class="col-xs-6 col-md-2">
              <label>Usuarios</label>
              <input type="number" id="cantidaddeusuarios"
                     value="1"
                     name="cantidaddeusuarios" aria-required="true" required
                     placeholder="Cantidad de Usuarios" min="1"
                     class="form-control" />
            </article>
            <article class="col-xs-6 col-md-2">
              <label>Lugar</label>
              <input type="text" id="lugar" name="lugar" aria-required="true"
                     required class="form-control" />
            </article>
            <article class="col-xs-6 col-md-6">
              <label>Comentarios</label>
              <textarea name="comentarios" id="comentarios"
                        class="form-control"></textarea>
            </article>
          </div>
        </div>
        <div class="formulario-datos-personales margin-bottom-2">
          <h4>Datos Personales</h4>
          <div class="row">
            <article class="col-xs-6 col-md-4">
              <label>Apellido y Nombre</label>
              <input aria-required="true" id="apellidoynombre"
                     name="apellidoynombre" required class="form-control">
            </article>
            <article class="col-xs-6 col-md-3">
              <label>Empresa</label>
              <input aria-required="true" id="empresa" name="empresa" required
                     type="text" class="form-control">
            </article>
            <article class="col-xs-6 col-md-2">
              <label>Teléfono</label>
              <input aria-required="true" id="telefono" name="telefono"
                     required
                     type="text" class="form-control">
            </article>
            <article class="col-xs-6 col-md-3">
              <label>Email</label>
              <input aria-required="true" id="email" name="email" required
                     type="email" class="form-control"
                     placeholder="ejemplo@gmail.com">
            </article>
          </div>
        </div>
        <div class="g-recaptcha"
             data-sitekey="6LexKygTAAAAAHek8WaYx7MYY2KvKlGw14NCkudZ"></div>
        <button type="submit" me="enviar" id="enviar"
                class="btn btn-primary btn-lg send-button">
          Enviar <i class="bi bi-chevron-right more-about"></i>
        </button>

      </form>
    </div>
  </div>
</section>