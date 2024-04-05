
// JS

import './vendor/jquery-3.6.0.min.js';
import './plugins/waypoints.min.js';
import './vendor/bootstrap.bundle.min.js';
import './plugins/meanmenu.min.js';

//import './plugins/swiper.min.js';
//import Swiper from 'swiper';


// import './plugins/slick.min.js';
import 'slick-carousel';
document.addEventListener("DOMContentLoaded", function() {
  $(".features__active").slick({
    slidesToShow: 1,
    vertical: true,
    verticalSwiping: true,
    swipeToSlide: true,
    focusOnSelect: true,
    dots: true,
    arrows: false,
    speed: 500,
  });

  $(".testimonial-slide").slick({
    speed: 300,
    autoplay: true,
    arrows: false,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa-regular fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa-regular fa-chevron-right"></i></button>',
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1400,
      slidesToShow: 2,
    },
    {
      breakpoint: 1200,
      slidesToShow: 2,
    },
    {
      breakpoint: 992,
      slidesToShow: 1,
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: false,
        slidesToShow: 1,
      },
    },
    ],
  });
});


// import './vendor/magnific-popup.min.js';
//import 'magnific-popup/dist/jquery.magnific-popup.min.js';

import 'magnific-popup';
document.addEventListener("DOMContentLoaded", function() {
  /*======================================
  MagnificPopup image view
  ========================================*/
  $(".popup-image").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });

  ////////////////////////////////////////////////////
  // 22. Parallax Js image move
  if ($('.scene').length > 0) {
    $('.scene').parallax({
      scalarX: 10.0,
      scalarY: 15.0,
    });
  };

  /*======================================
  MagnificPopup video view
  ========================================*/
  $(".popup-video").magnificPopup({
    type: "iframe",
  });
});

// import './vendor/isotope.pkgd.min.js';
// import './vendor/imagesloaded.pkgd.min.js';


import './vendor/vanilla.tilt.js';
import './plugins/counterup.js';
import './plugins/nice-select.min.js';
import './vendor/jquery-ui.min.js';
import './vendor/hover-reveal.js';
import './vendor/tween-max.js';
// import './plugins/parallax.min.js';
import Parallax from 'parallax.js';


import './plugins/parallax-scroll.js';

//import './plugins/jarallax.min.js';
import {jarallax} from 'jarallax';
document.addEventListener("DOMContentLoaded", function() {
  jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.4,
  });
});


import './vendor/ajax-form.js';
//import './vendor/js_circle-progress.min.js';

import WOW from "wow.js"; // Importa la clase WOW desde wow.js
import './main.js';

// Inicializa WOW después de que se haya cargado completamente la página
document.addEventListener("DOMContentLoaded", function() {
    if ($('.wow').length) {
        var wow = new WOW({
          boxClass: 'wow', // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset: 0, // distance to the element when triggering the animation (default is 0)
          mobile: false, // trigger animations on mobile devices (default is true)
          live: true, // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
        });
        wow.init();
      }
});