<?php session_start();

if(!isset($_SESSION['createkey'])){
	echo "Invalid action please return to previous page.";
	die();
}

$name = $_POST['name'];
$senderemail = $_POST['email'];

$recipient = 'customerservice@meals-ona-mission.com, bevgonzalez@meals-ona-mission.com, akosip31@gmail.com';
$headers = 	'From: '.$senderemail. "\r\n" . 
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$subject = 'MOAM - Homepage Form';

$content = "<h1>Homepage Form Info</h1><br />Name: ".$name.
"<br />Email: ".$senderemail;

$content = wordwrap($content,70);
  
mail($recipient,$subject,$content,$headers);

echo "Email sent!";
?>