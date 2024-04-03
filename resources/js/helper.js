
// JS

import './vendor/jquery-3.6.0.min.js';
import './plugins/waypoints.min.js';
import './vendor/bootstrap.bundle.min.js';
// import './plugins/meanmenu.min.js';
import './plugins/meanmenu.js';
import './plugins/swiper.min.js';
import './plugins/slick.min.js';
//import './plugins/wow.js';
import './vendor/magnific-popup.min.js';
import './vendor/isotope.pkgd.min.js';
import './vendor/imagesloaded.pkgd.min.js';
import './vendor/vanilla.tilt.js';
import './plugins/counterup.js';
import './plugins/nice-select.min.js';
import './vendor/jquery-ui.min.js';
import './vendor/hover-reveal.js';
import './vendor/tween-max.js';
import './plugins/parallax.min.js';
import './plugins/parallax-scroll.js';
import './plugins/jarallax.min.js';
import './vendor/ajax-form.js';
import './vendor/js_circle-progress.min.js';

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