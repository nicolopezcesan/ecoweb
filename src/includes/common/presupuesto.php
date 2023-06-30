<section id="solicitar-presupuesto" class="presupuesto">

  <div class="contact-button" id="presu-button">
    <div class="text">
      Solicitar Presupuesto <i class="bi bi-chevron-up" id="chevron-presu"></i>
    </div>
  </div>

  <div class="presupuesto-box" id="presu-box">
    <div class="container">
      <form action="email/presupuesto-post.php" method="post" name="presupuesto" class="margin-top-2">

        <div class="formulario-tipo-de-presupuesto">
          <h4>Producto</h4>
          <div class="row">
            <article class="col-sm-6 col-md-6 col-lg-4">
              <label>Tipo</label>
              <select aria-required="true" id="producto" name="producto" required class="form-control" onchange="cambia_uso()">
                <option value="Construcciones Modulares">Construcciones Modulares
                <option value="Casas Industriales">Casas Industriales
                <option value="Habitáculos Móviles y Oficinas">Habitáculos Móviles y Oficinas
                <option value="Containers">Containers
                <option value="Baños Químicos">Baños Químicos
                <option value="Duchas">Duchas
                <option value="Cabinas de Vigilancia">Cabinas de Vigilancia
                <option value="Estaciones de Reciclado">Estaciones de Reciclado
                <option value="Shelters">Shelters
                <option value="Obras Civiles">Obras Civiles
              </select>
            </article>
            <article class="col-sm-6 col-md-6 col-lg-3">
              <label>Uso <span>*</span></label>
              <select aria-required="true" name="uso" required class="form-control" onchange="detectarotrouso()">
                <option value="Sanitarios y Vestuarios">Sanitarios y
                  Vestuarios
                </option>
              </select>
            </article>
            <article class="col-sm-6 col-md-3 col-lg-3">
              <label>Condicion <span>*</span></label>
              <select aria-required="true" id="condicion" name="condicion" required class="form-control" onchange="habilitarcantidaddemeses(this.value);">
                <option value="Venta">Venta</option>
                <option value="Alquiler">Alquiler</option>
              </select>
            </article>
            <article class="col-sm-3 col-md-3 col-lg-2" id="tipo-de-presupuesto-alquiler">
              <label>Meses</label>
              <input type="number" min="1" id="meses" value="1" placeholder="Cantidad de Meses" name="meses" class="form-control" disabled aria-required="true" required />
            </article>

            <!-- Evento Obra -->
            <article class="col-sm-3 col-md-3">
              <label>Cantidad</label>
              <input type="number" min="1" aria-required="true" name="cantidad" value="1" id="cantidad" required placeholder="Cantidad de Unidades" class="form-control" />
            </article>
            <article class="col-sm-3 col-md-3">
              <label>Usuarios</label>
              <input type="number" id="usuarios" value="1" name="usuarios" aria-required="true" required placeholder="Cantidad de Usuarios" min="1" class="form-control" />
            </article>
            <article class="col-sm-9 col-md-4 col-lg-6">
              <label>Lugar</label>
              <input type="text" id="lugar" name="lugar" aria-required="true" required class="form-control" />
            </article>
            <article class="col-md-8">
              <label>Comentarios</label>
              <textarea name="comentarios" id="comentarios" class="form-control"></textarea>
            </article>
          </div>
        </div>

        <div class="formulario-datos-personales mt-4">
          <h4>Datos Personales</h4>
          <div class="row">
            <article class="col-sm-6 col-md-4">
              <label>Apellido y Nombre</label>
              <input aria-required="true" id="apellidoynombre" name="name" required class="form-control">
            </article>
            <article class="col-sm-6 col-md-3">
              <label>Empresa</label>
              <input aria-required="true" id="empresa" name="empresa" required type="text" class="form-control">
            </article>
            <article class="col-sm-6 col-md-2">
              <label>Teléfono</label>
              <input aria-required="true" id="telefono" name="telefono" required type="text" class="form-control">
            </article>
            <article class="col-sm-6 col-md-3">
              <label>Email</label>
              <input aria-required="true" id="email" name="email" required type="email" class="form-control" placeholder="ejemplo@gmail.com">
            </article>
          </div>
        </div>

        <div class="g-recaptcha" data-sitekey="6LexKygTAAAAAHek8WaYx7MYY2KvKlGw14NCkudZ"></div>
        <button type="submit" me="enviar" id="enviar" class="btn btn-primary btn-lg send-button">
          Enviar <i class="bi bi-chevron-right more-about"></i>
        </button>

      </form>
    </div>
  </div>
</section>