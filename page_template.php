<!doctype html>
<html><head><meta charset="utf-8">
<title>Meals on a Mission</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.bpopup.min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
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
      <?php include_once "header.php"; ?>
      <div class="tagline" style="bottom: 0;">Welcome to the Privacy Statement Page</div>
    </div>
    
    <div id="socialbox">
      <ul class="social">
        <li><a href="#"><img src="images/rss_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/twi_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/pink_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="#"><img src="images/fb_icon.png" width="28" height="26" alt=""></a></li>
      </ul>
    </div>
    
    <div id="main_content_box">
    	
                
    </div>
    
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


<script type="text/javascript">
function showpopup(popId){
  jQuery('#'+popId).bPopup({
		position: [650,100]
	});
}

function showpopup2(popId){
  jQuery('#'+popId).bPopup({
		position: [650,30]
	});
}
</script>