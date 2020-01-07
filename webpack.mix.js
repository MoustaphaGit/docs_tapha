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

mix.js(['resources/js/app.js','resources/js/owl.carousel.min.js','resources/js/db.js','resources/js/form-file-upload-data.js','resources/js/init.js',
    'resources/js/dropdown-bootstrap-extended.js',
    'resources/js/feather.min.js','resources/js/dataTables-data.js','resources/js/form-wizard-data.js',
    'resources/js/login-data.js','resources/js/validation-data.js','resources/js/owl-data.js'], "public/js")
   .sass('resources/sass/app.scss', 'public/css')

   .styles(['resources/css/style_2.css','resources/css/style.css','resources/css/simple-line-icons.css',
       'resources/css/linea-icon.css','resources/css/ionicons.min.css'], "public/css/docs.css");
