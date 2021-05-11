// webpack.mix.js
let mix = require('laravel-mix');

mix.setPublicPath('public');

mix.js('src/app.js', 'js')
	.sass('src/sass/app.scss', 'css')