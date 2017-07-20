<?php
	// if(isset($_POST['email'])) {

	// // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
	// $email_to = "sicautnwebmaster@gmail.com";
	// $email_subject = "Contacto desde el sitio web";

	// // Aquí se deberían validar los datos ingresados por el usuario
	// if(!isset($_POST['first_name']) ||
	// !isset($_POST['last_name']) ||
	// !isset($_POST['email']) ||
	// !isset($_POST['telephone']) ||
	// !isset($_POST['comments'])) {

	// echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
	// echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
	// die();
	// }

	// $email_message = "Detalles del formulario de contacto:\n\n";
	// $email_message .= "Nombre: " . $_POST['first_name'] . "\n";
	// $email_message .= "Apellido: " . $_POST['last_name'] . "\n";
	// $email_message .= "E-mail: " . $_POST['email'] . "\n";
	// $email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
	// $email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


	// // Ahora se envía el e-mail usando la función mail() de PHP
	// $headers = 'From: '.$email_from."\r\n".
	// 'Reply-To: '.$email_from."\r\n" .
	// 'X-Mailer: PHP/' . phpversion();
	// mail($email_to, $email_subject, $email_message, $headers);

	// echo "¡El formulario se ha enviado con éxito!";
	// redirect(base_url()."cIndex_exproy");
	// }
?>
<?php
	// $email_to = "sicautnwebmaster@gmail.com";

	// $mail = "Prueba de mensaje";
	// //Titulo
	// $titulo = "PRUEBA DE TITULO";
	// //cabecera
	// $headers = "MIME-Version: 1.0\r\n"; 
	// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	// //dirección del remitente 
	// $headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
	// //Enviamos el mensaje a tu_dirección_email 
	// $bool = mail($email_to,$titulo,$mail,$headers);
	// if($bool){
	//     echo "Mensaje enviado";
	// }else{
	//     echo "Mensaje no enviado";
	// }
?>
<?php 
	// $destinatario = "sicautnwebmaster@gmail.com"; 
	// $asunto = "Este mensaje es de prueba"; 
	// $cuerpo = ' 
	// <html> 
	// <head> 
	//    <title>Prueba de correo</title> 
	// </head> 
	// <body> 
	// <h1>Hola amigos!</h1> 
	// <p> 
	// <b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP. Habría que cambiarlo para poner tu propio cuerpo. Por cierto, cambia también las cabeceras del mensaje. 
	// </p> 
	// </body> 
	// </html> 
	// '; 

	// //para el envío en formato HTML 
	// $headers = "MIME-Version: 1.0\r\n"; 
	// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	// //dirección del remitente 
	// $headers .= "From: Miguel Angel Alvarez <pepito@desarrolloweb.com>\r\n"; 

	// //dirección de respuesta, si queremos que sea distinta que la del remitente 
	// $headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

	// //ruta del mensaje desde origen a destino 
	// $headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

	// //direcciones que recibián copia 
	// $headers .= "Cc: maria@desarrolloweb.com\r\n"; 

	// //direcciones que recibirán copia oculta 
	// $headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

	// mail($destinatario,$asunto,$cuerpo,$headers);
?>
<?php 
require('class.phpmailer.php');
$mail = new PHPMailer();
$mail->Host = 'sql308.eshost.com.ar';
$mail->From = 'sicautnwebmaster@gmail.com';
$mail->FromName = 'Nombre del Remitente';
$mail->Subject = 'Subject del correo';
$mail->AddAddress('sicautnwebmaster@gmail.com','Nombre 01');
$body = 'Hola amigo';
$body .= 'probando PHPMailer.';
$body .= 'Saludos';
$mail->Body = $body;
$mail->AltBody = 'Hola amigo\nprobando PHPMailer\n\nSaludos';
$mail->Send();

 ?>