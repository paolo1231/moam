<?php session_start();

if(!isset($_SESSION['createkey'])){
	echo "Invalid action please return to previous page.";
	die();
}

$cont_name = $_POST['cont_name'];
$cont_senderemail = $_POST['cont_email'];

$recipient = 'customerservice@meals-ona-mission.com, bevgonzalez@meals-ona-mission.com, akosip31@gmail.com';
$headers = 	'From: '.$cont_senderemail. "\r\n" . 
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$subject = 'MOAM - Contact Page 1 Form';

$content = "<h1>Contact Form 1 Info</h1><br />Name: ".$cont_name.
"<br />Email: ".$cont_senderemail;

$content = wordwrap($content,70);
  
mail($recipient,$subject,$content,$headers);

echo "Email sent!";
?>