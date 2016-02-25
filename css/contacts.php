<?php require'header.php'; ?>

		<!-- BEGIN: PAGE TITLE -->
	    <div class="fullwidth-container bigtext">
	        <div class="container">
	            <div class="pageTitle sixteen columns">
					<!-- Page Secondary Title -->
	                <h2 class="secondaryTitle">TECHIE WORLD WITH TECHIE PEOPLE<br/> <span class='text_color'> WE'RE HERE</span></h2>
	            </div>
	        </div>
	    </div>
	    
	    <!-- START: FULL CONTENT -->	
		<div class="entry-content">
			<div class="container">	
	            <div class="twelve columns">
					<!-- Map Title -->
	                <h2 class="zaptitle"><span>Find us on the map</span></h2>
	                
	                <!-- BEGIN: MAP -->	
					<div id="map" style="top: 0 !important;">
						<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=211397242936252192149.0004e906999d6e6ce8c4d&amp;hl=pt-PT&amp;ie=UTF8&amp;ll=28.4607547,77.4963887&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe>
					</div>
					<!-- End: MAP -->
						
					<br />
	                
					<!-- Contact Form Title -->
	                <h2 class="zaptitle"><span>We’d love to hear from you, lets get in touch!</span></h2>
	                
	                <div>
						<!-- Begin Contact Form -->
	                    <div class="contact-form">
	                        <div class="message_success form_success"></div>
	                        <form method="post" action="js/sendemail.php" class="validateform">
                                <ul class="forms">
                                    <li>
                                        <label class="name">Name</label>
                                        <input type="text" name="name" class="yourname txt corner-input" onfocus="checkerror(this)" onblur="var v = $(this).val(); $('.yourname_val').html(v);">
                                        <div class="yourname_val" style="display:none"></div>
                                    </li>
                                    <li>
                                        <label class="email">Email</label>
                                        <input style="margin: 10px 0;" type="text" name="email" class="youremail txt corner-input" onfocus="checkerror(this)" onblur="var v = $(this).val(); $('.youremail_val').html(v);">
                                        <div class="youremail_val" style="display:none"></div>
                                    </li>
                                    <li>
                                        <label class="message">Message</label>
                                        <textarea name="message" class="yourmessage textarea message corner-input" rows=20 cols=30 onfocus="checkerror(this)" onblur="var v = $(this).val(); $('.yourmessage_val').html(v);"></textarea>
                                        <div class="yourmessage_val" style="display:none"></div>
                                    </li>
	                                <li>
	                                    <a id="send-comment" href="javascript:;" onclick="sendemail($(this),'gniottechclub@gniot.net.in', 'Email from GNIOT-TechClub', 'Please enter a valid Name', 'Please enter a valid Email', 'Please enter a valid Message', 'Email sent successfully', 'An error has occurred')" class="submit">SEND EMAIL</a>
	                                </li>
	                            </ul>
	                        </form>
	                    </div>
						<!-- End Contact Form -->
	                </div>
	            </div>
				<!-- Begin Contact Description -->
				<br/>
	            <div class="four columns">
	                <h4><i class='fa fa-map-marker text_color' style='color: #10b9b9;font-size: 18px;'></i> Contact Information</h4>
	                <br/>
	                <p>GNIOT, Knowledge Park-2,
	                    <br />Greater Noida, India</p>
	                    <p><strong>Email:</strong> gniottechclub@gniot.net.in
	                    <br />
	                    <strong>Phone:</strong>+91-97162 58568
	                    <br />+91-97166 70658</p>
	                <br/>    
					<!-- Begin Contact Social -->
	                <div class='socialdiv'>
	                    <ul>
	                        <li>
	                            <a href="https://www.facebook.com/GNIOTtechClub" target='_blank' class='facebook' title='Facebook'></a>
	                        </li>
                            <li>
                                <a href="https://plus.google.com/u/0/116512282233977078770/posts/p/pub" target="_blank" class="google" title="google+"></a>
                            </li>
	                    </ul>
	                </div>
					<!-- End Contact Social -->
	            </div>
				<!-- End Contact Description -->
	        </div>
	    </div>
		<div class="white-space"></div>
				        
		<!-- BEGIN: BREADCRUMBS -->
	 	<div class="breadcrumbs-container"> 
			<div class="entry-breadcrumb no-flicker" style="border: none;"> 
				<p>You are here: <a href="index.php">Home</a><span class="delimiter"> &raquo; </span>Contact Us</p>
			</div>	    		  
		</div>
		
		<!-- BEGIN: BACK-TO-TOP BUTTON -->			
		<div id="back-to-top"><a href="javascript:;"></a></div>
<?php require'footer.php'; ?>