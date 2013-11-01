<?php session_start();

if(!isset($_SESSION['createkey'])){
	echo "Invalid action please return to previous page.";
	die();
}

$bread_name = $_POST['bread_name'];
$bread_comment = $_POST['bread_comment'];
$bread_email = $_POST['bread_email'];
$bread_phone = $_POST['bread_phone'];
$bread_org = $_POST['bread_org'];

$recipient = 'customerservice@meals-ona-mission.com, bevgonzalez@meals-ona-mission.com, akosip31@gmail.com';
$headers = 	'From: '.$bread_email. "\r\n" . 
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$subject = 'MOAM - Contact Page 3 Bread Form';

$content = "<h1>Contact Page 3 Bread Form Info</h1><br />Name: ".$bread_name.
"<br />Comment: ".$bread_comment.
"<br />Email: ".$bread_email.
"<br />Contact Number: ".$bread_phone.
"<br />Organization: ".$bread_org;

$content = wordwrap($content,70);
  
mail($recipient,$subject,$content,$headers);

echo "Email sent!";
?>