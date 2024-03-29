<?
/* Router with steampixel/simple-php-router */
use Steampixel\Route;
use Illuminate\Support\Facades\DB;

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
Route::add('/registro', function() use($blade){
	return $blade -> view()
		-> make('registro')
		-> render();
});
Route::add('/registro', function() use($blade){
	require("Models/User.php");
	$request = json_decode(json_encode( $_POST ));

	$sign_errors = '';
	if( empty($request -> name) )
	{
		$sign_errors .= ' El campo Nombre es requerido.';
	}
	if( empty($request -> email) )
	{
		$sign_errors .= ' El campo Email es requerido.';
	}
	if( empty($request -> phone) || strlen($request -> phone) != 10 || !is_numeric($request -> phone) ) 
	{
		$sign_errors .= ' El número telefónico es obligatorio y debe tener 10 dígitos numéricos.'; 
	}
	if( empty($request -> password) ) 
	{
		$sign_errors .= ' La contraseña es obligatoria.'; 
	}

	if( !empty($sign_errors) )
	{
		$mail_response = [
				'success' => FALSE
			,	'message' => 'Debes completar todos los campos: ' . $sign_errors
		];
	}
	else
	{
		if( User::create([
				'name' => $request -> name
			,	'email' => $request -> email
			,	'phone' => $request -> phone
			,	'password' => password_hash($request -> password, PASSWORD_BCRYPT, ['salt' => 'secret_secret_secret_secret'])
		]) ){
			$mail_response = [
					'success' => TRUE
				,	'message' => 'Registro completado con éxito'
			];
			$_SESSION['logged_in'] = $request -> email;
			$exp = explode(' ', $request -> name);
			$_SESSION['user_name'] = $exp[0];
		}
		else {
			$mail_response = [
				'success' => FALSE
			,	'message' => 'No se pudo completar el registro del usuario.'
		];
		}
	}

	return $blade -> view()
			-> make('registro')
			-> with('mail_response', $mail_response)
			-> render();
}, ['post']);
Route::add('/login', function() use($blade){
	require("Models/User.php");
	$request = json_decode(json_encode( $_POST ));

	$sign_errors = '';
	if( empty($request -> email) )
	{
		$sign_errors .= ' El campo Email es requerido.';
	}
	if( empty($request -> password) ) 
	{
		$sign_errors .= ' La contraseña es obligatoria.'; 
	}

	if( !empty($sign_errors) )
	{
		$mail_response = [
				'success' => FALSE
			,	'message' => 'Debes completar todos los campos: ' . $sign_errors
		];
	}
	else
	{
		if( $user = User::where([
				'email' => $request -> email
			,	'password' => password_hash($request -> password, PASSWORD_BCRYPT, ['salt' => 'secret_secret_secret_secret'])
		]) -> first() )
		{
			$mail_response = [
					'success' => TRUE
				,	'message' => 'Sesión iniciada'
			];
			$_SESSION['logged_in'] = $user -> email;
			$exp = explode(' ', $user -> name);
			$_SESSION['user_name'] = $exp[0];
		}
		else
		{
			$mail_response = [
				'success' => FALSE
			,	'message' => 'Credenciales del usuario incorrectas'
		];
		}
	}

	return $blade -> view()
			-> make('registro')
			-> with('mail_response', $mail_response)
			-> render();

}, ['post']);
Route::add('/logged-in', function() use($blade){
	return $blade -> view()
		-> make('is_logged')
		-> render();
});
Route::add('/logout', function() use($blade){
	unset( $_SESSION['logged_in'] );

	return $blade -> view()
			-> make('registro')
			-> render();
});
Route::add('/signin-test', function() use($blade){
	return $blade -> view()
		-> make('is_logged')
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