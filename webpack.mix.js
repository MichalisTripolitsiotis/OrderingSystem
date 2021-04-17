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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/remove-product.js', 'public/js')
    .js('resources/js/calculate-products.js', 'public/js')
    .js('resources/js/add-to-cart.js', 'public/js')
    .js('resources/js/edit-category.js', 'public/js')
    .js('resources/js/navbar-scroll.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
