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
		<?php include_once "header.php" ?>
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
            <a href=""><iframe width="420" height="315" src="//www.youtube.com/embed/Zdc9BYYViuA" frameborder="0" allowfullscreen></iframe></a>
            <a href=""><img src="images/slide-1.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-2.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-3.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-4.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-5.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-6.jpg" alt="" title="" /></a>
            <a href=""><img src="images/slide-7.jpg" alt="" title="" /></a>
          </div>
        </div>
    </div>
    
    <div class="descbox">
      <p>"Scroll down to view our campaign interview with CEO and Founder of Meals on a<br />Mission and their mascot Chef Pepe Roni."</p>
    </div>
    
    <div id="main">
      <div class="divider"></div>
      <div class="floatL">
      	<div id="intervid">
        <h2>To View The Entertaining Campaign Interview With The <br />Founder And CEO And Their Mascot... Chef Pepe Roni!</h2>
        <iframe width="615" height="415" src="//www.youtube.com/embed/Ewu40HCUZuY" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="socialbox2">    
            <a href="#"><img src="images/fb_icon2.png" width="30" alt=""></a>
            <a href="#"><img src="images/linkedin_icon.png" width="30" alt=""></a>
            <a href="#"><img src="images/twitter_icon2.png" width="30" alt=""></a>
            <a href="#"><img src="images/googleplus_icon.png" width="30" alt=""></a>
        </div>
      </div>
      <div class="floatR subs-form">
        <a href="" class="play-vid">Press to Play</a>
        <div class="clear" style="height:30px;"></div>
        <p align="justify">We're very excited about our seeding campaign. Our goal is to ensure that we help everybody in need.</p>
        <p align="justify">Be involved and become our partner as we meet that goal by filling out the form below.</p>
        <p align="justify">We will keep you updated regarding the upcoming events, news, and our official launch date!</p>
        <center><img src="images/your_group_text.png" /></center>
        <div class="clear" style="height:10px;"></div>
        <form method="" action="">
          <input type="text" class="subs-text round" name="subsName" placeholder="Name" />
          <input type="text" class="subs-text round" name="subsEmail" placeholder="Email" />
          <input type="submit" class="subs-submit" value="" />
        </form>
      </div>
      <div class="clear"></div>
      <h2><font color="#095807">Meals on a Mission</font> would like to give you the honor and privilege <br />to invest in an initiative that WILL HAVE significant consequences and value.</h2>
      <h2>There are rewards for everyone that participates. Please consider a donation <br />and share this link with others. Help us change the world….one bite at a time! </h2>
      <h2>Thank you again! God bless everyone!</h2>
      <center><img src="images/need-fix.jpg" /></center>
    </div>
    <div class="moam-link"><a href="http://www.gofundme.com/meals-ona-mission">www.GoFundMe.com/Meals-OnA-Mission</a></div>
    <div class="clear"></div>
  </div>
  <div class="page-bottom"></div>
  <div id="bottom">
    <div class="bottom-cont">
		<?php include_once "footer.php" ?>
    </div>
  </div>
</div>
</body>
</html>