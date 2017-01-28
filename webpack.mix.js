const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js');

// Combine Admin Css Vendor 
mix.combine([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/font-awesome/css/font-awesome.min.css',
    'node_modules/ionicons/dist/css/ionicons.min.css',
    'node_modules/admin-lte/dist/css/AdminLTE.min.css',
    'node_modules/icheck/skins/square/blue.css',
    'node_modules/admin-lte/dist/css/skins/_all-skins.min.css'
    ], 'public/css/admin-vendor.css')

// Combine Admin JS Vendor
mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/icheck/icheck.min.js',
    'node_modules/admin-lte/dist/js/app.min.js'
    ], 'public/js/admin-vendor.js')

// Copy Fonts
/*mix.copy(
   'node_modules/font-awesome/fonts',
   'public/fonts'
);

// Copy images
mix.copy(
   'node_modules/admin-lte/dist/img',
   'public/img'
);
*/