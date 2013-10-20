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
    
    <div id="terms_conditions_box">
    	<h1 align="center">Terms and Conditions</h1>
        <p>By using this website, you agree to the following terms:</p>
        <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and/or any all Agreements. The term ‘Meals on a Mission’ or ‘MOAM’ or ‘us’ or ‘we’ refers to the owner of the website whose registered office is PO Box 732. Our company Service Mark Registration Number is 68471 in the Secretary of State, Sacramento, CA. The term ‘you’ or ‘client’ refers to the user or viewer of our website.</p>
        <p>By using or accessing our Site and using any of our Services, you acknowledge and agree to these Terms and agree to be bound by this Agreement and the Privacy Policy. We may amend our Terms of Service or Privacy Policy from time to time, we will notify you of these changes to our policy. In order to continue using our Site and Service you must agree to all such changes. </p>
        <p>If you do not agree to the Terms of Service or the Privacy Policy please stop using our Site and Service immediately.</p>
        
        <p><strong>License to use the website</strong></p>
        <p>Unless otherwise stated, <i>MOAM</i> and/or its licensors own the intellectual property rights in this website and material on the website. Subject to the license below, all these intellectual property rights are reserved.</p>
        <p>You may view; download for caching purposes only, and print pages or other content from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>
        <p>You must not:<br />
        	<ol>
            	<li>republish material from this website (including republication on another website);</li>
                <li>sell, rent or sub-license material from the website;</li>
                <li>show any material from the website in public;</li>
                <li>reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;</li>
                <li>edit or otherwise modify any material on the website; or</li>
                <li>redistribute material from this website [except for content specifically and expressly made available for redistribution]. (Where content is specifically made available for redistribution, it may only be redistributed [within your organisation].)</li>
            </ol>
        </p>
        
        <p><strong>Acceptable use</strong></p>
        <p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</p>
        <p>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</p>
        <p>You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without MOAM’s express written consent.
You must not use this website to transmit or send unsolicited commercial communications.
</p>
        <p>You must not use this website for any purposes related to marketing without MOAM’s  express written consent.</p>
        
        <p><strong>Restricted access</strong></p>
       	<p>Access to certain areas of this website is restricted. MOAM reserves the right to restrict access to other areas of this website, or indeed this entire website, at MOAM’s discretion.</p>
        <p>If MOAM provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.</p>
        
        <p><strong>User content</strong></p>
        <p>In these terms and conditions, “your user content” means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose.</p>
        <p>You grant to MOAM a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in any existing or future media. You also grant to MOAM the right to sub-license these rights, and the right to bring an action for infringement of these rights.</p>
        <p>Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action whether against you or MOAM or a third party (in each case under any applicable law).</p>
        <p>You must not submit any user content to the website that is or has ever been the subject of any threatened or actual legal proceedings or other similar complaint.
