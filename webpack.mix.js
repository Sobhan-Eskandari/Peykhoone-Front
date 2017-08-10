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
    'node_modules/tether/dist/js/tether.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/js/app.js',
], 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css');

mix.js([
    'node_modules/flickity/dist/flickity.pkgd.min.js',
    'node_modules/infinite-scroll/dist/infinite-scroll.pkgd.js',
    'node_modules/node-waves/dist/waves.min.js',
    'node_modules/typed.js/lib/typed.min.js',
    'resources/assets/js/public.js',
], 'public/js/libraries.js');

mix.sass('public/Hi_Framework/dist/Hi_Framework.scss','public/css/Hi_Framework.css');