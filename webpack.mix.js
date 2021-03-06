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
    'resources/js/pages/estates/contact-about.js',
    'resources/js/libraries/notify.js',
    'resources/js/libraries/chart.js'
], 'public/js')

mix.js([
    'resources/js/maps/all-estates.js'
], 'public/js/maps/all-estates.js')

mix.js([
    'resources/js/maps/single-estate.js'
], 'public/js/maps/single-estate.js')

// Admini files
mix.js([
    'resources/js/app.js',
    'resources/js/administracija/main.js',
    'resources/js/administracija/includes/delete.js',
], 'public/js/administracija/app.js')

mix.js([
    'resources/js/administracija/maps/map.js',
    'resources/js/administracija/includes/upload-image.js',
], 'public/js/administracija/estate.js')
mix.js([
    'resources/js/administracija/includes/upload-files.js',
], 'public/js/administracija/upload.js')

    // Contact us

mix.js([
    'resources/js/maps/contact-us.js'
], 'public/js/maps/contact-us.js')

// mix.js([
//     'resources/js/libraries/swiper.js',
// ], 'public/js/libraries.js')


.sass('resources/sass/style.scss', 'public/css/style.css')
.sass('resources/sass/administracija/style.scss', 'public/css/administracija/style.css');
