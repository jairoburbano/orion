<?php
require 'vendor/PHPMailerAutoload.php';
$mail	= new PHPMailer();
$name		= $_REQUEST['name'];
$lastname	= $_REQUEST['lastname'];
$email		= $_REQUEST['email'];
$subject		= $_REQUEST['subject'];
$message	= $_REQUEST['message'];
$dest		= 'Caceres@schneider-electric.com';
$cc			= 'Ferrada@schneider-electric.com';
$cc2			= 'jairo@reactor.cl';
//$mail->SMTPDebug = 3;
$mail->IsSMTP();
$mail->Host = 'smtp.mandrillapp.com';		// SMTP de Mandrill
$mail->Port = 587;							// Puerto
$mail->SMTPAuth = true;						// Autenticación
$mail->Username = 'saul@reactor.cl';		// Usuario SMTP
$mail->Password = '9Z1G7iofJEZa3liw-qtDlg';	// Clave SMTP
$mail->SMTPSecure = 'tls';					// Encriptación
$mail->CharSet = 'UTF-8';
$mail->From = $email;
$mail->FromName = $name;
$mail->addAddress($dest);
//$mail->addCC($cc);
//$mail->addCC($cc2);
$mail->isHTML(true);
$mail->Subject = 'Contact Form';
$body = file_get_contents( 'http://orion.reactorlabs.net/vendor/contact.html' );
$placeholders	= array( '[name]', '[lastname]', '[email]', '[subject]', '[message]' );
$values			= array( $name, $lastname, $email, $subject, $message );
// $mail->MsgHTML( str_replace( $placeholders, $values, $body ) );
$mail->Body = str_replace( $placeholders, $values, $body );
$mail->AltBody = 'Para ver este mensaje, por favor use su correo electrónico en modo HTML';
if(!$mail->Send()) {
	echo 0;
	exit();
}
echo json_encode( array('exito' => "exito") );
?>