MOAM reserves the right to edit or remove any material submitted to this website, or stored on MOAM’s servers, or hosted or published upon this website.
</p>
        <p>Notwithstanding MOAM’s rights under these terms and conditions in relation to user content, MOAM does not undertake to monitor the submission of such content to, or the publication of such content on, this website.</p>
        
        <p><strong>Intellectual Property</strong></p>
        <p>The Intellectual Property Rights in this website and the materials on or accessible via it belongs to MOAM or its licensors. This website and the materials on or accessible via it and the Intellectual Property Rights therein may not be copied, distributed, licensed, used, or reproduced in any way (save to the extent strictly necessary for, and for the purposes of, accessing and using this website). </p>
        <p>MOAM’s logo is a trademark which belongs to Meals on a Mission and they may not be used, copied or reproduced in any way without written consent from MOAM.</p>
        <p>For these purposes “Intellectual Property Rights” includes the following (wherever and whenever and for the full term of each of them): any patent, trademark, trade name, service mark, service name, design, design right, copyright, database right, moral rights, know how, trade secret and other confidential information, rights in the nature of any of these items in any country, rights in the nature of unfair competition rights and rights to sue for passing off or other similar intellectual or commercial right (in each case whether or not registered or registrable) and registrations of and applications to register any of them.</p>
        
        <p><strong>Representation, Warranties and Exceptions</strong></p>
        <p>Our site and service is offered “as-is”.</p>
        <p>We make no representations or warranties as to the merchantability of our service or fitness for any particular purpose. We specifically disclaim all express or implied warranties not stated within this agreement. You agree that you are releasing us from any liability that we may otherwise have to you in relation to or arising from this agreement or our services, for reasons including, but not limited to, failure of our service, negligence or any other tort. To the extent that applicable law restricts this release of liability, you agree that we are only liable to you for the minimum amount of damages that the law restricts our liability to, if such a minimum exists. We are not liable for any failure of goods or services of our company or a third party, including any failure of the goods or services of our company or a third party, including any failures or disruptions, untimely delivery, scheduled or unscheduled, intentional or unintentional, on our website which prevent access to our website temporarily or permanently.</p>
        <p>For Jurisdictions that do not allow us to limit our liability: Notwithstanding any provision of these Terms, if your jurisdiction has provisions specific to waiver or liability that conflict with the above then our liability is limited to the smallest extent possible by law. Specifically, in those jurisdictions not allowed, we do not disclaim liability for: (a) death or personal injury caused by its negligence or that of any of its officers, employees or agents; or (b) fraudulent misrepresentation; or (c) any liability which it is not lawful to exclude either now or in the future.</p>
        <p>If you are a resident of a jurisdiction that requires a specific statement regarding release then the following applies. For example, California residents must, as a condition of this agreement, waive the applicability of California Civil Code Section  1542, which states, <i>“A general release does not extend to claims which the creditor does not know or suspect to exist in his or her favor at the time of executing the release, which if known by him or her must have materially affected his or her settlement with the debtor.”</i> You hereby waive this section of the California Civil Code. You hereby waive any similar provision in law, regulation, or code that has the same intent or effect as the aforementioned release.</p>
        
        <p><strong>Third Party Links</strong></p>
        <p>We have no control over, and are not responsible for, these third party websites or their use of your personal information. We do not endorse, recommend or vouch for the security of such websites. We recommend that you review their terms of service and privacy policies before accessing and using the third party site.</p>
        
        <p><strong>Limitation on Liability</strong></p>
        <p>In no event shall Meals on a Mission, its Officers, Directors, Employees, or Agents, be liable to you for any direct, indirect, incidental, special, punitive or consequential damages whatsoever resulting from any:</p>
        <p>
        	<ol type="i">
            	<li>Errors, mistakes or inaccuracies of content, </li>
                <li>Personal injury or property damage, of any nature whatsoever, resulting from your access to and use of our services and products;</li>
                <li>Any unauthorized access to or use of our secure servers and/or any and all personal information and/or financial information stored therein.</li>
                <li>Any interruption or cessation of transmission to or from our services.</li>
                <li>Any bugs, viruses, Trojan Horses, or the like, which may be transmitted to or through our services by any third party, and/or </li>
                <li>vi.	Any errors or omissions in any content for any loss or damage of any kind incurred as a result of your use of our products made available via the services, whether based on warranty, contract, tort, or any other legal theory, and whether or not the MOAM is advised of the possibility of such damages.</li>
            </ol>
        </p>
        
        <p>The foregoing limitation of liability shall be applied to the fullest extent permitted by law in the applicable jurisdiction.</p>
        <p>In the event of any problem with this website, you agree that your sole remedy is to cease using this website. In the event of any problem with the products or services that you have purchased on or through this website, you agree that your sole remedy, if any, is through this agreement. MOAM is not liable to you or to third parties for any damage, harm, injury or claim that arises from your use of any products purchased from our site.</p>
        
        <p><strong>Termination and Cancellation</strong></p>
        <p>We may terminate or suspend service or your account or any other provision of services to you at our discretion without explanation and notice, though we will strive to provide a timely explanation in most cases. </p>
        <p>If you wish to terminate this Agreement or your MOAM account, you are solely responsible for properly cancelling your account, please contact us at bevgonzalez@meals-ona-mission.com. </p>
        <p>Cancellation may result in the immediate deletion of your account. All provisions of this Agreement which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
        
        <p><strong>Availability</strong></p>
        <p>MOAM does not warrant that the service from this site will be uninterrupted, timely or error free, although it is provided to the best ability.</p>
        
        <p><strong>Communication</strong></p>
        <p>Contact information can be found on our <strong>Contact Us</strong> link on our website.</p>
        
        <p><strong>Severability</strong></p>
        <p>In the event that a provision of this Agreement is found to be unlawful, conflicting with another provision of the Agreement, or otherwise unenforceable, the Agreement will remain in force as though it had been entered into without that unenforceable provision being included in it. If two or more provisions of this Agreement are deemed to conflict with each other’s operation, MOAM shall have the sole right to elect which provision remains in force.</p>
        
        <p><strong>Waiver</strong></p>
        <p>We reserve all rights permitted to us under this Agreement as well as under the provisions of any applicable law. Our non-enforcement of any particular provision or provisions of this Agreement or the any applicable law should not be construed as our waiver of the right to enforce that same provision under the same or different circumstances at any time in the future.</p>
        
        <p><strong>Indemnity</strong></p>
        <p>You agree to defend, indemnify and hold harmless MOAM, its officers, directors, employees and agents, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt and expenses (including but not limited to attorney’s fees) arising from:</p>
        <p>
        	<ol>
            	<li>Your use of and access to the MOAM service;</li>
                <li>Your violation of any term of these Terms and Condition;</li>
            </ol>
        </p>
        <p>You also agree that you have a duty to defend us against such claims and we may require you to pay for an attorney(s) of our choice in such cases. You agree that his indemnity extends to requiring you to pay for our reasonable attorneys’ fees, court costs, and disbursements. In the event of a claim such as one described in this paragraph, we may elect to settle with the party/parties making the claim and you shall be liable for the damages as though we had 10. Force Majeure You agree that we are not responsible to you for anything that we may otherwise be responsible for, if it is the result of events beyond our control, including, but not limited to, acts of God, war, insurrection, riots, terrorism, crime, labor shortages (including lawful and unlawful strikes), embargoes, postal disruption, communication disruption, failure or shortage of infrastructure, shortage of materials, or any other event beyond our control.</p>
        
        <p><strong>Notification of Changes</strong></p>
        <p>MOAM reserves the right to change these conditions from time to time as it sees fit and your continued use of the site will signify your acceptance of any adjustment to these terms. You are therefore advised to re-read this statement on a regular basis. </p>
        
        <p><strong>Assignment</strong></p>
        <p>You may not assign your rights and/or obligations under this Agreement to any other party without our prior written consent. We may assign our rights and/or obligations under this Agreement to any other party at our discretion.</p>
        
        <p><strong>Entire Agreement</strong></p>
        <p>These terms and conditions, together with the Privacy and Legal Disclaimer, constitute the entire agreement between you and MOAM in relation to your use of this website, and supersede all previous agreements in respect of your use of this webiste.</p>
        
        <p><strong>General</strong></p>
        <p>The Laws of the United States govern these terms and conditions. By accessing this website you consent to these terms and conditions. These Terms and Conditions shall not be amended, modified, varied or supplemented except by the duly authorized representatives of the Company.</p>
        
        <p><strong>Jurisdiction</strong></p>
        <p>You agree that any dispute arising from or relating to this Agreement will be heard solely by a court of competent jurisdiction in or nearest to San Bernardino, CA. If you bring a dispute in a manner other than in accordance with this section, you agree that we may move to have it dismissed, and that you will be responsible for our reasonable attorneys’ fees, court costs, and disbursements in doing so.</p>
        <p>You agree that the unsuccessful party in any dispute arising from or relating to this Agreement will be responsible for the reimbursement of the successful party’s reasonable attorney’s fees, court costs, and disbursements.</p>
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