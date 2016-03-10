<?php

require 'mail/class.phpmailer.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$locality = $_POST['locality'];
$message = $_POST['message'];

 
$corpoDoEmail = $name . "<br />";
$corpoDoEmail .= $phone . "<br />";
$corpoDoEmail .= $email . "<br />";
$corpoDoEmail .= $locality . "<br /><br />";
$corpoDoEmail .= $message;

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.sciotta.com.br';                  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'thiago@sciotta.com.br';            // SMTP username
$mail->Password = '2704900Tbb';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;
$mail->From = 'thiago@sciotta.com.br';
$mail->FromName = 'Contato do portfólio';
$mail->AddAddress('thiago@sciotta.com.br', 'Thiago Sciotta');  // Add a recipient
$mail->AddCC('thiagog3@gmail.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Novo contato no site';
$mail->Body    = $corpoDoEmail;
$mail->AltBody = $corpoDoEmail;

if(!$mail->Send()) {
   echo 'error';
   //echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'ok';

?>