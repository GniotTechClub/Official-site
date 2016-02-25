<?php
require 'libs/phpMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info_tc@gniotclubs.com';                 // SMTP username
$mail->Password = 'admintechclub@gnit';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'info_tc@gniotclubs.com';
$mail->FromName = $name;
$mail->addAddress('rajatvaidya14@gmail.com', 'Rajat Saini');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info_tc@gniotclubs.com', 'Information');

$mail->Subject = 'GNIOT-TechClub contact';
$mail->Body    = $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>