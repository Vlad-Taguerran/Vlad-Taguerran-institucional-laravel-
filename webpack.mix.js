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
    .js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/site/bootstrap.js')
    .js('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
    .js('node_modules/popper.js/dist/popper.js', 'public/site/popper.js')

mix.styles(['resources/views/site/mainStyle.css', 'resources/views/site/reboot.css'], 'public/css/style.css')
    .styles(['resources/views/site/artigo/index.css'], 'public/css/artigo.css')
    .styles(['resources/views/site/auth/login/login.scss'], 'public/css/login.css')
    .styles(['resources/views/site/auth/register/styles.scss'], 'public/css/register.css')
    .styles(['resources/views/site/home/users/styles.scss'], 'public/css/home.css')
    .styles(['resources/views/site/auth/reset/styles.scss'], 'public/css/resetPassword.css')
    .styles(['resources/views/site/institucional/index.css'], 'public/css/institucional.css').version();
