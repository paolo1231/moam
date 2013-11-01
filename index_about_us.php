<?php require "sessions.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>

<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="js/default/default.css" type="text/css" media="screen" />
<link href="nivo-slider.css" rel="stylesheet" type="text/css"  />
<link href="stylesheet/reset.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/stylesheet.css" rel="stylesheet" type="text/css" />
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
		$('#slider').nivoSlider({effect: 'slideInLeft', 
			animSpeed: 400,
			pauseTime: 13000,
			 directionNav: true, // Next & Prev navigation
			controlNav: false // 1,2,3... navigation
		});
		
		// Released under MIT license: http://www.opensource.org/licenses/mit-license.php

		$('[placeholder]').focus(function() {
		  var input = $(this);
		  if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		  }
		}).blur(function() {
		  var input = $(this);
		  if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		  }
		}).blur().parents('form').submit(function() {
		  $(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
			  input.val('');
			}
		  })
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

<div class="main_bg">

	
    <div class="search_bar">
    
    <i> Search</i>
    
     <div class="search_btn">
    </div>
    </div>
    
<div class="nav" style="position:relative;">

<div style="height:200px; width:200px; position:absolute; z-index:1; left:0px; cursor:pointer;" onclick="window.location.href = 'index.php';" >
</div>

<ul>
    	<li>
        <a href="index_about_us.php" class="active">About us</a>
        </li>
        
        <li>
       <a href="mission_news.php" class="mission"> Mission News</a>
        </li>
        
        <li>
       <a href="fundraiser.php" class="fundraiser"> Fundraiser</a>
        </li>
        
        <li>
       <a href="prize_program.php" class="prize_program"> Prize Program</a>
        </li>
        
        <li>
       <a href="food_games.php" class="food_games_nav"> Food Games</a>
        </li>
        
        <li>
       <a href="q_and_a.php" class="qa_nav"> Q & A</a>
        </li>
        
        <li>
       <a href="contact_us_1.php" class="contact_us_nav"> Contact us</a>
        </li>
        

        
        
    </ul>
   
  

 <div class="clr">
 </div>
</div> 

  <div class="fundraiser_text_about">
The fundraiser changing the world, one bite at a time!

  </div>
  
  <div class="scroll_down_text_about"></div>
  
  <div class="banner_area_about" >
  
  	
    <ul class="social">
    	<li>
          <a href="#">
        <img src="images/rss_icon.png" width="28" height="26" alt="" />
          </a> 
          </li>
      
      <li>
      <a href="https://twitter.com/MOAMfundraiser" target="_blank">
        <img src="images/twi_icon.png" width="28" height="26" alt="" /> 
        </a></li>
        
        <li>
        <a href="http://www.linkedin.com/pub/beverly-gonzalez/79/683/820" target="_blank">
        <img src="images/pink_icon.png" width="28" height="26" alt="" /> 
         </a></li>
         
        <li>
        <a href="https://www.facebook.com/MealsOnAMissionfundraiser" target="_blank">
        <img src="images/fb_icon.png" width="28" height="26" alt="" />
        </a>
         </li>
        
        <div class="clr">
        </div>
    
    </ul>
    
      	<div class="slider-cont">
            <div class="slider-wrapper theme-default">
				<div class="navBtns"> <a href="#" id="previousButton">Prev</a> <a href="#" id="nextButton">Next</a> </div>
				<div id="slider" class="nivoSlider">
                	<img src="images/abt-banner-1.jpg" data-thumb="images/abt-banner-1.jpg" alt=""  />
					<img src="images/abt-banner-3.jpg" data-thumb="images/abt-banner-3.jpg" alt="" />
					<img src="images/abt-banner-2.jpg" data-thumb="images/abt-banner-2.jpg" alt="" />
					<img src="images/abt-banner-4.jpg" data-thumb="images/abt-banner-4.jpg" alt=""  />
				</div>
			</div>
    </div>
   </div>

</div>

