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
	.sass('resources/sass/home.scss', 'public/css')
	.sass('resources/sass/product-details.scss', 'public/css')
	.sass('resources/sass/app.scss', 'public/css')
	.sass('resources/sass/admin/login.scss', 'public/css/admin')
	.sass('resources/sass/admin/dashboard.scss', 'public/css/admin')
	.sass('resources/sass/admin/product.scss', 'public/css/admin')
	.sass('resources/sass/admin/app.scss', 'public/css/admin');

mix.browserSync('localhost:8000');
