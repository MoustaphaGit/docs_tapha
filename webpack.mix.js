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

mix.js(['resources/js/app.js','resources/js/scrolling-nav.js','resources/js/dataTables-data.js','resources/js/db.js'
,'resources/js/dropdown-bootstrap-extended.js','resources/js/editable-table-data.js','resources/js/feather.min.js','resources/js/flot-data.js'
,'resources/js/form-file-upload-data.js','resources/js/form-picker-data.js','resources/js/form-wizard-data.js','resources/js/gallery-data.js','resources/js/init.js'
,'resources/js/inputspinner-data.js','resources/js/jquery.slimscroll.js','resources/js/lightgallery-all.js','resources/js/login-data.js'
,'resources/js/modal-data.js','resources/js/owl-data.js','resources/js/select2-data.js'
,'resources/js/toggle-data.js','resources/js/validation-data.js','resources/js/widgets-data.js'], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    .styles(['resources/css/scrolling-nav.css','resources/css/style.css','resources/css/style_2.css',
            'resources/css/lightgallery.css','resources/css/linea-icon.css','resources/css/simple-line-icons.css'],
        'public/css/docs.css'
    );


