let items = document.querySelectorAll(".clients-carousel .carousel .carousel-item");

// manage clients carousel (footer)
items.forEach((el) => {
  const minPerSlide = (window.innerWidth < 420) ? 2 : 6;
  let next = el.nextElementSibling;
  for (var i = 1; i < minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = items[0];
    }
    let cloneChild = next.cloneNode(true);
    el.appendChild(cloneChild.children[0]);
    next = next.nextElementSibling;
  }
});

// manage button presupuesto info detail
$(document).ready(function () {
  let isPresuHide = true;
  $("#presu-button").click(() => {
    if (isPresuHide) {
      $("#presu-box").fadeIn();
      $(".contact-button").addClass("open");
    } else {
      $("#presu-box").fadeOut();
      $(".contact-button").removeClass("open");
    }
    isPresuHide = !isPresuHide;
  });
});

// presupuesto-form AJAX petition
$("#newsletter-form").submit(function (event) {
  event.preventDefault();

  const $form = $(this);
  const serializedData = $form.serialize();
  const body = decodeURIComponent(serializedData);
  const $inputs = $form.find('input, select, button, textarea');

  $inputs.prop('disabled', true);

  const request = $.ajax({
    url: 'email/newsletter-post.php',
    type: 'post',
    data: body
  });

  // Callback handler that will be called on success
  request.done(function (response, textStatus, jqXHR) {
    const button = document.querySelector("#suscribe-button");
    const h2 = document.getElementById("title");

    const container = document.getElementById('newsletter-form');
    container.remove();

    h2.innerHTML = 'Gracias por suscribirte!';
  });

  // // Callback handler that will be called on failure
  // request.fail(function (jqXHR, textStatus, errorThrown) {
  // });

  // Callback handler that will be called regardless. If the request failed or succeeded
  request.always(function () {
    $inputs.prop('disabled', false);
  });

});

