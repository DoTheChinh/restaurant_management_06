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

 mix .js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
   // .js('resources/assets/js/custom.js','public/js')
   // .styles('resources/assets/Clients/css/animate.css','public/source/css/animate.css')
   // .styles('resources/assets/Clients/css/style.css','public/source/css/style.css')
   // .styles('resources/assets/Clients/css/huong-style.css','public/source/css/huong-style.css')
   mix .copyDirectory('resources/assets/Clients','public/Clients/');