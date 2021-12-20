const mix = require('laravel-mix');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/backoffice')
    .postCss('resources/css/app.css', 'public/css/backoffice', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

mix.sass('resources/scss/fontawesome.scss', 'public/css/backoffice');

mix.combine('public/css/backoffice/*.css', 'public/css/backoffice/all.css');

if (mix.inProduction()) {
    mix.version();
}