<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/phpmailer/src/Exception.php';
require 'assets/phpmailer/src/PHPMailer.php';
require 'assets/phpmailer/src/SMTP.php';

$userName	 = $_POST["name"];
$userEmail 	 = $_POST["email"];
$userMessage = $_POST["message"];

$mail = new PHPMailer();

try {
    //Server settings
	$mail->setFrom("info@posadaneblinasmucujun.com.ve", 'De quien');
	$mail->addAddress('info@posadaneblinasmucujun.com.ve', 'Posada Neblimas del Mucujún');
	$mail->Subject = 'Posada Neblimas del Mucujún | Solicitud';
	$mail->isHTML(true);
	$mail->Body = $userMessage;
    $mail->send();

    echo 'El mensaje ha sido enviado con éxito.';
} catch (Exception $e) {
    echo 'No se pudo enviar la solicutud. Por favor, inténtelo más tarde. ', $mail->ErrorInfo;
}