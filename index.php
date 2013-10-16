<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Meals on a Mission</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js">\x3C/script>')</script>
</head>

<body>
<div id="wrap">
  <div id="page">
    <div id="header">
		<?php include_once "header.php" ?>
        <div class="tagline">The fundraiser changing the world, one bite at a time!</div>
    </div>
    
    <div id="sliderbox">
      <ul class="social">
        <li><a href="#"><img src="images/rss_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/twi_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/pink_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/fb_icon.png" width="28" height="26" alt=""></a></li>
      </ul>
      <div id="prevBtn" class="floatL"></div><div id="nextBtn" class="floatR"></div>
      <div class="slider-wrapper">
      	<div class="flexslider">
          <ul class="slides">
          	<li><iframe id="player_1" src="http://player.vimeo.com/video/76841055?api=1&amp;player_id=player_1" width="679" height="329" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
           	<li><img src="images/slide-1.jpg" /></li>
  	    	<li><img src="images/slide-2.jpg" /></li>
  	    	<li><img src="images/slide-3.jpg" /></li>
            <li><img src="images/slide-4.jpg" /></li>
            <li><img src="images/slide-5.jpg" /></li>
            <li><img src="images/slide-6.jpg" /></li>
            <li><img src="images/slide-7.jpg" /></li>
          </ul>
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
        <img src="images/intervid-header.png"/>
        <iframe width="615" height="415" src="//www.youtube.com/embed/Ewu40HCUZuY" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="socialbox2" align="right">    
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
      <center><img src="images/featured-on.jpg" /></center>
      <div id="testimonials-wrapper">
      	<?php include_once "testimonial-slider.php" ?>
      </div>
      <div id="fundraising-wrapper">
      	<div class="floatL" id="fund-thermo">
        	<div style="text-align:center;"><a href="http://www.fund-raising-ideas-center.com/" alt="Fundraising Thermometer"><img border="0" src="http://thermometer.fund-raising-ideas-center.com/thermometer.php?currency=dollar&goal=45000&current=25&color=red&size=large"></a><p style="font-size:.8em; color:#999">Provided by<a href="http://www.fund-raising-ideas-center.com/" style="display:block; text-decoration:none; font-size:.8em; color:#999">Fund-Raising-Ideas-Center.com</a></p></div>
        </div>
        <div class="floatR" id="fund-countdown">
        	<h2 align="center">COUNTDOWN TO THE END OF OUR CROWDFUNDING CAMPAIGN</h2>
            <?php include_once "countdown.php" ?>
            
            <div class="clear"></div>
            <a href="#"><div class="floatL fundraising-button"><h3 align="center">Interested Investors</h3></div></a>
            <a href="#"><div class="floatL fundraising-button2"><h3 align="center">Indiegogo Crowdfunding Campaign</h3></div></a>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="page-bottom"></div>
  <div id="bottom">
    <div class="bottom-cont">
		<?php include_once "footer.php" ?>
    </div>
  </div>
</div>

<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>

<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){

      // Vimeo API nonsense
      var player = document.getElementById('player_1');
      $f(player).addEvent('ready', ready);

      function addEvent(element, eventName, callback) {
        (element.addEventListener) ? element.addEventListener(eventName, callback, false) : element.attachEvent(eventName, callback, false);
      }

      function ready(player_id) {
        var froogaloop = $f(player_id);

        froogaloop.addEvent('play', function(data) {
          $('.flexslider').flexslider("pause");
        });

        froogaloop.addEvent('pause', function(data) {
          $('.flexslider').flexslider("play");
        });
      }


      // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
      $(".flexslider")
        //.fitVids()
        .flexslider({
          animation: "slide",
		  controlNav: "",
          useCSS: false,
          animationLoop: false,
          smoothHeight: true,
          start: function(slider){
            $('body').removeClass('loading');
          },
          before: function(slider){
            $f(player).api('pause');
          }
      });
    });
</script>
<script src="js/froogaloop.js"></script>
<script src="js/jquery.fitvid.js"></script>
</body>
</html>