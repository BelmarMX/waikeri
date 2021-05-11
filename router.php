<?
/* Router with steampixel/simple-php-router */
use Steampixel\Route;

Route::add('/', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
}, ['get', 'post']);

Route::add('/nosotros', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
});

Route::add('/guias', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
});

Route::add('/paginas/proveedor', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
});
Route::add('/paginas/rate', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
});

Route::add('/preguntas-frecuentes', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
});

Route::add('/contacto', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
});

Route::add('/ejemplo/([0-9]*)/editar', function($id) use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
});

// Error codes
Route::pathNotFound(function($path) use($blade){
	// Do not forget to send a status header back to the client
	// The router will not send any headers by default
	// So you will have the full flexibility to handle this case
	header('HTTP/1.0 404 Not Found');
	echo $blade -> view()
		-> make('errors.404')
		-> with([
			'path' => $path
		])
		-> render();
});

Route::methodNotAllowed(function($path, $method) use($blade){
	// Do not forget to send a status header back to the client
	// The router will not send any headers by default
	// So you will have the full flexibility to handle this case
	header('HTTP/1.0 405 Method Not Allowed');
	echo $blade -> view()
		-> make('errors.405')
		-> with([
				'path' => $path
			,	'method' => $method
		])
		-> render();
});

Route::add('/hidden/known-routes', function() {
	$routes = Route::getAll();
	echo '<ul>';
	foreach($routes as $route)
	{
		if( is_array($route['method']) )
		{
			echo '<li>'.$route['expression'].' ('.implode(', ', $route['method']).')</li>';
		}
		else
		{
			echo '<li>'.$route['expression'].' ('.$route['method'].')</li>';
		}
	}
	echo '</ul>';
});

// Run the router;
$app_path = $_ENV['MIX_MODE'] == 'development'
	? $_ENV['MIX_ROUTE_DEV']
	: $_ENV['MIX_ROUTE_PROD']
;
Route::run( $app_path );