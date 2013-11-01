<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<link rel="stylesheet" href="fonts/stylesheet.css">
<script>

$(document).ready(function(){


	/* ---- Countdown timer ---- */
	var endDate = new Date(); 
	endDate = new Date(2013,11,17);
	
	$('#counter').countdown({
		timestamp : endDate,
		digitWidth: 13,
		digitHeight: 18,
		image: "js/counter/jquery.counter-analog.png"
	});


	/* ---- Animations ---- */

	$('#links a').hover(
		function(){ $(this).animate({ left: 3 }, 'fast'); },
		function(){ $(this).animate({ left: 0 }, 'fast'); }
	);

	$('footer a').hover(
		function(){ $(this).animate({ top: 3 }, 'fast'); },
		function(){ $(this).animate({ top: 0 }, 'fast'); }
	);


	// for detecting if the browser is Safari
	var browser = navigator.userAgent.toLowerCase();

	if(!Modernizr.input.required || (browser.indexOf("safari") != -1 && browser.indexOf("chrome") == -1)) {
		$('form').submit(function() {
			$('.popup').remove();
			if(!$('.email').val() || $('.email').val() == 'Input your e-mail address here...') {
				$('form').append('<p class="popup">Please fill out this field.</p>');
				$('.email').focus();
				return false;
			}
		});
		$('.email').keydown(function() {
			$('.popup').remove();
		});
		$('.email').blur(function() {
			$('.popup').remove();
		});
	}


});


</script>
</head>

<body>
<div id="counter"></div>
</body>
</html>