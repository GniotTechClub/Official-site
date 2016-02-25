<?php require'header.php'; ?>

	    <!-- PAGE TITLE -->
    <!-- Put your image here on the "style" -->
    <div class="fullwidth-container image" style="background: url(img/preview_images/top-about.jpg);">
        <div class="parallax-overlay parallax-overlay-pattern"></div>
        <div class="container">

            <div class="pageTitle sixteen columns">
                <h1 class="page_title">TechSparks</h1>
                <h2 class="secondaryTitle">The Spark to Ignite!</h2>
            </div>
        </div>
    </div>
	    
	    <!-- START: FULL CONTENT -->	
		<div class="entry-content">

            <div class="container">
                <!-- Begin Flexslider -->
                <!--<div class="main_cols container">
                    <div class="sixteen column">
                        <div id="myslider-2" class="flexslider clearfix" style="max-height:300px;">
                            <!-- Begin Flexslider Items -->
                         <!--   <ul class="slides">
                                <!-- Begin Flexslider Item 1 -->
                         <!--       <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/Flex1.jpg' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 1 -->
                                <!-- Begin Flexslider Item 2 -->
                          <!--      <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/Poster2.JPG' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 2 -->
                                <!-- Begin Flexslider Item 3 -->
                           <!--     <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/poster002.jpg' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 3 -->
                         <!--   </ul>
                            <!-- End Flexslider Items -->
                        <!--</div>
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
           <!-- </div>


			<div class="container">

                <div class="white-space"></div>

                    <!-- Begin Some Text Containers-->
                    <div class="main_cols container">
                        <!-- Begin Some Text Container column 1-->
                        <div class="two-thirds column">

                            <!-- BEGIN: HORIZONTAL TABS -->
                            <div class='zaptitle'><span>We are Techie!!!</span>
                            </div>
                            <div id="tabs" class="shortcode-tabs default">
                                <ul class="tabs" id="tabslist">
                                    <li onclick="changeTab(this);"><a href="javascript:;"><i class='fa fa-check-circle-o'></i>Innovate</a></li>
                                    <li onclick="changeTab(this);"><a href="javascript:;">Ignite</a></li>
                                    <li onclick="changeTab(this);"><a href="javascript:;">Impel</a></li>
                                </ul>
                                <div class="panes">

                                    <!-- TAB #01 -->
                                    <div>
                                        <!-- SMALL FONT AWESOME ICONS -->
                                        <div id='service-43' class='shortcode-services default'>
                                            <!-- row#01 -->
                                            <ul class='service-items smallicons  itemsPerRow-3'>
                                                <li class='service-item no-flicker'>
                                                    <p class='designare_icon'><i style='color: #10b9b9;' class='fa fa-heart' title='Awesome WP Theme'></i>
                                                    <p class='item-title' style='color: #10b9b9;'>We know you</p>
                                                    <p class='item-desc'>Passionate about technology but don't know how to bring that out?</p>
                                                </li>
                                                <li class='service-item no-flicker'>
                                                    <p class='designare_icon'><i style='color: #444444;' class='fa fa-cog' title='Strong Admin Panel'></i>
                                                    <p class='item-title'>We invite you</p>
                                                    <p class='item-desc'>Don't feel lost. We are always here waiting for you with open arms. It's feels good to have a BIG family.</p>
                                                </li>
                                                <li class='service-item no-flicker'>
                                                    <p class='designare_icon'><i style='color: #444444;' class='fa fa-clock-o' title='Setup in Minutes'></i>
                                                    <p class='item-title'>We connect with you</p>
                                                    <p class='item-desc'>You're fortunate when you share a family with people who can relate with your ideas. Reach out to us.</p>
                                                </li>
                                            </ul>


                                        </div>
                                    </div>

                                    <!-- TAB #02 -->
                                    <div>
                                        <!-- SMALL FONT AWESOME ICONS -->
                                        <div id='service-43' class='shortcode-services default'>
                                            <!-- row#01 -->
                                            <ul class='service-items smallicons  itemsPerRow-3'>
                                                <li class='service-item no-flicker'>
                                                    <p class='designare_icon'><i style='color: #10b9b9;' class='fa fa-thumbs-o-up' title='Awesome WP Theme'></i>
                                                    <p class='item-title' style='color: #10b9b9;'>We are back! </p>
                                                    <p class='item-desc'>Drumroll please. We present before you the much awaited technical fest of the year TECHSPARKS #15 !!</p>
                                                </li>
                                                <li class='service-item no-flicker'>
                                                    <p class='designare_icon'><i style='color: #444444;' class='fa fa-check' title='Strong Admin Panel'></i>
                                                    <p class='item-title'>What's new?</p>
                                                    <p class='item-desc'>Everything you wished for!  You barely have the time to catch a breath this time. That's our promise!</p>
                                                </li>
                                                <li class='service-item no-flicker'>
                                                    <p class='designare_icon'><i style='color: #444444;' class='fa fa-clock-o' title='Setup in Minutes'></i>
                                                    <p class='item-title'>Why the wait?</p>
                                                    <p class='item-desc'>TECHSPARKS #15 has already got people talking. What are you still thinking? Stop! Start acting!</p>
                                                </li>
                                            </ul>


                                        </div>
                                    </div>

                                    <!-- TAB #03 -->
                                    <div>
                                        <p>Forecasting the future of technology is for dreamers who hope to innovate better tools and for the mainstream people who hope to benefit from the new and improved.
                                            Thinking on similar note, if "what after TECHSPARKS #15?" bothers you, then just know that we don't always need reasons, we just need excuses to connect with you. More events are on the way.
                                            Or maybe you got something? Don't shy away. Share it with us. We treasure not just talents and skills but everything that is good. We are always open to suggestions, learning and to changing viewpoints.
                                            Be it anything! Till then think as far as building your own futuristic time machine or maybe of evolving telepathy as the ultimate means of future communication.
                                            <br />
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!-- END: HORIZONTAL TABS -->
                        </div>

                        <!-- BEGIN: SLIDING GRAPHS -->
                        <div class="one-third column">
                            <h2 class="zaptitle"><span>We are Strong!</span></h2>

                            <ul id="services-graph-6" class="services-graph notinview">
                                <li><span title="98"></span>
                                    <p><strong>98%</strong> WordPress</p>
                                </li>
                                <li><span title="88"></span>
                                    <p><strong>88%</strong> Html &amp; CSS</p>
                                </li>
                                <li><span title="95"></span>
                                    <p><strong>95%</strong> Javascript</p>
                                </li>
                                <li><span title="90"></span>
                                    <p><strong>90%</strong> Photoshop</p>
                                </li>
                                <li><span title="60"></span>
                                    <p><strong>60%</strong> Illustrator</p>
                                </li>
                                <li><span title="60"></span>
                                    <p><strong>94%</strong> Blender</p>
                                </li>
                            </ul>
                            <script type="text/javascript">
                                jQuery(document).ready(function ($) {
                                    graph_init("services-graph-6", 1000);
                                });
                            </script>
                        </div>
                        <!-- END: SLIDING GRAPHS -->
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
	                                                    <img class="img_thumb" alt="" src="img/techsparks/code_hunt.png" />
	                                                <a class="flex_this_thumb" href="img/techsparks/code_hunt.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Code Hunt</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>A call for all code enthusiasts to beat their brains and put out something that executes well. </p>
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

	                                                    <img class="img_thumb" alt="" src="img/tech15/robotics-logo2.png" />

	                                                <a class="flex_this_thumb" href="img/tech15/robotics-logo2.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Robotics</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Is Optimus Prime your Robo-God? Ever dreamt of building one? Begin right here!</p>
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
	                                                    <img class="img_thumb" alt="" src="img/tech15/circuit-surgeoj.png" />
	                                                <a class="flex_this_thumb" href="img/tech15/circuit-surgeoj.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Circuit Surgeon</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Take a look, sit, brainstorm and prove your mettle by designing an exceptional circuit. </p>
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
	                                                    <img class="img_thumb" alt="" src="img/tech15/debugging.png" />
	                                                <a class="flex_this_thumb" href="img/tech15/debugging.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Debug</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Got a keen eye for bugs in programs? You’re at no ease unless the code works deftly.</p>
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
	                                                    <img class="img_thumb" alt="" src="img/tech15/camera-logo.png" />
	                                                <a class="flex_this_thumb" href="img/tech15/camera-logo.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Photomania</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>We’d love to see what your eyes capture making it through the camera lens. Motivated? Go ahead.</p>
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
	                                                    <img class="img_thumb" alt="" src="img/tech15/PRESENTATION2.png" />
	                                                <a class="flex_this_thumb" href="img/tech15/PRESENTATION2.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Project Presentation</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>It might sound customary but why not try incorporating your ideas in a slideshow? </p>
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
	                                                    <img class="img_thumb" alt="" src="img/tech15/lan.png" />
	                                                <a class="flex_this_thumb" href="img/tech15/lan.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Lan Thrash</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Do bullet shots and raging cars invoke the fierce in you?  Just settle it on computer screen.</p>
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
	                                                    <img class="img_thumb" alt="" src="img/tech15/paper-glider.png" />
	                                                <a class="flex_this_thumb" href="img/tech15/paper-glider.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Paper Glider</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>How far can you flick and fly your paper plane? To the moon and back? Try it!</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
                                <!-- PROJECT #09 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech15/bbuilding.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/bbuilding.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Bridge Building</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Shout out to all those intrigued by organizational structures and their stability. Respond now.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #10 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech15/QUIZ.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/QUIZ.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Quiz</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Here’s the deal. A questionnaire dropped and your brain knows it all?  The price is yours then!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #11 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech15/IDEA-FOR-CHANGE.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/IDEA-FOR-CHANGE.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>AN IDEA FOR CHANGE</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Quintessential ideas transform the world. Got more? Bring it on. We’re waiting.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #12 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech15/extempore.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/extempore.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Extempore</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Ideas collide? Got a moment? Let your views reach the audience straight on point.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #13 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/RJHNT.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/RJHNT.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>RJ Hunt</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>You’re not talkative, you just LOVE to interact. Right? Then why not show us more of you?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #14 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/backtrack.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/backtrack.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Back Track</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Got more brains to re-code for an output you see on screen? Aha, here you go.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #15 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/DEBATE.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/DEBATE.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Debate</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>A Speech with flair and flamboyance is enough to win war with words. Sharpen your weapons!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #16 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/MOMEMTUM1.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/MOMEMTUM1.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Momentum</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>A Water rocket, a set angle, aim for maximum distance. Boom! You win this.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #17 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/IQSECTOR.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/IQSECTOR.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>IQ Sector</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>The battle-ground to test intelligence. If you are fearless, try setting your feet on it.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #18 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/mocktest.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/mocktest.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Mock Test</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Been an overachiever but never rewarded? We feel you, right here.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #19 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/spell-bee.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/spell-bee.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Spell Bee</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Are you a spelling freak? Derek O’Brien fan? Set your eyes on being the new ’Spell Bee’.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- PROJECT #20 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech15/t-shirt.png" />
                                                    <a class="flex_this_thumb" href="img/tech15/t-shirt.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>T-Shirt Designing</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Pour in something you call “out of the box”. Let it be on T-shirts this time.</p>
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
                <div class="entry-content">
                    <div class="container">
                        <div class="zaptitle page_title_s3">
                            <span class="page_info_title_s3">Event Details &amp; Info</span>
                        </div>

                        <!-- BEGIN: DESIGNARE VERTICAL TABS -->
                        <section class='special_tabs'>

                            <!-- BEGIN: SECTION #01 -->
                            <div class='label 1'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-desktop'></i>
                                </div><span class='tab_title'>Coding Events</span>
                            </div>
                            <div class='content 1'>
                                <h1 class="aligncenter">Coding Events</h1>
                                <ul>
                                    <li> <b> 1. CODE HUNT  </b><br>
                                        1. There will be three levels:<br>
                                        a) LEVEL 1  :  There will be 15 questions and the time for completion will be 15 mins.<br>
                                        b) LEVEL 2 : There will be 10 questions and the time for completion will be 10 mins.<br>
                                        c) LEVEL 3 : There will be 7 questions and the time for completion will be 7 mins.<br>
                                        2. There is only 10 mins break after every level.<br>
                                        3. Only those who will qualify level 1 will be allowed to next level and so on.<br>
                                        4. Electronic items is not allowed.<br>
                                        5. Participant should bring their registration receipt.<br>
                                    </li><br>

                                    <li><b> 2. DEBUGGING</b><br>
                                    1.	There will be three levels:<br>
                                    a)	Level 1 – multiple choice question<br>
                                    b)	Level 2 – error  detection<br>
                                    c)	Level 3 – output of the program<br>
                                    2.	There will only be 10 minutes break after every level.<br>
                                    3.	Only those who will qualify in level 1 will be allowed for the next level and so on.<br>
                                    4.	Electronic items are not allowed<br>
                                    5.	Participants should bring their laptops<br>
                                    </li><br>

                                    <li><b> 3. BACKTRACK</b><br>
                                        1. Only solo participation is allowed.<br>
                                        2.  Each participant will be provided four different set of rough source codes out of which the participant will have to choose any 2 codes randomly but later on decide upon only one for which he/she will have to write the alternate source code.<br>
                                        3. Conditions for writing the alternate source code-<br>
                                        a)	Duration is of 20 to 30 minutes.<br>
                                        b)	The alternate source must be different from the given source code.<br>
                                        c)	The output must be same.<br>
                                        4. Participants have to bring their laptops (those who do not have will be provided with desktops).<br>
                                    </li><br>
                                </ul>
                                <br/>

                            </div>

                            <!-- BEGIN: SECTION #02 -->
                            <div class='label 2'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-cog'></i></div>
                                <span class='tab_title'>Electronic/Electrical Events</span>
                            </div>

                            <div class='content 2'>
                                <h1 class="aligncenter">Electronic/Electrical Events</h1>

                            </div>

                            <!-- BEGIN: SECTION #03 -->
                            <div class='label 3'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-gift'></i></div>
                                <span class='tab_title'>Mechanical Events</span>
                            </div>

                            <div class='content 3'>
                                <h1 class="aligncenter">Mechanical Events</h1>
                                <ul>
                                    <li><b>	MOMENTUM </b><br>
                                        1.	Each team will consist a maximum of three members. Members can be from different institutions.<br>
                                        2.	Teams will be provided with the launch pad and air compressor by the event organizers.<br>
                                        3.	Participating team will be disqualified if any damage occurs to the launch pad provided by the event organizers.<br>
                                        4.	Only one chance will be given to each team in each round.<br>
                                        5.	Participating team will be disqualified if any part of the rocket gets detached (except for the multi-stage system) during launch till the entire flight touches the ground.<br>
                                        6.	Decision in the above rounds, their rules & regulations are bound to change as per the conditions*.<br>
                                        7.	The decision of event organizers will be final.<br>
                                        8.	Participants have to bring their rocket with them.<br>
                                    </li><br>
                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #04 -->
                            <div class='label 4'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-flask'></i></div>
                                <span class='tab_title'>Gaming Event</span>
                            </div>
                            <div class='content 4'>
                                <h1 class="aligncenter">Gaming Event</h1>

                            </div>

                            <!-- BEGIN: SECTION #05 -->
                            <div class='label 5'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-html5'></i></div>
                                <span class='tab_title'>Vocational Skill Events</span>
                            </div>
                            <div class='content 5'>
                                <h1 class="aligncenter">Vocational Skill Events</h1>
                                <br/>
                                <div>
                                    <ul>
                                        <li><b> 1. EXTEMPORE</b><br>
                                            1.	Only one participant is allowed.<br>
                                            2.	Participants will be given 3 minutes for preparation.<br>
                                            3.	Time for the final speech will be 5 minutes.<br>
                                            4.	The language should be strictly English.<br>
                                            5.	Topics will be current affairs and new technologies.<br>
                                            6.	Pick a slip from the bowl ,the participant is to speak on the same.<br>
                                            7.	Each participant has only two chances. Before choosing 2nd, one has to assure that they cannot switch back again.<br>
                                        </li><br>

                                        <li><b>	2. MOCK TEST</b><br>
                                            1.	The whole event will consist of three rounds-<br>
                                            Round 1- Aptitude Test (30 minutes)<br>
                                            Round 2- Group Discussion(30-45 minutes)<br>
                                            Round 3- Personal interview(30 minutes)<br>

                                            <b>Aptitude test </b>–<br>
                                            Three different set of question papers<br>
                                            20 questions in each set of question paper<br>
                                            OMR scheme evaluation<br>
                                            <b>Group discussion</b>-<br>
                                            2 minutes to think about the given topic.<br>
                                            Next 5 minutes for group discussion.<br>
                                            Next 2 minutes includes conclusions by each candidate of the respective groups .<br>
                                            <b>Personal interview</b>-<br>
                                                Evaluation will be purely done by the judges based on certain criteria.<br>
                                        </li><br>

                                        <li><b>	3. PROJECT PRESENTATION</b><br>
                                                1.	The presentation should be of 5 minutes.<br>
                                                2.	Maximum number of slide should be 10.<br>
                                                3.	The team members should not be more than 5.<br>
                                                4.	In case individual participation, one should come along with a helper to present the slides.<br>
                                                5.	The presentation should be in ppt.<br>
                                                6.	Hard copy is not allowed at the podium.<br>
                                                7.	There will a 1 minute question-answer after each presentation for every team.<br>
                                            </li><br>

                                        <li><b>	4. QUIZ </b><br>
                                                1.	There will three rounds.<br>
                                                2.	First round will be MCQ’s.<br>
                                                3.	Second round will also be MCQ based but each team will be provided with different set of questions.<br>
                                                4.	In second round only 1 participant will give the answer of the question after consulting with his team members.<br>
                                                5.	Third round will be rapid fire round.<br>
                                                6.	Every team can have a maximum of 4 members.<br>
                                            </li><br>
                                        <li><b> 5. DEBATE</b></br>
                                            1. There will be two speakers, one for and other against the motion.<br>
                                            2. Topics will be given 2 days prior to the event.<br>
                                            3. Time limit will be of 3 minutes, after 2 minutes, a buzzer will ring and after 1 minute the final buzzer will be rung.<br>
                                           	4. Content should be in English only.<br>
                                            5. Cross-questioning is allowed for 1-minute.<br>
                                            6. Judge/listeners can also cross-questioning you.<br>
                                        </li><br>
                                        <li><b> 6. RJ Hunt</b><br>
                                            1. Limited entries on first come first serve basis.<br>
                                            2. Time limit will be of 3-5 minutes.<br>
                                            3. Participants will be judged and then eliminated on the basis of two rounds.<br>
                                            3. Topics will be given on the spot.<br>
                                            4. Participants will be judged on the basis of fluency, spontaneity, presentation, sense of humor, communication skills and interaction with the listeners.<br>
                                            5. Only Hindi and English language should be used.<br>
                                            6. 'NO' personal comments, abusive or vulgar words shall be entertained.<br>
                                            6. Decision of the judges will be final.<br>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- BEGIN: SECTION #06 -->
                            <div class='label 6'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-adn'></i>
                                </div><span class='tab_title'>Designing Event</span>
                            </div>
                            <div class='content 6'>
                                <h1 class="aligncenter">Designing Event</h1>
                                <ul>
                                    <li>

                                    </li>
                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #07 -->
                            <div class='label 7'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-columns'></i></div>
                                <span class='tab_title'>Photography Event</span>
                            </div>
                            <div class='content 7'>
                                <h1 style="text-align: center;">Photography Event</h1>
                                
                            </div>
                        </section>
                        <!-- END: DESIGNARE VERTICAL TABS -->

                        <!-- BEGIN: DESIGNARE VERTICAL TABS SUBSTITUTE FOR MOBILE DEVICES-->
                        <div class="shortcode-accs acc-substitute default">

                            <!-- BEGIN: SECTION #01 -->
                            <div class="acc-title">
                                <h2><i class="fa fa-desktop"></i>Coding Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 class="aligncenter">Coding Events</h1>
                                <ul>
                                    <li> <b> 1. CODE HUNT  </b><br>
                                        1. There will be three levels:<br>
                                        a) LEVEL 1  :  There will be 15 questions and the time for completion will be 15 mins.<br>
                                        b) LEVEL 2 : There will be 10 questions and the time for completion will be 10 mins.<br>
                                        c) LEVEL 3 : There will be 7 questions and the time for completion will be 7 mins.<br>
                                        2. There is only 10 mins break after every level.<br>
                                        3. Only those who will qualify level 1 will be allowed to next level and so on.<br>
                                        4. Electronic items is not allowed.<br>
                                        5. Participant should bring their registration receipt.<br>
                                    </li><br>

                                    <li><b> 2. DEBUGGING</b><br>
                                        1.	There will be three levels:<br>
                                        a)	Level 1 – multiple choice question<br>
                                        b)	Level 2 – error  detection<br>
                                        c)	Level 3 – output of the program<br>
                                        2.	There will only be 10 minutes break after every level.<br>
                                        3.	Only those who will qualify in level 1 will be allowed for the next level and so on.<br>
                                        4.	Electronic items are not allowed<br>
                                        5.	Participants should bring their laptops<br>
                                    </li><br>

                                    <li><b> 3. BACKTRACK</b><br>
                                        1. Only solo participation is allowed.<br>
                                        2.  Each participant will be provided four different set of rough source codes out of which the participant will have to choose any 2 codes randomly but later on decide upon only one for which he/she will have to write the alternate source code.<br>
                                        3. Conditions for writing the alternate source code-<br>
                                        a)	Duration is of 20 to 30 minutes.<br>
                                        b)	The alternate source must be different from the given source code.<br>
                                        c)	The output must be same.<br>
                                        4. Participants have to bring their laptops (those who do not have will be provided with desktops).<br>
                                    </li><br>
                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #02 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-cog"></i>Electronic/Electrical Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 class="aligncenter">Electronic/Electrical Events</h1>

                            </div>

                            <!-- BEGIN: SECTION #03 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-gift"></i>Mechanical Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 class="aligncenter">Mechanical Events</h1>
                                <ul>
                                    <li><b>	MOMENTUM </b><br>
                                        1.	Each team will consist a maximum of three members. Members can be from different institutions.<br>
                                        2.	Teams will be provided with the launch pad and air compressor by the event organizers.<br>
                                        3.	Participating team will be disqualified if any damage occurs to the launch pad provided by the event organizers.<br>
                                        4.	Only one chance will be given to each team in each round.<br>
                                        5.	Participating team will be disqualified if any part of the rocket gets detached (except for the multi-stage system) during launch till the entire flight touches the ground.<br>
                                        6.	Decision in the above rounds, their rules & regulations are bound to change as per the conditions*.<br>
                                        7.	The decision of event organizers will be final.<br>
                                        8.	Participants have to bring their rocket with them.<br>
                                    </li><br>
                                </ul>

                            </div>

                            <!-- BEGIN: SECTION #04 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-beaker"></i>Gaming Event</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 style="text-align: center;">Gaming Event</h1>

                            </div>

                            <!-- BEGIN: SECTION #05 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;">Vocational Skill Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 style="text-align: center;">Vocational Skill Events</h1>
                                <ul>
                                    <li><b> 1. EXTEMPORE</b><br>
                                        1.	Only one participant is allowed.<br>
                                        2.	Participants will be given 3 minutes for preparation.<br>
                                        3.	Time for the final speech will be 5 minutes.<br>
                                        4.	The language should be strictly English.<br>
                                        5.	Topics will be current affairs and new technologies.<br>
                                        6.	Pick a slip from the bowl ,the participant is to speak on the same.<br>
                                        7.	Each participant has only two chances. Before choosing 2nd, one has to assure that they cannot switch back again.<br>
                                    </li><br>

                                    <li><b>	2. MOCK TEST</b><br>
                                        1.	The whole event will consist of three rounds-<br>
                                        Round 1- Aptitude Test (30 minutes)<br>
                                        Round 2- Group Discussion(30-45 minutes)<br>
                                        Round 3- Personal interview(30 minutes)<br>

                                        <b>Aptitude test </b>–<br>
                                        Three different set of question papers<br>
                                        20 questions in each set of question paper<br>
                                        OMR scheme evaluation<br>
                                        <b>Group discussion</b>-<br>
                                        2 minutes to think about the given topic.<br>
                                        Next 5 minutes for group discussion.<br>
                                        Next 2 minutes includes conclusions by each candidate of the respective groups .<br>
                                        <b>Personal interview</b>-<br>
                                        Evaluation will be purely done by the judges based on certain criteria.<br>
                                    </li><br>

                                    <li><b>	3. PROJECT PRESENTATION</b><br>
                                        1.	The presentation should be of 5 minutes.<br>
                                        2.	Maximum number of slide should be 10.<br>
                                        3.	The team members should not be more than 5.<br>
                                        4.	In case individual participation, one should come along with a helper to present the slides.<br>
                                        5.	The presentation should be in ppt.<br>
                                        6.	Hard copy is not allowed at the podium.<br>
                                        7.	There will a 1 minute question-answer after each presentation for every team.<br>
                                    </li><br>

                                    <li><b>	4. QUIZ </b><br>
                                        1.	There will three rounds.<br>
                                        2.	First round will be MCQ’s.<br>
                                        3.	Second round will also be MCQ based but each team will be provided with different set of questions.<br>
                                        4.	In second round only 1 participant will give the answer of the question after consulting with his team members.<br>
                                        5.	Third round will be rapid fire round.<br>
                                        6.	Every team can have a maximum of 4 members.<br>
                                    </li><br>
                                    <li><b> 5. DEBATE</b></br>
                                        1. There will be two speakers, one for and other against the motion.<br>
                                        2. Topics will be given 2 days prior to the event.<br>
                                        3. Time limit will be of 3 minutes, after 2 minutes, a buzzer will ring and after 1 minute the final buzzer will be rung.<br>
                                        4. Content should be in English only.<br>
                                        5. Cross-questioning is allowed for 1-minute.<br>
                                        6. Judge/listeners can also cross-questioning you.<br>
                                    </li><br>
                                    <li><b> 6. RJ Hunt</b><br>
                                        1. Limited entries on first come first serve basis.<br>
                                        2. Time limit will be of 3-5 minutes.<br>
                                        3. Participants will be judged and then eliminated on the basis of two rounds.<br>
                                        3. Topics will be given on the spot.<br>
                                        4. Participants will be judged on the basis of fluency, spontaneity, presentation, sense of humor, communication skills and interaction with the listeners.<br>
                                        5. Only Hindi and English language should be used.<br>
                                        6. 'NO' personal comments, abusive or vulgar words shall be entertained.<br>
                                        6. Decision of the judges will be final.<br>
                                    </li>
                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #06 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;" class=" ">Designing Event</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 class="aligncenter">Designing Event</h1>

                            </div>
                            <div class="acc-title">
                                <h2 style="cursor:pointer;" class=" ">Photography Event</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 style="text-align: center;">Photography Event</h1>

                            </div>
                        </div>
                        <!-- END: DESIGNARE VERTICAL TABS SUBSTITUTE FOR MOBILE DEVICES-->
                    </div>
                    <!--  end container -->
                </div>
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
	                                
	                                <!-- PROJECT #03 -->
	                                <div class="indproj2  one-third column">
	                                    <ul class="da-thumbs da-recent-projs">
	                                        <li>
	                                            <a class="noscroll">
	                                                <div class="slides_item post-thumb">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/15_1.png" />
	                                                </div>
	                                            </a>
	                                            <a class="pp-link" style="display:none;" href="img/techsparks/15_1.png"></a>
	                                        </li>
	                                    </ul>
	                                </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/15_2.jpg" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/15_2.jpg"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/15_3.jpg" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/15_3.jpg"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 -->
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/15_4.jpg" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/15_4.jpg"></a>
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