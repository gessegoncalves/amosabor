let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |'node_modules/bootstrap/dist/css/bootstrap.css',
 */

 

//mix.js('resources/assets/js/app.js', 'public/js')
  // .sass('resources/assets/sass/app.scss', 'public/css');


  mix.styles(['resources/assets/css/cerulean/bootstrap.css',
  	          'resources/assets/css/menu/menu.css',
  	          'resources/assets/css/css/css.css'],'public/css/painel.css')
 
  mix.js(['resources/assets/js/painel/main.js'], 'public/js/painel.js')






   
 		     
         

mix.js([ 'resources/assets/js/app.js'],'public/js/site.js')

