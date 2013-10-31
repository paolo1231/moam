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
<style>
#milk{
border-radius: 10px 10px 10px 10px;
color: #111;
display: none;
min-width: 377px;
min-height: 650px;
padding: 25px;
}
#milk2{
border-radius: 10px 10px 10px 10px;
color: #111;
display: none;
min-width: 569px;
min-height: 600px;
padding: 25px;
}
#fruit_bskt{
background: url(images/furit_basket_big.png) no-repeat center center transparent !important;
border-radius: 10px 10px 10px 10px;
color: #111;
display: none;
min-width: 343px;
min-height: 299px;
padding: 25px;
}
#egg_bskt{
background: url(images/egg_bg.png) no-repeat center center transparent !important;;
border-radius: 10px 10px 10px 10px;
color: #111;
display: none;
min-width: 379px;
min-height: 364px;
padding: 25px;
position: relative;
}
#butter_basket{
background: url(images/butter_pop.png) no-repeat center center transparent !important;
border-radius: 10px 10px 10px 10px;
color: #111;
display: none;
min-width: 384px;
min-height: 170px;
padding: 25px;
}
#carrot{
background-color: #fff;
border-radius: 10px 10px 10px 10px;
color: #111;
display: none;
min-width: 450px;
min-height: 250px;
padding: 25px;
}
a.egg{
width: 76px; height: 110px; display: inline-block; position: absolute;
}
.egg_tray1{
position: relative; top: 145px; display: block; margin: 0 45px;
}
.egg_tray2{
position: relative; top: 180px; display: block; margin: 0 45px;
}
.fb_egg{
background: url(images/fb_btn.png) no-repeat center center; top: 0; bottom: 0; left: 16px;
}
.fb_egg:hover{
background: url(images/fb_btn_hover.png) no-repeat center center; top: -7px;
}
.twit_egg{
background: url(images/tw_btn.png) no-repeat center center; top: 0; bottom: 0; left: 110px;
}
.twit_egg:hover{
background: url(images/tw_btn_hover.png) no-repeat center center; top: -7px;
}
.yt_egg{
background: url(images/you_btn.png) no-repeat center center; top: 0; bottom: 0; left: 204px;
}
.yt_egg:hover{
background: url(images/you_btn_hover.png) no-repeat center center; top: -7px;
}
.li_egg{
background: url(images/in_btn.png) no-repeat top center; top: 18px; bottom: 0; left: 16px; height: 73px !important;
}
.li_egg:hover{
height: 80px !important; top: 11px;
}
.goog_egg{
background: url(images/g_btn_hover.png) no-repeat top center; top: 18px; bottom: 0; left: 110px; height: 73px !important;
}
.goog_egg:hover{
height: 80px !important; top: 11px;
}
.inst_egg{
background: url(images/inst_btn.png) no-repeat top center; top: 18px; bottom: 0; left: 204px; height: 73px !important;
}
.inst_egg:hover{
height: 80px !important; top: 11px;
}
#milkform{
display: none;
/*background:#eee;
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;*/
min-width: 640px;
min-height: 510px;
}




</style>
</head>

<body>
<div id="wrap">
  <div id="page">
    <div id="header" style="height:230px;">
      <?php include_once "header.php"; ?>
      <div class="tagline" style="bottom: 0;">Welcome to the Contact Page<br />"Go ahead and have a click around" </div>
    </div>
    
    <div id="socialbox">
      <ul class="social">
        <li><a href="#"><img src="images/rss_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="https://twitter.com/MOAMfundraiser" target="_blank"><img src="images/twi_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="http://www.linkedin.com/pub/beverly-gonzalez/79/683/820" target="_blank"><img src="images/pink_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="https://www.facebook.com/MOAMfundraiser" target="_blank"><img src="images/fb_icon.png" width="28" height="26" alt=""></a></li>
      </ul>
    </div>
    
    <div id="contactbox">
      <div id="calendar">
        <span class="daytext">
			<script language="javascript">document.write ( day_names[current_date.getDay()] );</script>
        </span>
        
        <span class="datetext">
			<script language="javascript">document.write ( current_date.getDate() );</script>
        </span>
        
        <span class="monthyear">
			<script language="javascript">document.write ( month_names[current_date.getMonth()] ); document.write(" ");
            document.write ( current_date.getFullYear() );</script>
        </span>
      </div>
      
      <div id="ref-open">
        <div class="tray1">
          <a href="" class="milk" onClick="showpopup2('milk'); return false;"></a>
          <a href="" class="fruit_bskt" onClick="showpopup('fruit_bskt'); return false;"></a>
          <a href="" class="egg_bskt" onClick="showpopup('egg_bskt'); return false;"></a>
        </div>
        <div class="tray2">
          <div class="carrot"></div>
          <a href="" class="butter_basket" onClick="showpopup('butter_basket'); return false;"></a>
        </div>
        <div class="tray3">
          <a href="contact_us_3.php" class="bread"></a>
        </div>
        <div class="tray4">
          <div class="bread_butter"></div>
          <div class="vegi"></div>
        </div>
      </div>
      
    </div>
    
  </div>
  <div class="page-bottom"></div>
  <div id="bottom">
    <div class="bottom-cont">
      <?php include_once "footer.php" ?>
    </div>
  </div>
</div>

<!--
Popups
-->
</body>

<div id="milk">
	<a href="" onClick="showpopup3('milk2'); return false;"><img src="images/bottle-pop3.png"/></a>
</div>
<div id="milk2">
	<a href="" onClick="showpopup3('milkform'); return false;"><img src="images/milk_flat.png"/></a>
</div>
<div id="fruit_bskt">
</div>
<div id="egg_bskt">
<div class="egg_tray1">
<a href="https://www.facebook.com/MealsOnAMissionfundraiser" class="fb_egg egg"></a>
<a href="https://twitter.com/MOAMfundraiser" class="twit_egg egg"></a>
<a href="http://youtu.be/Zdc9BYYViuA" class="yt_egg egg"></a>
</div>
<div class="egg_tray2">
<a href="http://www.linkedin.com/pub/beverly-gonzalez/79/683/820" class="li_egg egg"></a>
<a href="https://plus.google.com/111501272728082855473/about" class="goog_egg egg"></a>
<a href="" class="inst_egg egg"></a>
</div>
</div>
<div id="carrot">
</div>
<div id="butter_basket">
</div>
<div id="vegi">
</div>
<div id="milkform">
<iframe src="milk_form.php" style="width:660px;min-height:650px;max-width:100%;overflow:visible;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
</div>
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

function showpopup3(popId){
  jQuery('#'+popId).bPopup({});
}
</script>