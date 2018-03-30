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

mix.js('resources/assets/js/app.js', 'public/js')
    .scripts('resources/assets/js/vue_init.js'
        , 'public/js/vue_init.js')
    .scripts(['resources/assets/paperkit/js/jquery-3.2.1.min.js',
    'resources/assets/paperkit/js/jquery-ui-1.12.1.custom.min.js',
    'resources/assets/paperkit/js/popper.js',
    'resources/assets/paperkit/js/bootstrap.min.js',
    'resources/assets/paperkit/js/paper-kit.js'
    ],'public/js/paper-kit.js')
    .scripts([
        'resources/assets/material-dashboard/js/jquery-3.2.1.min.js',
        'resources/assets/material-dashboard/js/bootstrap.min.js',
        'resources/assets/material-dashboard/js/material.min.js',
        'resources/assets/material-dashboard/js/perfect-scrollbar.jquery.min.js',
        'resources/assets/material-dashboard/js/arrive.min.js',
        'resources/assets/material-dashboard/js/jquery.validate.min.js',
        'resources/assets/material-dashboard/js/moment.min.js',
        'resources/assets/material-dashboard/js/jquery.bootstrap-wizard.js',
        'resources/assets/material-dashboard/js/bootstrap-notify.js',
        'resources/assets/material-dashboard/js/bootstrap-datetimepicker.js',
        'resources/assets/material-dashboard/js/nouislider.min.js',
        'resources/assets/material-dashboard/js/jquery.select-bootstrap.js',
        'resources/assets/material-dashboard/js/sweetalert2.js',
        'resources/assets/material-dashboard/js/jasny-bootstrap.min.js',
        'resources/assets/material-dashboard/js/jquery.tagsinput.js'
    ], 'public/js/material.js')
    .scripts('resources/assets/material-dashboard/js/material-dashboard.js'
        , 'public/js/material-dashboard.js')
    .scripts('resources/assets/material-dashboard/js/fullcalendar.min.js'
        , 'public/js/fullcalendar.js')
    .sass('resources/assets/material-dashboard/sass/material-dashboard.scss', 'public/css')
    .sass('resources/assets/paperkit/sass/paper-kit.scss', 'public/css')
    .sass('resources/assets/paperkit/sass/demo.scss', 'public/css');
