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
mix.js(['resources/js/product.js'], 'public/js/app.product.js');

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'node_modules/fontawesome/styles.css',
    'node_modules/bootstrap/dist/css/bootstrap.css'
], 'public/resources/vendor/css/vendor.css').version();

// mix.browserSync("http://localhost:8000");
mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/axios/dist/axios.js',
    'node_modules/vue/dist/vue.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'node_modules/vue-resource/dist/vue-resource.js',
    'node_modules/fontawesome/index.js',
], 'public/resources/vendor/js/vendor.js').version();


