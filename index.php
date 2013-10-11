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
    <div id="header">
      <div class="floatL"><img src="images/moam_logo_img.png" /></div>
      <div class="floatL" style="width:800px; padding-top:10px;">
        <div class="floatL"><img src="images/moam_logo_text.png" /></div>
        <div class="floatR">
          <span id="search" class="searchbox round"><form method="" action=""><input type="text" name="search-btn" placeholder="Search" /><input type="submit" name="submit-search" class="search-btn" /></form>
          </span>
        </div>
        <div class="clear"></div>
        <ul id="nav">
          <li><a href="index_about_us.php" class="round">About Us</a></li>
          <li><a href="" class="round">Mission News</a></li>
          <li><a href="" class="round">Fundraiser</a></li>
          <li><a href="" class="round">Prize Program</a></li>
          <li><a href="" class="round">Food Games</a></li>
          <li><a href="" class="round">Q & A</a></li>
          <li><a href="contact_us_1.php" class="round">Contact Us</a></li>
        </ul>
      </div>
      <div class="tagline">The fundraiser changing the world, one bite at a time!</div>
    </div>
    
    <div id="sliderbox">
      <ul class="social">
        <li><a href="#"><img src="images/rss_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/twi_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/pink_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/fb_icon.png" width="28" height="26" alt=""></a></li>
      </ul>
      <div class="slider-wrapper theme-default">
        <div class="navBtns"><a href="#" id="previousButton" class="floatL"><img src="images/slide-arrow-left.png" /></a><a href="#" id="nextButton" class="floatR"><img src="images/slide-arrow-right.png" /></a></div>
          <div id="slider" class="nivoSlider">
            <a href=""><img src="images/slide-1.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-2.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-3.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-4.jpg" alt="" title="" /></a>
          </div>
        </div>
    </div>
    
    <div class="descbox">
      <p>"Scroll down to view our campaign interview with CEO and Founder of Meals on a<br />Mission and their mascot Chef Pepe Roni."</p>
    </div>
    
    <div id="main">
      <div class="divider"></div>
      <div class="floatL">
        <img src="images/fundraising_circuit_movie_bg.png" />
      </div>
      <div class="floatR subs-form">
        <a href="" class="play-vid">Press to Play</a>
        <div class="clear" style="height:30px;"></div>
        <p>We're very excited about our seeding campaign. Our goal is to ensure that we help everybody in need. Be involved and become our partner as we meet that goal by filling out the form below.</p>
        <p>We will keep you updated regarding the upcoming events, news, and our official launch date!</p>
        <center><img src="images/your_group_text.png" /></center>
        <div class="clear" style="height:10px;"></div>
        <form method="" action="">
          <input type="text" class="subs-text round" name="subsName" placeholder="Name" />
          <input type="text" class="subs-text round" name="subsEmail" placeholder="Email" />
          <input type="submit" class="subs-submit" value="" />
        </form>
      </div>
      <div class="clear"></div>
      <h2><font color="#095807">Help support our cause</font> and <font color="#095807">spread the word</font> by clicking on the link to learn more<br />about helping us on this meaningful endeavour.</h2>
      <h2>You can participate by <font color="#095807">DONATING</font> in which you are given <font color="#095807">REWARDS</font> for helping us reach<br />our pre-launch seeding campaign goals or by SHARING this opportunity with others who<br />are also interested in helping others.</h2>
      <center><img src="images/need-fix.jpg" /></center>
    </div>
    <div class="moam-link"><a href="http://www.gofundme.com/meals-ona-mission">www.GoFundMe.com/Meals-OnA-Mission</a></div>
    <div class="clear"></div>
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