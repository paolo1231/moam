<?php session_start();

if(!isset($_SESSION['createkey'])){
	echo "Invalid action please return to previous page.";
	die();
}

$how_many_people = $_POST['how_many_people'];
$fundraisers = $_POST['fundraisers'];
$gender = $_POST['gender'];
$healthy_fundraising = $_POST['healthy_fundraising'];
$investment_value = $_POST['investment_value'];
$endorsement_shoutout = $_POST['endorsement_shoutout'];
$organization = $_POST['organization'];
$website = $_POST['website'];
$city = $_POST['city'];
$state = $_POST['state'];

implode(',',$_POST['industry']);
 //or something like
$industry="";
foreach($_POST['industry'] as $checkboxes) {
  $industry.= $checkboxes .",";
}

$recipient = 'customerservice@meals-ona-mission.com, bevgonzalez@meals-ona-mission.com, akosip31@gmail.com';
$headers = 	'From: '.$senderemail. "\r\n" . 
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type:text/html;charset=iso-8859-1' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
$subject = 'MOAM - Survey Form';

$content = "<h1>Survey Form Info</h1><br /><strong>How many people are in your organization?</strong> <br />".$how_many_people.
"<br /><br /><strong>Which best describes your industry:</strong> <br />".rtrim($industry).
"<br /><br /><strong>How many fundraisers do you have a year?</strong> <br />".$fundraisers.
"<br /><br /><strong>Gender:</strong> <br />".$gender.
"<br /><br /><strong>How would you rate a healthy product for fundraising?</strong> <br />".$healthy_fundraising.
"<br /><br /><strong>Regarding Web Business: If there was way to GUARANTEE traffic to interact with a page from your website (lasting anywhere from 5 - 15 seconds), how much of an investment value would you spend per visitor?</strong> <br />".$investment_value.
"<br /><br /><strong>Think this is an awesome idea? Got a shout out or endorsement you would like to share? Send us one…and you may be chosen to be featured on the homepage of the website:</strong> <br />".$endorsement_shoutout.
"<br /><br /><strong>Name of Organization:</strong> <br />".$organization.
"<br /><br /><strong>Website:</strong> <br />".$website.
"<br /><br /><strong>City:</strong> <br />".$city.
"<br /><br /><strong>State:</strong> <br />".$state;

$content = wordwrap($content,70);
  
mail($recipient,$subject,$content,$headers);

$status = "Survey information successfully sent!";
?>