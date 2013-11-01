<?php 

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

echo "How many: ".$how_many_people; echo "<br />";
echo "Industries: ".rtrim($industry); echo "<br />";
echo "Fundraisers: ".$fundraisers; echo "<br />";
echo "Gender: ".$gender; echo "<br />";
echo "Healthy: ".$healthy_fundraising; echo "<br />";
echo "Investment: ".$investment_value; echo "<br />";
echo "Endorsement: ".$endorsement_shoutout; echo "<br />";
echo "Organization: ".$organization; echo "<br />";
echo "Website: ".$website; echo "<br />";
echo "City: ".$city; echo "<br />";
echo "State: ".$state; echo "<br />";
?>