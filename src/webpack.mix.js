const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js([
    'resources/js/app.js',
    ], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.combine([
    'public/js/jquery.min.js',
    'public/js/jquery-migrate-3.0.0.js',
    'public/js/jquery-ui.min.js',
    'public/js/popper.min.js',
    'public/js/bootstrap.min.js',
    'public/js/slicknav.min.js',
    'public/js/owl-carousel.js',
    'public/js/magnific-popup.js',
    'public/js/waypoints.min.js',
    'public/js/finalcountdown.min.js',
    'public/js/nicesellect.js',
    'public/js/flex-slider.js',
    'public/js/scrollup.js',
    'public/js/onepage-nav.min.js',
    'public/js/easing.js',
    'public/js/active.js',
    'public/js/facnybox.min.js',
    'public/js/map-script.js',
    'public/js/ytplayer.min.js',
    'public/js/gmap.min.js',
    ], 'public/js/app.js');
