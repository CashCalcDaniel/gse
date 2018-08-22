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
   .js('resources/assets/js/player-profile.js', 'public/js')

    // Css
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/home.scss', 'public/css')
   .sass('resources/assets/sass/main.scss', 'public/css')
   .sass('resources/assets/sass/tester.scss', 'public/css')
   .sass('resources/assets/sass/player-profile.scss', 'public/css')
   .sass('resources/assets/sass/team-sheet.scss', 'public/css')
   .sass('resources/assets/sass/gameweeks.scss', 'public/css');
