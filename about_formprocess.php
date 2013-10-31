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

//customerservice@meals-ona-mission.com, bevgonzalez@meals-ona-mission.com, 

$recipient = 'akosip31@gmail.com';
$headers = 	'From: '.$senderemail. "\r\n" . 
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$subject = 'MOAM - About Us Form';

$content = "First Name: ".$fname.
"<br />Last Name: ".$lname.
"<br />Contact Number: ".$cnum.
"<br />Email: ".$senderemail.
"<br />Message: ".$message;

$content = wordwrap($content,70);
  
mail($recipient,$subject,$content,$headers);

echo "Email sent!";
?>