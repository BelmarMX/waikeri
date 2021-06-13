<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

//Return Message
$mail_response = array();

try {
	$request = json_decode(json_encode( $_POST ));

	//Server settings
	if( $_ENV['MIX_MODE'] == 'development' )
	{
		//Enable verbose debug output
		//$debugOptions = SMTP::DEBUG_SERVER;
		$debugOptions = SMTP::DEBUG_CLIENT;
	}
	else
	{
		$debugOptions = SMTP::DEBUG_OFF;
	}
	$mail->SMTPDebug	= $debugOptions;
	$mail->isSMTP();
	$mail->Host			= $_ENV['EMAIL_HOST'];
	$mail->SMTPAuth		= $_ENV['EMAIL_SMTP_AUTH'];
	$mail->Username		= $_ENV['EMAIL_USERNAME'];
	$mail->Password		= $_ENV['EMAIL_PASSWORD'];
	//PHPMailer::ENCRYPTION_STARTTLS
	$mail->SMTPSecure	= 'ssl';
	$mail->Port			= $_ENV['EMAIL_PORT'];
	
	//Recipients
	$mail->setFrom($request -> email, $request -> name);
	$mail->addAddress($_ENV['EMAIL_REPLY_TO'], $_ENV['EMAIL_REPLY_NAME']);
	$mail->addAddress($request -> email, $request -> name);
	$mail->addReplyTo($_ENV['EMAIL_REPLY_TO'], $_ENV['EMAIL_REPLY_NAME']);
	if( !empty($_ENV['EMAIL_CC']) )
	{
		$mail->addCC($_ENV['EMAIL_CC']);
	}
	if( !empty($_ENV['EMAIL_BCC']) )
	{
		$mail->addBCC($_ENV['EMAIL_BCC']);
	}
	
	//Content
	$mail->isHTML(true);
	$mail->Subject = 'Formulario de contacto Waikeri';
	$mail->Body    = '
		<img src="'.assets('img/logo.png').'" alt="Waikeri Transmoney" width="195" height="42">
		<h1>Formulario de Contacto Waikery</h1>
		Gracias por ponerte en contacto con nosotros, estos son los datos que nos has enviado:
		<br><br>
		<p>
			<strong>Nombre</strong>: '.$request -> name.'
		</p>
		<p>
			<strong>Correo electrónico</strong>: '.$request -> email.'
		</p>
		<p>
			<strong>Teléfono</strong>: '.$request -> phone.'
		</p>
		<p>
			<strong>Comentarios</strong>: '.$request -> comments.'
		</p>
		<br></br>

		Nuestro equipo revisará tus comentarios y pronto nos pondremos en contacto contigo.<br>
		Waikeri Tansmoney
	';
	$mail->AltBody = '[EMAIL EN TEXTO PLANO] Nombre: '.$request -> name.' Email: '.$request -> email.' Teléfono: '.$request -> phone.' Mensaje: '.$request -> comments;
	
	if( PHPMailer::validateAddress($request -> email) )
	{
		$mail->send();
		$mail_response = [
			'success' => TRUE
		,	'message' => 'Mensaje envíado con éxito'
	];
	}
	else
	{
		$mail_response = [
			'success' => FALSE
		,	'message' => 'Dirección de email inválida.'
	];
	}
} catch (Exception $e) {
	$mail_response = [
			'success' => FALSE
		,	'message' => 'No se pudo completar el envío del formulario.'
		,	'error'	=> $mail -> ErrorInfo
	];
}
