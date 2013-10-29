<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Milk Form</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.bpopup.min.js"></script>

<style>
#survey_form{
display: none;
/*background:#eee;
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;*/
min-width: 640px;
min-height: 510px;
}
</style>
</head>

<body style="background:#fff;">
<div align="center" id="milk_form">
<h2>CALLING ALL WEB BUSINESSES</h2>
<p>We are the PIONEER in Social Networking using a NEW online Gaming Platform in the Fundraising industry.</p>
<p>Our assurance to ALL participating web-businesses:</p>
<p><span style="text-decoration: underline; color:#C00;"><strong>Game Players WILL be navigating a page off of your website!</strong></span></p>
<p><strong>That’s right, you heard us!</strong></p>
<p>Your COMPANY LOGO link is a gatekeeper to an extraordinary, exciting and cutting-edge gaming platform that helps an organization meet its goal!</p>
<p>And the BEST PART is that 60% of the acquired revenue from participants playing, are allocated to participating organizations!</p>
<p style="font-size:14px;"><strong>It’s a win-win situation!</strong></p>
<p>You get all the LIVE advertising you need while you’re helping out the organization!</p>
<p><span style="text-decoration: underline; color:#C00;"><strong>Be a part of this compelling REVOLUTION!</strong></span></p>
<p><strong>Leave Your Contact Information</strong></p>
<table>
<form action="" method="">
<tr><td align="right"><label><strong>Web business name:</strong></label></td><td><input type="text" name="" /></td></tr>
<tr><td align="right"><label><strong>Website address:</strong></label></td><td><input type="text" name="" /></td></tr>
<tr><td align="right"><label><strong>Contact name:</strong></label></td><td><input type="text" name="" /></td></tr>
<tr><td align="right"><label><strong>Title:</strong></label></td><td><input type="text" name="" /></td></tr>
<tr><td align="right"><label><strong>Email:</strong></label></td><td><input type="text" name="" /></td></tr>
<tr><td></td><td><input type="button" name="" value="Submit" onClick="showpopup('survey_form'); return false;"/></td></tr>
</form>
</table>
<p><strong>and we will contact you with all the details!</strong></p>
<p style="font-size:8px;">**(Because of the nature of the company, we will only be accepting web businesses that are of <span style="color:#C00;">G & PG</span> rated. <br />
We are a clean family web company and intend to keep it that way for all to enjoy)</p>
</div>

<div id="survey_form">
<iframe src="survey_form/form.html" style="width:650px;min-height:700px;max-width:100%;overflow:visible;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
</div>

</body>
</html>

<script type="text/javascript">
function showpopup(popId){
  jQuery('#'+popId).bPopup({});
}
</script>