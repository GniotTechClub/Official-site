<?php require'header.php'; ?>

	    <!-- PAGE TITLE -->
    <!-- Put your image here on the "style" -->
    <div class="fullwidth-container image" style="background: url(img/preview_images/top-about.jpg);">
        <div class="parallax-overlay parallax-overlay-pattern"></div>
        <div class="container">

            <div class="pageTitle sixteen columns">
                <h1 class="page_title">TechSparks</h1>
                <h2 class="secondaryTitle"></h2>
            </div>
        </div>
    </div>
	    
	    <!-- START: FULL CONTENT -->	
		<div class="entry-content">

            <div class="container">
                <!-- Begin Flexslider -->
                <div class="main_cols container">
                    <div class="sixteen column">
                        <div id="myslider-2" class="flexslider clearfix" style="max-height:300px;">
                            <!-- Begin Flexslider Items -->
                            <ul class="slides">
                                <!-- Begin Flexslider Item 1 -->
                                <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/Flex1.jpg' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 1 -->
                                <!-- Begin Flexslider Item 2 -->
                                <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/Poster2.JPG' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 2 -->
                                <!-- Begin Flexslider Item 3 -->
                                <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/poster002.jpg' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 3 -->
                            </ul>
                            <!-- End Flexslider Items -->
                        </div>
                        <script type="text/javascript">
                            jQuery(document).ready(function ($) {
                                $('#myslider-2').flexslider({
                                    animation: "fade",
                                    slideDirection: "vertical",
                                    directionNav: true,
                                    slideshowSpeed: 4500,
                                    controlsContainer: '#myslider-2 .flex-container',
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
                                        $("#myslider-2 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                            'opacity': 1
                                        }, 500);
                                    },
                                    after: function (slider) {
                                        $("#myslider-2").find(".flex-direction-nav").click(function () {
                                            window.location = $("#myslider-2 .slides li").eq(slider.currentSlide).children("a").attr("href");
                                        });
                                        $("#myslider-2 .slides li").find(".flex-caption").each(function () {
                                            $(this).css('opacity', 0);
                                            if ($(this).parent().hasClass('clone')) {} else {
                                                $(this).animate({
                                                    'opacity': 0
                                                }, 500);
                                            }
                                        });
                                        $("#myslider-2 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                            'opacity': 1
                                        }, 500);
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <!-- End Flexslider -->
            </div>


			<div class="container">

                <div class="white-space"></div>

                    <!-- Begin Some Text Containers-->
                    <div class="main_cols container">
                        <!-- Begin Some Text Container column 1-->
                        <div class="one-third column">
                            <h2 class="zaptitle"><span>What we do?</span></h2>
                            <p>Techsparks is a  Inter college techno-event organized and conducted by GNIOT-Techclub.<br>
                                Via this event we connect with students and give them opportunity to explore themselves in technically.
                                Where they can use their own techniques in particular event to competewith others.
                                Students here get a great exposure. And hardwork without rewards doesn’t sounds good to the youth so we have prizes for winners.</p>
                        </div>
                        <!-- End Some Text Container column 1-->

                        <!-- Begin Some Text Container column 2-->
                        <!--<div class="one-third column">
                            <h2 class="zaptitle"><span>Our Approach</span></h2>
                            <p></p>
                        </div>-->
                        <!-- End Some Text Container column 2-->

                        <!-- Begin Some Text Container column 3-->
                        <div class="one-third column">
                            <h2 class="zaptitle"><span>Our main Event</span></h2>
                            <div class="shortcode-unorderedlist" data-rel="#10b9b9">
                                <ul>
                                    <li><i class="fa fa-check-circle-o"></i>Code Hunt</li>
                                    <li><i class="fa fa-check-circle-o"></i>Battle Bots</li>
                                    <li><i class="fa fa-check-circle-o"></i>Bright Sparks</li>
                                    <li><i class="fa fa-check-circle-o"></i>Circuit Debugging</li>
                                    <li><i class="fa fa-check-circle-o"></i>Debate</li>
                                    <li><i class="fa fa-check-circle-o"></i>Tech-x-ploring</li>
                                    <li><i class="fa fa-check-circle-o"></i>Debug</li>
                                    <li><i class="fa fa-check-circle-o"></i>An app idea!</li></br>
                                    <li><i class="fa fa-check-circle-o"></i>Workshop</li>
                                    <li><i class="fa fa-check-circle-o"></i>Lan Gaming</li>
                                    <li><i class="fa fa-check-circle-o"></i>Bridge Building</li>
                                    <li><i class="fa fa-check-circle-o"></i>Photomania</li>
                                    <li><i class="fa fa-check-circle-o"></i>Extempore</li>
                                    <li><i class="fa fa-check-circle-o"></i>IQ sector</li>
                                    <li><i class="fa fa-check-circle-o"></i>Presentation</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Some Text Container column 3-->
                    </div>

                    <div class="white-space"></div>
		    	
		    	<!-- BEGIN: PROJECTS STYLE 1 + SCROLLER -->
	            <section id="lastprojects3-17" class="home_widget recentProjects3">
	                <div class="projects_container_proj sixteen columns">
	                    <div class="zaptitle page_title_s3">
	                    	<span class="page_info_title_s3">Our Events</span>
	                        <!-- BEGIN Slides Arrows -->
	                        <div class="pag-proj2_s3">
	                            <div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal"></div>
	                            <div class="goto_projects" onclick="window.location = '#';" title="View All Projects"></div>
	                            <div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal"></div>
	                        </div>
	                        <!-- END Slides Arrows -->
	                    </div>
	                    
	                    <!-- PROJECTS S3 -->
	                    <div class="project_list_s3">
	                        <ul class="slides_container jcarousel-skin-tango">
	                            
	                            <!-- PROJECT #01 -->
	                            <li data-rel='link' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/code_hunt.png" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/code_hunt.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Code Hunt</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>The participant should make their code so that they can acheived a given result.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #02 -->
	                            <li data-rel='none' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/battlebots.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/battlebots.jpg"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Battle Bots</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>The race was conducted between the robots.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #03 -->
	                            <li data-rel='link' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/ckt_debugging.png" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/ckt_debugging.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Circuit Debbuging</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Participants have to answer the question related to circuit.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #04 -->
	                            <li data-rel='link_magnifier' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/debug.png" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/debug.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Debug</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>The participant have to find the error in peice of code.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #05 -->
	                            <li class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/photomania.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/photomania.jpg"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Photomania</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Participants click the images through out the event.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #06 -->
	                            <li class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/powerpoint.png" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/powerpoint.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Powerpoint Presentation</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Participant have to give presentation on certain topics.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #07 -->
	                            <li data-rel='link' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/langame.gif" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/langame.gif"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Lan Gaming</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Our Lan Gaming include CS and NFS Most Wanted.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
	                            
	                            <!-- PROJECT #08 -->
	                            <li data-rel='link_magnifier' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                <a href="#">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/science_exhibition.jpg" />
	                                                </a>
	                                                <a class="flex_this_thumb" href="img/techsparks/science_exhibition.jpg"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a href="">Tech-Explore</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Participants have to demonstrate their working model.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
                                <!-- PROJECT #08 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <a href="#">
                                                        <img class="img_thumb" alt="" src="img/techsparks/bbuilding.jpg" />
                                                    </a>
                                                    <a class="flex_this_thumb" href="img/techsparks/bbuilding.jpg"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a href="">Bridge Building</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Participants have to build a toughest bridge using ice-cream sticks and glue. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #08 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <a href="#">
                                                        <img class="img_thumb" alt="" src="img/techsparks/quiz.jpg" />
                                                    </a>
                                                    <a class="flex_this_thumb" href="img/techsparks/quiz.jpg"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a href="">Bright Sparks</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Its a type of quiz.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
	                        </ul>
	                    </div>
	                    <!-- PROJECTS S3 -->
	                </div>
	                <script>
	                    jQuery(document).ready(function () {
	                        jQuery('#lastprojects3-17 .slides_container').parent().carousel({
	                            dispItems: 1
	                        });
	                    });
	                </script>
	                <div class="clear"></div>
	            </section>
	            <!-- END: PROJECTS STYLE 1 + SCROLLER -->
	            
	            <div class="white-space"></div>

	            <!-- BEGIN: PROJECTS STYLE 2 NO-SCROLLER -->
	            <section id="lastprojects4-20" class="home_widget recentProjects4">
	                <div class="projects_container_s4">
	                    <div class="page_title_s4 sixteen columns a-left">
	                    	<span class="page_info_title_s4">Event Gallery</span>
	                    </div>
	                    <div class="project_list_s4">
	                        <ul class="slides_container jcarousel-skin-tango">
	                            <div class="projs_row">
	                                
	                                <!-- PROJECT #01 -->
	                                <div class="indproj2  one-third column">
	                                    <ul class="da-thumbs da-recent-projs">
	                                        <li>
	                                            <a class="noscroll" href="#">
	                                                <div class="slides_item post-thumb">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/8.JPG" />
	                                                </div>
	                                            </a>
	                                            <a class="pp-link" style="display:none;" href="img/techsparks/8.JPG"></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                                
	                                <!-- PROJECT #02 -->
	                                <div class="indproj2  one-third column">
	                                    <ul class="da-thumbs da-recent-projs">
	                                        <li>
	                                            <a class="noscroll" href="#">
	                                                <div class="slides_item post-thumb">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/7.JPG" />
	                                                </div>
	                                            </a>
	                                            <a class="pp-link" style="display:none;" href="img/techsparks/7.JPG"></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                                
	                                <!-- PROJECT #03 -->
	                                <div class="indproj2  one-third column">
	                                    <ul class="da-thumbs da-recent-projs">
	                                        <li>
	                                            <a class="noscroll" href="#">
	                                                <div class="slides_item post-thumb">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/1.JPG" />
	                                                </div>
	                                            </a>
	                                            <a class="pp-link" style="display:none;" href="img/techsparks/1.JPG"></a>
	                                        </li>
	                                    </ul>
	                                </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/2.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/2.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/3.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/3.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/4.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/4.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/5.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/5.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/6.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/6.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>
	                            </div>
	                        </ul>
	                    </div>
	                </div>
	                <script type="text/javascript">
	                    jQuery(function ($) {
	                        $('#lastprojects4-20 .da-thumbs > li > a > .post-thumb').hoverdir();
	                    });
	                </script>
	                <div class="clear"></div>
	            </section>
	        </div>
	     </div>
	     <!-- END: FULL CONTENT -->
	     <div class="white-space"></div>
	     <div class="white-space"></div>
	     
		<!-- BEGIN: BREADCRUMBS -->
	 	<div class="breadcrumbs-container"> 
			<div class="entry-breadcrumb no-flicker" style="border: none;"> 
				<p>You are here: <a href="index.php">Home</a><span class="delimiter"> &raquo; </span>TechSparks</p>
			</div>	    		  
		</div>
		
		<!-- BEGIN: BACK-TO-TOP BUTTON -->			
		<div id="back-to-top"><a href="javascript:;"></a></div>
		
<?php require'footer.php'; ?>