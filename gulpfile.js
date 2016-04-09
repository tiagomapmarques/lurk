
var elixir = require('laravel-elixir');

/* --------------------------------------------------------------------------
 *  Elixir Asset Management
 * --------------------------------------------------------------------------
 *
 * Elixir provides a clean, fluent API for defining some basic Gulp tasks
 * for your Laravel application. By default, we are compiling the Sass
 * file for our application, as well as publishing vendor resources.
 *
 */
elixir(function(mix) {
	mix.sass('app.scss');
	mix.scripts([ 'jquery.addons.js', 'nav.js', 'app.js' ],
		'public/js/app.js'
	);
	mix.version([
		'public/css/app.css',
		'public/js/app.js'
	]);
});
