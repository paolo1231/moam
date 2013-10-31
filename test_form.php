<?php include_once "sessions.php";
echo $_SESSION['createkey'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test Form</title>
</head>

<body>
<form name="about_form" action="about_formprocess.php" method="POST">
	<input type="text" class="input_about" name="fname" id="fname" placeholder="First Name"/>
	<input type="text" class="input_about" name="lname" id="lname" placeholder="Last Name"/>
	<input type="text" class="input_about" name="cnum" id="cnum" placeholder="Contact Number"/>
	<input type="text" class="input_about" name="email" id="email" placeholder="Email"/>
	<textarea class="form_about" name="message" id="message" placeholder="Message"></textarea>
	<input type="submit" name="count_me_in" id="count_me_in"/>
</form>
</body>
</html>