import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                
                'resources/js/app.js',
                'resources/js/helper.js',

                /*'resources/js/vendor/jquery-3.6.0.min.js',
                'resources/js/plugins/waypoints.min.js',
                'resources/js/vendor/bootstrap.bundle.min.js',
                'resources/js/plugins/swiper.min.js',
                'resources/js/plugins/meanmenu.min.js',*/





                
                //'resources/js/plugins/slick.min.js',
                //'resources/js/vendor/magnific-popup.min.js',

                //'resources/js/vendor/isotope.pkgd.min.js',
                
                /*'resources/js/vendor/imagesloaded.pkgd.min.js',
                'resources/js/vendor/vanilla.tilt.js',
                'resources/js/plugins/counterup.js',
                'resources/js/plugins/nice-select.min.js',
                'resources/js/vendor/jquery-ui.min.js',
                'resources/js/vendor/hover-reveal.js',
                'resources/js/vendor/tween-max.js',
                'resources/js/plugins/parallax.min.js',
                'resources/js/plugins/parallax-scroll.js',*/

                // 'resources/js/plugins/jarallax.min.js',
                /*'resources/js/vendor/ajax-form.js',
                'resources/js/vendor/js_circle-progress.min.js',
                'resources/js/main.js',*/
                
            ],
            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '$': 'jQuery',
        }
    },
    build: {
      target: 'esnext',
      chunkSizeWarningLimit: 1600,
    },
});



