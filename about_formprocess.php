<?php session_start();

if(!isset($_SESSION['createkey'])){
	echo "Invalid action please return to previous page.";
	die();
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cnum = $_POST['cnum'];
$senderemail = $_POST['email'];
$message = $_POST['message'];

$recipient = 'customerservice@meals-ona-mission.com, bevgonzalez@meals-ona-mission.com, akosip31@gmail.com';
$headers = 	'From: '.$senderemail. "\r\n" . 
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$subject = 'MOAM - About Us Form';

$content = "<h1>Homepage Form Info</h1><br /><strong>First Name:</strong> ".$fname.
"<br /><strong>Last Name:</strong> ".$lname.
"<br /><strong>Contact Number:</strong> ".$cnum.
"<br /><strong>Email:</strong> ".$senderemail.
"<br /><strong>Message:</strong> ".$message;

$content = wordwrap($content,70);
  
mail($recipient,$subject,$content,$headers);

echo "Email sent!";
?>