

// CSS here
// import '../css/vendor/bootstrap.min.css';
// import '../css/vendor/animate.min.css';
// import '../css/plugins/swiper.min.css';
// import '../css/plugins/slick.css';
// import '../css/vendor/magnific-popup.css';
// import '../css/vendor/fontawesome-pro.css';
// import '../css/vendor/hover-reveal.css';
// import '../css/vendor/icomoon.css';
// import '../css/vendor/spacing.css';
// import '../css/main.css';



// Importa todos los archivos en la carpeta components
const themes = import.meta.glob('../scss/theme/*.scss');
for (const path in themes) {
  themes[path]();
}

const components = import.meta.glob('../scss/components/*.scss');
for (const path in components) {
  components[path]();
}


const layout = import.meta.glob('../scss/layout/*.scss');
for (const path in layout) {
  layout[path]();
}

const plugins = import.meta.glob('../scss/plugins/*.scss');
for (const path in plugins) {
  plugins[path]();
}

const utils = import.meta.glob('../scss/utils/*.scss');
for (const path in utils) {
  utils[path]();
}




// JS here
// import './vendor/jquery-3.6.0.min.js';
// import './plugins/waypoints.min.js';
// import './vendor/bootstrap.bundle.min.js';
// import './plugins/meanmenu.min.js';
// import './plugins/swiper.min.js';
// import './plugins/slick.min.js';
// import './plugins/wow.js';
// import './vendor/magnific-popup.min.js';
// import './vendor/isotope.pkgd.min.js';
// import './vendor/imagesloaded.pkgd.min.js';
// import './vendor/vanilla.tilt.js';
// import './plugins/counterup.js';
// import './plugins/nice-select.min.js';
// import './vendor/jquery-ui.min.js';
// import './vendor/hover-reveal.js';
// import './vendor/tween-max.js';
// import './plugins/parallax.min.js';
// import './plugins/parallax-scroll.js';
// import './plugins/jarallax.min.js';
// import './vendor/ajax-form.js';
// import './vendor/js_circle-progress.min.js';
// import './main.js';

