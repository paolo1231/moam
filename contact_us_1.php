<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Meals on a Mission</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.bpopup.min.js"></script>
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
#gallery1{
background-image:url(images/meals_popup.png);
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;
display: none;
min-width: 640px;
min-height: 310px;
}
#gallery2{
background-image:url(images/meals_popup.png);
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;
display: none;
min-width: 640px;
min-height: 310px;
}
#note{
background-image:url(images/little_chef_participation.png);
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;
display: none;
min-width: 308px;
min-height: 432px;
}
table {
position: relative;
top: 300px;
left: 30px;
}

#show_my_art{background:url('images/show_my_art_btn.jpg') 20px 100px;}

#image_gallery1 {
margin-top: 60px;
margin-bottom: 30px;
height: 200px;
}
#image_gallery2 {
margin-top: 60px;
margin-bottom: 30px;
height: 200px;
}


</style>
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
      
      <div id="ref-closed">
        <div class="knob"><a href="contact_us_2.php" class="fridge_handle"><img src="images/open_door_1.png" /></a></div>
        <a href="" class="gallery1" onClick="showpopup('gallery1'); return false;"></a>
        <a href="" class="gallery2" onClick="showpopup('gallery2'); return false;"></a>
        <a href="" class="note" onClick="showpopup('note'); return false;"></a>
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

<div id="gallery1" style="background-color:#FFF;">
  <div id='image_gallery1'>
  </div>
</div>
<div id="gallery2" style="background-color:#FFF;">
  <div id='image_gallery2'>
  </div>
</div>
<div id="note">
<table cellspacing="3px">
<tr>
<td><img src="images/chef_name_id.png" /></td>
<td><input type="text" name="name" size="30" /></td>
</tr>
<tr>
<td><img src="images/chef_email_id.png" /></td>
<td><input type="text" name="email" size="30" /></td>
</tr>
<tr>
<td colspan="2"><a href=""><img src="images/show_my_art2.jpg" /></a></td>
</tr>
</table>
</div>


</body>
</html>

<script type="text/javascript">

function showpopup(popId){	
  jQuery('#'+popId).bPopup();
  return false;
};   

</script>