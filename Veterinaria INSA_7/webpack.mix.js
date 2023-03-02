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

mix.js('resources/ad/js/app.js', 'public/js')
    .sass('resources/ad/sass/app.scss', 'public/css');

mix.autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
        'popper.js/dist/umd/popper.js': ['Popper']
    })
    .js('resources/ad/js/app.js', 'public/js')
    .sass('resources/ad/sass/style.scss', 'public/css')
    .version()