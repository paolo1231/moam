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
#gallery1{
background-image:url(images/meals_popup_big.png);
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;
display: none;
min-width: 640px;
min-height: 530px;
}
#gallery2{
background-image:url(images/meals_popup_big.png);
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;
display: none;
min-width: 640px;
min-height: 530px;
}
#note{
background-image:url(images/little_chef_participation.png);
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;
display: none;
min-width: 308px;
min-height: 432px;
}
#survey_form{
display: none;
/*background:#eee;
border-radius: 10px 10px 10px 10px;
box-shadow: 0 0 25px 5px #999;*/
min-width: 640px;
min-height: 510px;
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
height: 420px;
}
#image_gallery2 {
margin-top: 60px;
margin-bottom: 30px;
height: 420px;
}


</style>
</head>

<body>
<div id="wrap">
  <div id="page">
    <div id="header" style="height:230px;">
      <?php include_once "header.php" ?>
      <div class="tagline" style="bottom: 0;">Welcome to the Contact Page<br />"Go ahead and have a click around" </div>
    </div>
    
    <div id="socialbox">
      <ul class="social">
        <li><a href="#"><img src="images/rss_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="https://twitter.com/MOAMfundraiser" target="_blank"><img src="images/twi_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="http://www.linkedin.com/pub/beverly-gonzalez/79/683/820" target="_blank"><img src="images/pink_icon.png" width="28" height="26" alt=""></a></li>
        <li><a href="https://www.facebook.com/MealsOnAMissionfundraiser" target="_blank"><img src="images/fb_icon.png" width="28" height="26" alt=""></a></li>
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
      
      <div id="ref-closed">
        <div class="knob"><a href="contact_us_2.php" class="fridge_handle"><img src="images/open_door_1.png" /></a></div>
        <a href="" class="gallery1" onClick="showgallery('gallery1'); return false;"></a>
        <a href="" class="gallery2" onClick="showgallery('gallery2'); return false;"></a>
        <a href="" class="note" onClick="showpopup('note'); return false;"></a>
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

<div id="gallery1" style="background-color:#FFF;">
  <div id='image_gallery1'><br />
  	<iframe src="image_gallery1/gallery1.html" style="width:635px;height:445px;max-width:100%;overflow:visible;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
  </div>
</div>
<div id="gallery2" style="background-color:#FFF;">
  <div id='image_gallery2'><br />
  	<iframe src="image_gallery2/gallery2.html" style="width:635px;height:445px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
  </div>
</div>

<div id="note">
<form name="contact_us1_form" id="contact_us1_form" action="" method="POST">
<table cellspacing="3px" border="0">
<tr>
<td><img src="images/chef_name_id.png" /></td>
<td><input type="text" name="name" id="cont_name" size="30" /></td>
</tr>
<tr>
<td><img src="images/chef_email_id.png" /></td>
<td><input type="text" name="email" id="cont_email" size="30" /></td>
</tr>
<tr>
<td colspan="2"><div align="center"><input type="submit" id="cont_submit" value=""/></div></td>
</tr>
</table>
</form>
</div>

<div id="survey_form">
<iframe src="survey_form/form.php" style="width:650px;min-height:700px;max-width:100%;overflow:visible;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
</div>

</body>
</html>

<script type="text/javascript">

$("#cont_submit").click(function(e) {
  e.preventDefault();
  var cont_name = $("#cont_name").val(); 
  var cont_email = $("#cont_email").val();
  var dataString = 'cont_name='+cont_name+'&cont_email='+cont_email;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'contact1_formprocess.php',
    success:function(data) {
      alert(data);
    }
  });
  jQuery('#survey_form').bPopup({});
  return false;
});

function showpopup(popId){	
	jQuery('#'+popId).bPopup({
		position: [550,50],
		transition: 'slideDown'
	});
  return false;
};

function showgallery(gallId){	
	jQuery('#'+gallId).bPopup({
		position: ['auto',50],
		transition: 'slideDown'
	});
  return false;
};

function showpopup2(popId){	
	jQuery('#'+popId).bPopup({
		position: [500,0]
	});
  return false;
};

</script>