<div class="banner_bottom_area">
    	
        <div class="left_area_about">
        		
                <div class="left_panel_there_more">
                	
                   

                
                
                </div>
                
                <div class="who_we_do_panel">
                </div>
                
                <div class="golden_oppurtunitie">
                	
                    <p class="text_box1"><br />
                    <strong class="text_green">PREMIUM LOGO AD SPOTS — </strong>  Our solution is pure and simple. We provide a clean and efficient way to market your website. Your ads are strategically placed on our webpage, on a billboard next to our Chef, which attracts more attention and site visitors. For more information, send us an email and we will gladly provide all the information you need.

                    </p>
                    
                    <p class="text_box2">
      <strong class="text_red"> Be a PIONEER in the INDUSTRY!</strong><br />
       <strong class="text_green">Email Us At:</strong> LogoAdSpots@meals-ona-mission.com <br /><br />


                    </p>
                    
                    <p class="text_box1">
                    <strong class="text_green">FOOD GAMES FOR FUND$ — </strong>We are the PIONEER in Social Networking using a NEW online Gaming Platform in the Fundraising industry. Our assurance to ALL participating web-businsses: <u>Game Players WILL be navigating a page off of your website!</u> That’s right, you heard us! Your COMPANY LOGO link is a gatekeeper to an extraordinary, exciting and cutting-edge gaming platform that helps an organization meet its goal! And the BEST PART is that 60% of the acquired revenue from playing, are allocated to participating organizations! It’s a win-win situation! You get all the advertising you need while you’re helping out the organization!

                    </p>
                    
                    <p class="text_box2">
      <strong class="text_red"> Be a part of this compelling REVOLUTION!</strong><br />
       <strong class="text_green">Email Us At:</strong> ChefGames@meals-ona-mission.com <br /><br />


                    </p>
                    
                    <p class="text_box1">
                    <strong class="text_green">ALL FUNERAL RELATED BUSINESS -—</strong>  We must actively bring conscious awareness to humanity that people are passing without a proper transitions to their permanent resting place. This uneasy truth needs to be revisited in a different yet well needed and compassionate way.
                    Meals on a Mission supports families by ensuring availability to all who are in need of financial support and assistance the ability to bury their loved ones under the age of 18 with grace and ease. We have developed “In Remembrance of Me” a program developed to assist the families. The Meals On A Mission will be donating 70% of net sales to the contracted funeral homes.



                    </p>
                    
                    <p class="text_box2">
      <strong class="text_red"> Join us with this VITAL program</strong><br />
       <strong class="text_green">Email Us At:</strong> Funerals@meals-ona-mission.com


                    </p>
                
                
                </div>
                
        
        
        	
        
        </div>
        
        <div class="right_area_about">
        	
            <div class="extra_panel">
            <p id="newsfeed_link">Startup Invents New Way to Fundraise by Solving <br />4 Problems and Developing Social Awareness:<br /> <a href="http://www.sbwire.com/press-releases/startup-invents-new-way-to-fundraise-by-solving-4-problems-and-developing-social-awareness-318620.htm">Link 1 | </a><a href="http://www.i-newswire.com/startup-invents-new-way-to-fundraise/236366">Link 2</a></p>
            </div>
            
            <div class="about_general_inquieis">
              <form name="about_form" action="" method="POST">
                <ul>
                	
                    <li>
                     <input type="text" class="input_about" name="fname" id="fname" placeholder="First Name"/>
                    </li>
                    
					<li>
                     <input type="text" class="input_about" name="lname" id="lname" placeholder="Last Name"/>
                    </li>
                    
                    <li>
                     <input type="text" class="input_about" name="cnum" id="cnum" placeholder="Contact Number"/>
                    </li>
                    
                    <li>
                     <input type="text" class="input_about" name="email" id="email" placeholder="Email"/>
                    </li>
                    
                                     
                    <li>
                    <textarea class="form_about" name="message" id="message" placeholder="Message"></textarea>
                    
                    </li>
                    
                    <li>
                    <input type="submit" class="count_me_btn" value="" name="count_me_in" id="count_me_in"/>
                    </li>
                
                
                </ul>
            </form>
            
            </div>
            
            <div class="church_block">
            	
                
            	
                <p>
                Meals on a Mission is founded from the love to feed both the stomach and the soul through Christian Biblical based morals and values. <br />

                </p>
                
                <p>
                Were a loving socially for-profit company with a vision to reach the masses. <br />

                </p>
                
                <p>
                 Meals On A Mission is  where fundraising meets meal planning with a side of prizes, a side of cooking games and a tall glass of projects all serving the world… <br />

ONE BITE AT A TIME!
                </p>
                <div class="half_chef">
                </div>
            
            </div>
        
        
        
        </div> 
    
    
    	
        
        
        <div class="clr">
        </div>

    </div>

<div class="footer_nav">
	
    <div class="footer_left">
    Copyright © 2012. All rights reserved. MEALS ON A MISSION. 
    </div>
    
    <div class="footer_right">
    
    	<ul>
        	
            <li>
            <a href="contact_us_1.php"> Contact Us</a>
            </li>
            
            <li>
           <a href="terms_and_conditions.php"> • Terms of Service </a>
            </li>
            
            <li>
            <a href="privacy_statement.php"> • Privacy Policy </a>
            </li>
        
        </ul>
    
    </div>
    
    <div class="clr">
    </div>


</div>

<div id="survey_form">
<iframe src="survey_form/form.php" style="width:650px;min-height:700px;max-width:100%;overflow:visible;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
</div>

</body>
</html>

<script type="text/javascript">

$("#count_me_in").click(function(e) {
  e.preventDefault();
  var fname = $("#fname").val(); 
  var lname = $("#lname").val();
  var cnum = $("#cnum").val();
  var email = $("#email").val();
  var message = $("#message").val();
  var dataString = 'fname='+fname+'&lname='+lname+'&cnum='+cnum+'&email='+email+'&message='+message;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'about_formprocess.php',
    success:function(data) {
      alert(data);
    }
  });
  jQuery('#survey_form').bPopup({});
  return false;
});

</script>
