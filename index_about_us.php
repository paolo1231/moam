<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>

<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="js/default/default.css" type="text/css" media="screen" />
<link href="nivo-slider.css" rel="stylesheet" type="text/css"  />
<link href="stylesheet/stylesheet.css" rel="stylesheet" type="text/css" />

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
       <a href="index_about_us.php" class="mission"> Mission News</a>
        </li>
        
        <li>
       <a href="index_about_us.php" class="fundraiser"> Fundraiser</a>
        </li>
        
        <li>
       <a href="index_about_us.php" class="prize_program"> Prize Program</a>
        </li>
        
        <li>
       <a href="index_about_us.php" class="food_games_nav"> Food Games</a>
        </li>
        
        <li>
       <a href="index_about_us.php" class="qa_nav"> Q & A</a>
        </li>
        
        <li>
       <a href="contact_us_1.php" class="contact_us_nav"> Contact us</a>
        </li>
        

        
        
    </ul>
   
  

 <div class="clr">
 </div>
</div> 

  <div class="fundraiser_text_about">
The fundraiser changing the world, <br />
one bite at a time!

  </div>
  
  
  
  <div class="scroll_down_text_about">
  
  </div>
  
  <div class="banner_area_about" >
  
  	
    <ul>
    	<li>
          <a href="#">
        <img src="images/rss_icon.png" width="28" height="26" alt="" />
          </a> 
          </li>
      
      <li>
      <a href="#">
        <img src="images/twi_icon.png" width="28" height="26" alt="" /> 
        </a></li>
        
        <li>
        <a href="#">
        <img src="images/pink_icon.png" width="28" height="26" alt="" /> 
         </a></li>
         
        <li>
        <a href="#">
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
					<img src="images/abt-banner-3.jpg" data-thumb="images/abt-banner-3.jpg" alt="" />
					<img src="images/abt-banner-2.jpg" data-thumb="images/abt-banner-2.jpg" alt="" />
					<img src="images/abt-banner-4.jpg" data-thumb="images/abt-banner-4.jpg" alt=""  /><!--title="#htmlcaption"-->
                    <img src="images/abt-banner-1.jpg" data-thumb="images/abt-banner-1.jpg" alt=""  /><!--title="#htmlcaption2"-->
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
					<strong>This</strong> is Caption #1 with <a href="#">a link</a>. 
				</div>
                <div id="htmlcaption2" class="nivo-html-caption">
					<strong>This</strong> is Caption #2 with <a href="#">a link</a>. 
				</div>
			</div>
    </div>
   </div>

</div>

<div class="banner_bottom_area">
    	
        <div class="left_area_about">
        		
                <div class="left_panel_there_more">
                	
                    <p class="first_text">
                    Our mission is to embark on a life-changing journey where Meals on a Mission’s 	
                    Outreach will help create local community gardens using the latest in Green  
                    </p>
                    
                     <p class="second_text">
Technology.  These gardens will be used to support programs that will teach our community youth on how to cook alongside imparting valuable life long lessons of family balance and humility.
<br />                                      
These communities are going to host bi-annual tasting galas in which students will be participating and serving the meals to other children invitees – all of whom comes from abused, orphaned or trafficked homes. This opportunity creates a humbling level of equality for all the participants and spectators alike. Furthermore, this endeavour raises awareness and develops a new generation of individuals who possess technical skills which can be passed on to future generations.
                    </p>

                
                
                </div>
                
                <div class="who_we_do_panel">
                </div>
                
                <div class="golden_oppurtunitie">
                	
                    <p class="text_box1">
                    <strong class="text_green">PREMIUM LOGO AD SPOTS — </strong>  Our solution is pure and simple. We provide a clean and efficient way to market your website. Your ads are strategically placed on our webpage, on a billboard next to our Chef, which attracts more attention and site visitors. For more information, send us an email at: (insert address) and we will gladly provide all the information you need.

                    </p>
                    
                    <p class="text_box2">
      <strong class="text_red"> Be a PIONEER in the INDUSTRY!</strong><br />
       <strong class="text_green">Email Us At:</strong> LogoAdSpots@meals-ona-mission.com


                    </p>
                    
                    <p class="text_box1">
                    <strong class="text_green">CHEF PEPE GAME LOGO SPOTS — </strong>  We are the PIONEER in Social Networking using a NEW online Gaming Program in the Fund Raising industry. Our assurance to you: Participants WILL be navigating a page on your website! That’s right, you heard us! Your COMPANY LOGO link is a gatekeeper to an extraordinary, exciting and cutting-edge gaming platform that helps an organization meet its goal! The BEST PART is that  60% of the acquired funds from CPV, are allocated to participating organizations! It’s a win-win situation! You get all the advertising you need while you’re helping out the organization!

                    </p>
                    
                    <p class="text_box2">
      <strong class="text_red"> Be a part of this compelling REVOLUTION!</strong><br />
       <strong class="text_green">Email Us At:</strong> ChefGames@meals-ona-mission.com


                    </p>
                    
                    <p class="text_box1">
                    <strong class="text_green">ALL FUNERAL RELATED BUSINESS -—</strong>  We must actively bring conscious awareness to humanity that people are passing without a proper transitions to their permanent resting place. This uneasy truth needs to be revisited in a different yet well needed and compassionate way.
                    Meals on a Mission supports families by ensuring availability to all who are in need of financial support and assistance the ability to bury their loved ones under the age of 18 with grace and ease. Healing starts from within but our connection and support is a universal movement that will impact humanity especially if exercised with love and compassion.



                    </p>
                    
                    <p class="text_box2">
      <strong class="text_red"> Join us with this VITAL program</strong><br />
       <strong class="text_green">Email Us At:</strong> Funerals@meals-ona-mission.com


                    </p>
                
                
                </div>
                
        
        
        	
        
        </div>
        
        <div class="right_area_about">
        	
            <div class="extra_panel">
            </div>
            
            <div class="about_general_inquieis">
            	
                <ul>
                	
                    <li>
                     <input type="text" class="input_about" placeholder="First Name"/>
                    </li>
                    
					<li>
                     <input type="text" class="input_about" placeholder="Last Name"/>
                    </li>
                    
                    <li>
                     <input type="text" class="input_about" placeholder="Contact Number"/>
                    </li>
                    
                    <li>
                     <input type="text" class="input_about" placeholder="Email"/>
                    </li>
                    
                                     
                    <li>
                    <textarea class="form_about" placeholder="Message"></textarea>
                    
                    </li>
                    
                    <li>
                    <input type="button" class="count_me_btn"/>
                    </li>
                
                
                </ul>
            
            
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
            <a href="#"> Contact Us</a>
            </li>
            
            <li>
           <a href="#"> • Terms of Service </a>
            </li>
            
            <li>
            <a href="#"> • Privacy Policy </a>
            </li>
        
        </ul>
    
    </div>
    
    <div class="clr">
    </div>


</div>




</body>
</html>
