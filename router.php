<?
/* Router with steampixel/simple-php-router */
use Steampixel\Route;

Route::add('/', function() use($blade){
	return $blade -> view()
		-> make('welcome')
		-> render();
}, ['get', 'post']);
Route::add('/compara', function() use($blade){
	return $blade -> view()
		-> make('compara')
		-> render();
});
Route::add('/nosotros', function() use($blade){
	return $blade -> view()
		-> make('nosotros')
		-> render();
});
Route::add('/guias', function() use($blade){
	return $blade -> view()
		-> make('guias')
		-> render();
});
Route::add('/resena', function() use($blade){ // <- Individual provider review
	return $blade -> view()
		-> make('resena')
		-> render();
});
Route::add('/tarifas', function() use($blade){
	return $blade -> view()
		-> make('tarifas')
		-> render();
});
Route::add('/contacto', function() use($blade){
	return $blade -> view()
		-> make('contacto')
		-> render();
});
Route::add('/contacto', function() use($blade){
	require_once('app/mail/contact.php');
	return $blade -> view()
		-> make('contacto')
		-> with('mail_response', $mail_response)
		-> render();
}, ['post']);
Route::add('/aviso-privacidad', function() use($blade){
	return $blade -> view()
		-> make('aviso')
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

// Run the router;
$app_path = $_ENV['MIX_MODE'] == 'development'
	? $_ENV['MIX_ROUTE_DEV']
	: $_ENV['MIX_ROUTE_PROD']
;
Route::run( $app_path );