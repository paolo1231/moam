<?php session_start();

if(!isset($_SESSION['createkey'])){
	echo "Invalid action please return to previous page.";
	die();
}

$webname = $_POST['webname'];
$webadd = $_POST['webadd'];
$contmilk_name = $_POST['contmilk_name'];
$contmilk_title = $_POST['contmilk_title'];
$contmilk_email = $_POST['contmilk_email'];

$recipient = 'customerservice@meals-ona-mission.com, bevgonzalez@meals-ona-mission.com, akosip31@gmail.com';
$headers = 	'From: '.$contmilk_email. "\r\n" . 
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$subject = 'MOAM - Milk Carton Form';

$content = "<h1>Milk Carton Info</h1><br />Web business name: ".$webname.
"<br />Website Address: ".$webadd.
"<br />Contact name: ".$contmilk_name.
"<br />Title: ".$contmilk_title.
"<br />Email: ".$contmilk_email;

$content = wordwrap($content,70);
  
mail($recipient,$subject,$content,$headers);

echo "Email sent!";
?>