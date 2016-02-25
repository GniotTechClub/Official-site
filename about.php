<?php require'header.php'; ?>

	<!-- PAGE TITLE -->
	<!-- Put your image here on the "style" -->
	<div class="fullwidth-container image" style="background: url(img/preview_images/top-about.jpg);">
		<div class="parallax-overlay parallax-overlay-pattern"></div>
		<div class="container">

        	<div class="pageTitle sixteen columns">
            	<h1 class="page_title">About us</h1>
                <h2 class="secondaryTitle">Know more about us and our club.</h2>
            </div>
        </div>
    </div>
        
    <!-- START: FULL CONTENT -->	
	<div class="entry-content">

        <!-- BEGIN: WELCOME SECTION -->
        <div class="container">
        	
        	<!-- BEGIN: EIGHT COLUMNS -->
        	<div class="eight columns">
            	
            	<!-- Begin Text -->
				<h1>Welcome to <span class="text_color">GNIOT-TechClub.</span></h1>
                <br/>
                <p>GNIOT TechClub is the first ever Official Tech Club of Greater Noida Institute of Technology. This Club is established as a direct result of growing interest of students in technical field.
                    It has proved to be an immaculate representation of the passion that the budding engineers of GNIOT have for technology. The organizing committee of the GNIOT TechClub creates memorable moments for all. The club got an overwhelming response from students. The Club's objective is to provide a platform to students to develop and showcase technical prowess.</p>
				
				<br/>
				<div class="main_cols container">
					
					<!-- Begin Numerical Increment 1 - ONE THIRD COLUM -->
                    <div class="one-third column">
                        <div>
                            <div class="numericals">
                                <script type="text/javascript">
                                    var today = new Date();
                                    jQuery(window).load(function () {
                                        if (isScrolledIntoView("numerical-4")) {
                                            jQuery('#numerical-4').removeClass('notinview');
                                            incrementNumerical('#numerical-4', '+today.getHours()+', 5);
                                        }
                                    });
                                    jQuery(window).scroll(function () {
                                        if (jQuery('#numerical-4.notinview').length) {
                                            if (isScrolledIntoView("numerical-4")) {
                                                jQuery('#numerical-4').removeClass('notinview');
                                                incrementNumerical('#numerical-4','+today.getHours()+', 5);
                                            }
                                        }
                                    });
                                </script>
                                <div class="numerical-container">
                                    <div id="numerical-4" class="notinview">
                                        <div style="font-size:40px;" class="value left colored">0</div>
                                    </div>
                                    <div class="numerical-content left" style="line-height:.2px;">Hours of work</div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--End Numerical Increment 1 -->
					
					<!--Begin Numerical Increment 2 - ONE THIRD COLUM -->
                    <div class="one-third column">
                        <div>
                            <div class="numericals">
                                <script type="text/javascript">
                                    jQuery(window).load(function () {
                                        if (isScrolledIntoView("numerical-5")) {
                                            jQuery('#numerical-5').removeClass('notinview');
                                            incrementNumerical('#numerical-5', 10, 1);
                                        }
                                    });
                                    jQuery(window).scroll(function () {
                                        if (jQuery('#numerical-5.notinview').length) {
                                            if (isScrolledIntoView("numerical-5")) {
                                                jQuery('#numerical-5').removeClass('notinview');
                                                incrementNumerical('#numerical-5', 10, 1);
                                            }
                                        }
                                    });
                                </script>
                                <div class="numerical-container">
                                    <div id="numerical-5" class="notinview">
                                        <div style="font-size:40px;" class="value left">0</div>
                                    </div>
                                    <div class="numerical-content left" style="line-height:.2px;">Club Successfull Months</div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--End Numerical Increment 2 -->
					
					<!--Begin Numerical Increment 3 - ONE THIRD COLUM -->
                    <div class="one-third column">
                        <div>
                            <div class="numericals">
                                <script type="text/javascript">
                                    jQuery(window).load(function () {
                                        if (isScrolledIntoView("numerical-6")) {
                                            jQuery('#numerical-6').removeClass('notinview');
                                            incrementNumerical('#numerical-6', 180, 1);
                                        }
                                    });
                                    jQuery(window).scroll(function () {
                                        if (jQuery('#numerical-6.notinview').length) {
                                            if (isScrolledIntoView("numerical-6")) {
                                                jQuery('#numerical-6').removeClass('notinview');
                                                incrementNumerical('#numerical-6', 180, 1);
                                            }
                                        }
                                    });
                                </script>
                                <div class="numerical-container">
                                    <div id="numerical-6" class="notinview">
                                        <div style="font-size:40px;" class="value left">0</div>
                                    </div>
                                    <div class="numerical-content left" style="line-height:.2px;">Team members</div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--End Numerical Increment 3 -->
                </div>
                <!-- END: INCREMENTS CONTAINER -->
           </div>
           <!-- END: EIGHT COLUMNS -->

           <!-- BEGIN: EIGHT COLUMNS -->
           <div class="eight columns">
                                    
                <!-- Begin Flexslider -->
				<div id="myslider-1" class="flexslider clearfix" style="max-height:300px;">
                    <ul class="slides">
					 	<!-- Begin Flexslider Image 1 -->
                        <li>
                            <a href='javascript:;'>
                                <img src='img/preview_images/about-1.jpg' alt=''>
                            </a>
                        </li>
						<!-- End -->
						<!-- Begin Flexslider Image 2 -->
                        <li>
                            <a href='javascript:;'>
                                <img src='img/preview_images/about-2.jpg' alt=''>
                            </a>
                        </li>
						<!-- End -->
						<!-- Begin Flexslider Image 3 -->
                        <li>
                            <a href='javascript:;'>
                                <img src='img/preview_images/about-3.jpg' alt=''>
                            </a>
                        </li>
						<!-- End -->
                    </ul>
                </div>
				<!-- End Flexslider -->
				
				<!-- Begin Flexslider script -->
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $('#myslider-1').flexslider({
                            animation: "fade",
                            slideDirection: "vertical",
                            directionNav: true,
                            slideshowSpeed: 4500,
                            controlsContainer: '#myslider-1 .flex-container',
                            pauseOnAction: false,
                            pauseOnHover: true,
                            keyboardNav: false,
                            controlNav: true,
                            start: function (slider) {
                                $(slider).find('li').each(function () {
                                    if ($(this).children('a').href != "javascript:;") {
                                        $(this).children('a').children('img').click(function () {
                                            window.location = $(this).parent('a').attr('href');
                                            $(this).parent('a').attr('href', 'javascript:;');
                                        });
                                    }
                                });
                                $("#myslider-1 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                    'opacity': 1
                                }, 500);
                            },
                            after: function (slider) {
                                $("#myslider-1").find(".flex-direction-nav").click(function () {
                                    window.location = $("#myslider-1 .slides li").eq(slider.currentSlide).children("a").attr("href");
                                });
                                $("#myslider-1 .slides li").find(".flex-caption").each(function () {
                                    $(this).css('opacity', 0);
                                    if ($(this).parent().hasClass('clone')) {} else {
                                        $(this).animate({
                                            'opacity': 0
                                        }, 500);
                                    }
                                });
                                $("#myslider-1 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                    'opacity': 1
                                }, 500);
                            }
                        });
                    });
                </script>
				<!-- End Flexslider script -->
            </div>
            <!-- END: EIGHT COLUMNS -->
        </div>
        <!-- END: WELCOME SECTION -->
        
        <div class="white-space"></div>
        
        <div class="des-sc-dots-divider"></div>
        
        <div class="white-space"></div>
        
        <!-- BEGIN: TEAM SECTION -->
        <div class="container">
          <section id="team-2" class="shortcode-team sixteen columns">
            <!-- Team title-->
            <h2 class="team_header zaptitle" style="min-height:20px;"><span>Meet the Team</span></h2>
              <!-- Begin Team Member Row 2-->
              <div class='team-row 3' style="margin-top: 20px;">
                  <div class='team-member one-third column'>
                      <div class='teamimg'>
                          <img class='scale-with-grid' alt='Dr. Alok Chauhan' title='Dr. Alok Chauhan' src='img/team/alok.jpg'>
                      </div>
                      <div class='team_content'>
                          <h4 class='member_name'>Dr. Alok Chauhan</h4>
                          <p><span class="text_color">Club Patron</span>
                          </p>
                          <hr />
                          <div class='socialdiv'>
                              <ul>
                                  <li><a href="" target='_blank' class='facebook' title='Facebook'></a></li>
                                  <li><a href="" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class='team-member one-third column' style="margin: 0 2%;">
                      <div class='teamimg'>
                          <img class='scale-with-grid' alt='Dr.Rajesh Pathak' title='Dr.Rajesh Pathak' src='img/team/rajesh.jpg'>
                      </div>
                      <div class='team_content'>
                          <h4 class='member_name'>Dr.Rajesh Pathak</h4>
                          <p><span class="text_color">Club In-charge</span>
                          </p>
                          <hr />
                          <div class='socialdiv'>
                              <ul>
                                  <li><a href="https://www.facebook.com/dr.rajesh.pathak" target='_blank' class='facebook' title='Facebook'></a></li>
                                  <li><a href="https://in.linkedin.com/pub/dr-rajesh-pathak/62/680/7b2" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Team Member Row 2-->
            <!-- Begin Team Member Row 1-->
            <div class='team-row 3'>
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Rajat Saini' title='Rajat Saini' src='img/team/rajat.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Rajat Saini</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Chief Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/rajat.saini.106" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://in.linkedin.com/pub/rajat-saini/ba/676/25a" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Suyash Srivastava' title='Suyash Srivastava' src='img/team/suyash.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Suyash Srivastava</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Chief Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/suyash.srivastava.5623" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://in.linkedin.com/pub/suyash-srivastava/9b/b1/44" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column omega' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Swapnil Srivastava' title='Swapnil Srivastava' src='img/team/swapnil.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Swapnil Srivastava</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/swapnil.xtremecool" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 1-->
            <!-- Begin Team Member Row 2-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Lakshaya Rastogi' title='Lakshaya Rastogi' src='img/team/lakshaya.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Lakshaya Rastogi</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/lakshaya.rastogi" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://in.linkedin.com/pub/lakshaya-rastogi/101/736/b68" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Sandeep Shahi' title='Sandeep Shahi' src='img/team/sandeep.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Sandeep Shahi</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/sandeep.klh" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Shashank Shekhar Srivastava' title='Shashank Shekhar Srivastava' src='img/team/shashank.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Shashank Shekhar Srivastava</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/shashank.ankush" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 2-->
            <!-- Begin Team Member Row 3-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Ujjwala Nagar' title='Ujjwala Nagar' src='img/team/ujjwala.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Ujjwala Nagar</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/ujjwala.nagar" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Shikhar' title='Shikhar' src='img/team/shikhar.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Shikhar</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100004957458872" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Himanshu Srivastava' title='Himanshu Srivastava' src='img/team/himanshu.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Himanshu Srivastava</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/himanshu.srivastava.3705157" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 3-->
            <!-- Begin Team Member Row 4-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Vikram Singh' title='Vikram Singh' src='img/team/vikram.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Vikram Singh</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/vikram.singh.7792" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Avinash Singh' title='Avinash Singh' src='img/team/avinash.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Avinash Singh</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100002473912663" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Shalini Upadhyay' title='Shalini Upadhyay' src='img/team/shalini.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Shalini Upadhyay</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/shalini.upadhyay.9" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 4-->
            <!-- Begin Team Member Row 5-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Sakshi Tripathi' title='Sakshi Tripathi' src='img/team/sakshi.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Sakshi Tripathi</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/sakshi.tripathi.7186" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Shruti Gupta' title='Shruti Gupta' src='img/team/shruti.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Shruti Gupta</h4>
                        <p><span class="text_color">Senior Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100005511467989" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Rishabh Singh' title='Rishabh Singh' src='img/team/rishabh.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Rishabh Singh</h4>
                        <p><span class="text_color">Senior Technical Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/rishabh.stalwart" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://in.linkedin.com/in/rishabhstalwart" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 5-->
            <!-- Begin Team Member Row 6-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Rajneesh Patwal' title='Rajneesh Patwal' src='img/team/rajneesh.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Rajneesh Patwal</h4>
                        <p><span class="text_color">Senior Technical Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/rphunts" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Vaibhav' title='Vaibhav' src='img/team/vaibhav.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Vaibhav</h4>
                        <p><span class="text_color">Senior Technical Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/vaibhav.rajvansh.5" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Rishabh Shukla' title='Rishabh Shukla' src='img/team/rishabhshu.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Rishabh Shukla</h4>
                        <p><span class="text_color">Senior Technical Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/rishabh.shukla.923" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 6-->
            <!-- Begin Team Member Row 7-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Pawan Kumar Pandey' title='Pawan Kumar Pandey' src='img/team/pawan.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Pawan Kumar Pandey</h4>
                        <p><span class="text_color">Senior Technical Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/pawan.pandey.52090008" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://in.linkedin.com/pub/pawan-pandey/101/805/672" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Sakshi Kulshrestha' title='Sakshi Kulshrestha' src='img/team/sakshikul.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Sakshi Kulshrestha</h4>
                        <p><span class="text_color">Associate Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/sakshi.kulshrestha.716" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Priyanka Prajapati' title='Priyanka Prajapati' src='img/team/priyanka.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Priyanka Prajapati</h4>
                        <p><span class="text_color">Associate Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/priyanka.prajapati.7330" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://in.linkedin.com/pub/priyanka-prajapati/101/735/355" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 7-->
            <!-- Begin Team Member Row 8-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Neha Shukla' title='Neha Shukla' src='img/team/neha.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Neha Shukla</h4>
                        <p><span class="text_color">Associate Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="#" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Jyoti Aggarwal' title='Jyoti Aggarwal' src='img/team/jyoti.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Jyoti Aggarwal</h4>
                        <p><span class="text_color">Associate Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="#" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Prerna' title='Prerna' src='img/team/prerna.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Prerna</h4>
                        <p><span class="text_color">Associate Co-ordinator</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="#" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Member Row 8-->
            <div class='clear'></div>
          </section>
        <!-- END: TEAM SECTION -->
        </div>

</div>

	<!-- BEGIN: BREADCRUMBS -->
 	<div class="breadcrumbs-container"> 
		<div class="entry-breadcrumb no-flicker" style="border: none;"> 
			<p>You are here: <a href="index.php">Home</a><span class="delimiter"> &raquo; </span>About Us</p>
		</div>	    		  
	</div>
	
	<!-- BEGIN: BACK-TO-TOP BUTTON -->			
	<div id="back-to-top"><a href="javascript:;"></a></div>
	
	
<?php require'footer.php';?>