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

mix.js([
    'resources/assets/js/app.js',
    'node_modules/tether/dist/js/tether.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
], 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css');

mix.js([
    'node_modules/flickity/dist/flickity.pkgd.min.js',
    'node_modules/infinite-scroll/dist/infinite-scroll.pkgd.js',
    'node_modules/node-waves/dist/waves.min.js',
    'node_modules/typeit/dist/typeit.min.js',
], 'public/js/libraries.js');