let items = document.querySelectorAll(
    ".clients-carousel .carousel .carousel-item .slide-carousel"
  );
  
  items.forEach((el) => {
    const minPerSlide = 6;
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
    /*
      $(window).scroll( function(){
          $('section').each( function(i){
              
              var bottom_of_element = $(this).offset().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();
              
              if((bottom_of_window+800) > bottom_of_element-400 ){
                  $(this).animate({'opacity':'1'}, 600);
              }
              
          }); 
      });
      */
  });
  