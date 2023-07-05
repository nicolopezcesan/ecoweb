<section id="newsletter">
  <div class="newsletter">
    <div class="container">
      <div class="newsletter-container">
        <i class="bi bi-envelope"></i>
        <h2 id="title">Enterate de nuestras novedades</h2>
        <div id="input-container" class="d-flex">
          <input type="text" class="form-control" placeholder="Ingresa tu email acá" aria-label="Ingresa tu email acá" aria-describedby="newsletter">
          <button id="suscribe-button" type="button" class="btn btn-dark">OK</button>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const button = document.querySelector("#suscribe-button");
  const h2 = document.getElementById("title");

  button.addEventListener('click', (event) => {
    event.preventDefault();

    const container = document.getElementById('input-container');
    container.remove();

    h2.innerHTML = 'Gracias por suscribirte!';
  });
</script>