// webpack.mix.js
let mix = require('laravel-mix')

mix.setPublicPath('public')
mix
	// JS SCRIPTS
	.js('src/js/main.js', 'js')
	.js('src/js/simulator.js', 'js')
	// SASS STYLES
	.sass('src/sass/style.scss', 'css')