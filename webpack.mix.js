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
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
    'public/css/seprate/style.css',
    'public/css/seprate/popup.css',
    'public/css/seprate/flexslider.css',
    'public/css/seprate/font-awesome.css',
   ], 'public/css/front_temp.css')
   .scripts([
        'public/js/seprate/jquery.flexisel.js',
        'public/js/seprate/jquery.flexslider.js',
        'public/js/seprate/jquery.magnific-popup.js'
   ],'public/js/front_temp.js')
   .version();

   
