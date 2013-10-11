<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Meals on a Mission</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
 <script type="text/javascript">
    $(window).load(function() {
		$("#previousButton, #nextButton").click(function (e) {

         // Prevent the link from being followed
         e.preventDefault();

         // Initialize variables 
         var buttonId = this.id,
          buttonClass = ("previousButton" == buttonId) ? ".nivo-prevNav" : ".nivo-nextNav";
         // Trigger the slider button
         $(".nivo-directionNav").find(buttonClass).click();
    });
        $('#slider').nivoSlider({effect: 'fade',
		  directionNav: true, // Next & Prev navigation
		  controlNav: false, // 1,2,3... navigation
		  prevText: '',  // Prev directionNav text
		  nextText: ''  
 });
    });
</script>
</head>

<body>
<div id="wrap">
  <div id="page">
    <div id="header" style="height:230px;">
      <div class="floatL"><img src="images/moam_logo_img.png" /></div>
      <div class="floatL" style="width:800px; padding-top:10px;">
        <div class="floatL"><img src="images/moam_logo_text.png" /></div>
        <div class="floatR">
          <span id="search" class="searchbox round"><form method="" action=""><input type="text" name="search-btn" placeholder="Search" /><input type="submit" name="submit-search" class="search-btn" /></form>
          </span>
        </div>
        <div class="clear"></div>
        <ul id="nav">
          <li><a href="" class="round">About Us</a></li>
          <li><a href="" class="round">Mission News</a></li>
          <li><a href="" class="round">Fundraiser</a></li>
          <li><a href="" class="round">Prize Program</a></li>
          <li><a href="" class="round">Food Games</a></li>
          <li><a href="" class="round">Q & A</a></li>
          <li><a href="" class="round">Contact Us</a></li>
        </ul>
      </div>
      <div class="tagline" style="bottom: 0;">Welcome to the Contact Page<br />"Go ahead and have a click around" </div>
    </div>
    
    <div id="socialbox">
      <ul class="social">
        <li><a href="#"><img src="images/rss_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/twi_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/pink_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/fb_icon.png" width="28" height="26" alt=""></a></li>
      </ul>
    </div>
    
    <div id="contactbox">
      <div id="calendar">
        <span class="daytext">Friday</span>
        <span class="datetext">4</span>
        <span class="monthyear">October 2013</span>
      </div>
      
      
      
    </div>
    
  </div>
  <div class="page-bottom"></div>
  <div id="bottom">
    <div class="bottom-cont">
      <div class="floatL">Copyright &copy; 2012. All rights reserved. MEALS ON A MISSION.</div>
      <div class="floatR links">
        <a href="">Contact Us</a>&bull;<a href="">Terms of Service</a>&bull;<a href="" class="last">Privacy Policy</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>