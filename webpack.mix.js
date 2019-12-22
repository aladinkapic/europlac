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
    'resources/js/menu/menu.js',
], 'public/js')

mix.js([
    'resources/js/maps/all-estates.js'
], 'public/js/maps/all-estates.js')

mix.js([
    'resources/js/maps/single-estate.js'
], 'public/js/maps/single-estate.js')

// mix.js([
//     'resources/js/libraries/swiper.js',
// ], 'public/js/libraries.js')


.sass('resources/sass/style.scss', 'public/css/style.css');
