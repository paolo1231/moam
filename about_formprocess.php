<?php session_start();

if(!isset($_SESSION['createkey'])){
	die();
}

require 'scripts/PHPMailerAutoload.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cnum = $_POST['cnum'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jswan';                            // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = $email;
$mail->FromName = $fname.' '.$lname;
$mail->addAddress('customerservice@meals-ona-mission.com', 'MoaM - Customer Service');  // Add a recipient
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('akosip31@gmail.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'About Form';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';

?>