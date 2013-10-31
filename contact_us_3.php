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
      
      <div class="big_bread">
    
    	<div class="contact_area">
        	
            <p>
            Here at Meals On A Mission, fundraising and fun go hand in hand!  This sensory page 
is just a sample of what our website is going to showcase for everyone to interact and 
enjoy. We want to thank you for taking the time to send us a comment or 
ask a question!!

            </p>
            
            <div style="width:530px; height:auto; padding:0px 0px 0px 20px;">
            
            <form id="form3" action="" method ="post">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%"><img src="images/name_icon.png" width="17" height="16" alt="" /></td>
                <td width="46%"> <input type="text" class="input_text" id="name" placeholder="name" /> </td>
                <td width="48%" rowspan="3" align="left" valign="top">
                
                <textarea class="text_area" id="comment">
</textarea>

                </td>
              </tr>
              <tr>
                <td><img src="images/email_icon.png" width="19" height="13" alt="" /></td>
                <td> <input type="text" class="input_text" id="email" placeholder="E-mail" /></td>
              </tr>
              <tr>
                <td><img src="images/contact_icon.png" width="18" height="21" alt="" /></td>
                <td><input type="text" class="input_text" id="phone" placeholder="phone" /></td>
              </tr>
              <tr>
                <td><img src="images/drop_down_list_icon.png" width="21" height="16" alt="" /></td>
                <td>
                <select class="select_contact" id="opt">
                  <option value="Organization">Organization</option>
                  <option value="Church">Church</option>
                  <option value="School">School</option>
                  <option value="Funeral Industry">Funeral Industry</option>
                  <option value="Non-Profit">Non-Profit</option>
                  <option value="Investor">Investor</option>                  
                  <option value="Other">Other</option>                  
				</select>
				</td>
                <td><input type="submit" value="&nbsp;" id="sendmail" name="sendmail" class="contact_btn" /></td>
              </tr>
		</table>
        <div id="response"></div>
			</form>
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

<div id="survey_form">
<iframe src="survey_form/form.html" style="width:650px;min-height:700px;max-width:100%;overflow:visible;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
</div>


</body>
</html>

<script type="text/javascript">
function showpopup(popId){	
	jQuery('#'+popId).bPopup({
		position: [350,100]
	});
  return false;
};
</script>