<?php

$name= $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP (); 
$mail->SMTPAuth = true;

$mail->Host = "email.active24.com";
$mail->SMTPSecure = PHPMailer:: ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "info@drobnostav.online";
$mail->Password = "Pomeranc165";

$mail->setFrom($email, $name);
$mail->addAddress("info@drobnostav.online");


$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";
      
