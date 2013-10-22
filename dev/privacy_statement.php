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
    
    <div id="privacy_statement_box">
    	<h1 align="center">Privacy Statement</h1>
        <p>We are committed to protecting your privacy. Only authorized employees within the company on a need to know basis use any information collected from individual customers.</p>
        <p>This Privacy Statement explains what happens to any personal data that you provide to us, or that we collect from you while you visit our site.</p>
        <p>We do update this Policy from time to time so please review this Policy regularly.</p>
        
        <p><strong><span style="text-decoration: underline;">Information We Collect</span></strong></p>
        <p>In running and maintaining our website we may collect and process the following data about you:</p>
        <p>
        	<ol>
            	<li><strong>Personal Identifiable Information</strong>
                	<p><i>Meals on a Mission</i> will not collect personally identifiable information from you, other than what you supply to us on a voluntary basis upon request. Personally identifiable information includes, but is not limited to, name, address, e-mail address, telephone number, and credit card information.</p>
                    <p><i>Registration for our website:</i></p>
                    <p>Our site may at times require a free registration, which enables full access to the information and resources offered on our Site. A unique email address must be supplied to register.</p>
                    <p><i>Feedback and/or Comment Submissions</i></p>
                    <p>On some pages of the Site, you can submit your comments and/or feedback. We may collect name, address, and e-mail address in connection with these activities.</p>
                    <p><i>Special Offers</i></p>
                    <p>On occasion, we may collect personal information from users in connection with optional (i.e. you opt-in to participate in these offers) special offers. Such information will be used as indicated at the time of collection.</p>
                    <p><i>E-mail Newsletters</i></p>
                    <p>On occasion, we may collect personal information from users in connection with optional (i.e. you opt-in to subscribe to these services) e-mail newsletters. Such information will be used as indicated at the time of collection.</p>
                </li>
                
                <li><strong>Non-personally Identifiable Information</strong>
                	<p>In addition to information that you provide to us, we may also collect and store certain non-personally identifiable information automatically when using the Site. This information helps us improve the experience you and other visitors have with the Site.</p>
                    <p>For example, we may collect your IP address, browser information and reference site domain, as well as related information such as the date on which you visit the Site. This information does not identify you personally and is only used in the aggregate.</p>
                    <p>As in common practice among websites, we use “cookies” and similar technologies. Cookies are text files which store your preferences. No personal information is ever stored in the Meals on a Mission cookie, even if you have entered your name or e-mail address on other parts of the Site. We may use cookies where appropriate to gather information about your computer in order to assist us in improving our website.</p>
                    <p>We may gather information about your general internet use by using the cookie. Where used, these cookies are downloaded to your computer and stored on the computer’s hard drive. Such information will not identify you personally. It is statistical data. This statistical data does not identify any personal details whatsoever. </p>
                    <p>You can adjust the settings on your computer to decline any cookies if you wish. This can be easily done by activating the reject cookies setting on your computer.</p>
                    <p>Our advertisers may also use cookies, over which we have no control. Such cookies (if used) would be downloaded once you click on advertisements on our website.</p>
                </li>
            </ol>       
        </p>
        
        <p><strong><span style="text-decoration: underline;">Use of Your Information</span></strong></p>
        <p>Except as expressly set forth in our policies, we will not willfully disclose your personal identifiable information to any third party without first receiving your permission. We will never sent, rent, or swap your personally identifiable information with non-affiliated third parties for their own purposes.</p>
        <p>We will typically explain the extent of use at the time you are asked to provide personal information. If you do not want this information to be collected or used by us for these purposes, you can simply “opt out”. Under certain circumstances, opting out may prevent your participation in activities for which your personal information is needed, as in special offers.</p>
        <p>We use your information to provide services to you. In addition to this we may use the information for one or more of the following purposes:</p>
        
        <p>
        	<ol type="i">
            	<li>To provide information to you that you request from us relating to our products or services.</li>
                <li>To provide information to you relating to other products that may be of interest to you. Such additional information will only be provided where you have consented to receive such information.</li>
                <li>To inform you of any changes to our website, services or goods and products.</li>
            </ol>
        </p>
        
        <p>Where your consent has been provided in advance we may allow selected third parties to use your data to enable them to provide you with information regarding unrelated goods and services which we believe may interest you. Where such consent has been provided it can be withdrawn by you at any time.</p>
        
        <p><strong><span style="text-decoration: underline;">Storing Your Personal Data</span></strong></p>
        <p>In operating our website it may become necessary to transfer data that we collect from you to locations outside of the European Union for processing and storing. By providing your personal data to us, you agree to this transfer, storing or processing. We do our upmost to ensure that all reasonable steps are taken to make sure that your data is treated stored securely.</p>
        <p>Unfortunately the sending of information via the internet is not totally secure and on occasion such information can be intercepted. We cannot guarantee the security of data that you choose to send us electronically, sending such information is entirely at your own risk.</p>
        
        <p><strong><span style="text-decoration: underline;">Disclosing Your Information</span></strong></p>
        <p>We do not disclose your personal information to any other party other than in accordance with this Privacy Statement and in the circumstances detailed below:</p>
        <p>
        	<ol type="i">
            	<li>In the event that we sell any or all of our business to the buyer.</li>
                <li>Where we are legally required by law to disclose your personal information.</li>
                <li>To further fraud protection and reduce the risk of fraud.</li>
            </ol>
        </p>
        
        <p><strong><span style="text-decoration: underline;">Third Party Links</span></strong></p>
        <p>Our website may contain links to enable you to visit other websites of interest easily. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide while visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>
        
        <p><strong><span style="text-decoration: underline;">Access to Information</span></strong></p>
        <p>Client records are regarded as confidential and therefore will not be divulged to any third party, other than if legally required to do so to the appropriate authorities. Clients have the right to request sight of, and copies of any and all Client Records we keep, on the proviso that we are given reasonable written notice of such a request.</p>
        <p><strong>We will not share, sell or rent your personal information to any third party or use your e-mail address for unsolicited mail. Any emails sent by MOAM will only be in connection with the provision of agreed services and products.</strong></p>
        
        <p><strong><span style="text-decoration: underline;">Contacting Us</span></strong></p>
        <p>Please do not hesitate to contact us regarding any matter relating to this Privacy Policy at <a href="mailto:bevgonzalez@meals-ona-mission.com">bevgonzalez@meals-ona-mission.com</a>.</p>
        
        <p><strong><span style="text-decoration: underline;">Acceptance of MOAM Privacy Statement, Terms and Conditions</span></strong></p>
        <p>By using this Site, you signify your agreement to the terms and conditions of this <i>Meals on a Mission</i> Privacy Statement. If you do not agree to the foregoing terms and conditions, please do not use the Site. We reserve the right, in our sole discretion, to change, modify, add, or remove portions of this statement at any time. Please check this page periodically for any changes. Your continued use of <i>Meals on a Mission</i> following the posting of any changes to these terms shall signify your acceptance of those changes. If you have any questions or concerns, please <span style="text-decoration: underline;">contact us</span>.</p>
        
        <p><strong><span style="text-decoration: underline;">TERMS OF USE</span></strong></p>
        <p>Please also make sure to read <i>Meals on a Mission’s</i> Terms of Use to understand the additional terms and conditions which apply to your use of our Site.</p>
        <p>This Privacy Policy posted on this Site was updated on or about July 1, 2013.</p>
                
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