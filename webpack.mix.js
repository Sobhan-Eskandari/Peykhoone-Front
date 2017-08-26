let mix = require('laravel-mix');

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

mix.autoload({
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
    tether: ['Tether', 'window.Tether']
});

mix.js([
    // 'node_modules/jquery/dist/jquery.min.js',
    // 'node_modules/tether/dist/js/tether.min.js',
    'resources/assets/js/app.js',
    'resources/assets/js/others/nav/nav.js',
], 'public/js/app.js')
    .sass('resources/assets/sass/site/app.scss', 'public/css/app.css');

mix.js([
    /*'node_modules/lightgallery/dist/js/lightgallery.js',*/
    /*'node_modules/lightgallery/modules/lg-thumbnail.js',*/
    /*'node_modules/lightgallery/modules/lg-fullscreen.js',*/
    'node_modules/infinite-scroll/dist/infinite-scroll.pkgd.js',
    'node_modules/owl.carousel/dist/owl.carousel.js',
    'node_modules/node-waves/dist/waves.min.js',
    'node_modules/typed.js/lib/typed.min.js',
    'public/Hi_Framework/components/Slider/Other Libraries/noUI/nouislider.min.js',
    'node_modules/wnumb/wNumb.js',
    'node_modules/bootstrap-multiselect/dist/js/bootstrap-multiselect.js',
    'public/Hi_Framework/javascript/other/jquery.roto.min.js',
    'public/Hi_Framework/javascript/Scroll/Other Libraries/smooth-scroll.min.js',
    'resources/assets/js/public.js',
    'resources/assets/js/others/responsive.js',
], 'public/js/libraries.js');

mix.js([
    'node_modules/bootstrap-multiselect/dist/js/bootstrap-multiselect.js',
    'node_modules/materialize-stepper/materialize-stepper.js',
    'resources/assets/js/dashboard-azhans.js'
], 'public/js/azhans-dashboard.js');

mix.sass('public/Hi_Framework/dist/Hi_Framework.scss','public/css/Hi_Framework.css');

mix.sass('resources/assets/sass/dashboard-azhans/dashboard-azhans.scss','public/css/dashboard-azhans.css');