<?php require'header.php'; ?>

		<!-- BEGIN: REVOLUTION SLIDER
			 NOTE: PLEASE READ THE REV SLIDER DOCUMENTATION TO LEARN HOW TO WORK WITH THE SLIDER
		-->
		<div id="slider_container">
						
			<!-- REVOLUTION SLIDER 3.0.2 fullwidth mode -->			
			<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#f2f2f2;padding:0px;margin-top:0px;margin-bottom:0px;max-height:450px;">
				<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:450px;height:450;">						
					<ul>
						<!-- BEGIN: SLIDE #01 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
							
							<!-- BACKGROUND IMAGE -->
							<img src="img/preview_images/bg2.jpg" alt="" data-fullwidthcentering="on">
							
							<!-- CAPTION #01-->
							<div class="tp-caption sfb"
								data-x="439" 
								data-y="12"
								data-speed="2300" 
								data-start="500" 
								data-easing="easeInOutBack">
								<img src="img/preview_images/fly-kid.gif" alt="">
							</div>
							
							<!-- CAPTION #02-->
							<!--<div class="tp-caption lfb"
								data-x="365" 
								data-y="160"
								data-speed="1800" 
								data-start="1200" 
								data-easing="easeInOutQuint">
								<img src="img/preview_images/plain.png" alt="">
							</div>-->
							
							<!-- CAPTION #03-->
							<div class="tp-caption sfb"
								data-x="973" 
								data-y="143"
								data-speed="1300" 
								data-start="1500" 
								data-easing="easeInOutQuint">
								<img src="img/preview_images/atom.png" alt="">
							</div>
					
							<!-- CAPTION #04-->
							<!--<div class="tp-caption sfb"
								data-x="931" 
								data-y="179"
								data-speed="1300" 
								data-start="2000" 
								data-easing="easeInOutQuint">
								<img src="img/preview_images/ballon-blur.png" alt="">
							</div>-->
							
							<!-- CAPTION #05-->
							<div class="tp-caption medium_grey sfr"
								data-x="-2" 
								data-y="64"
								data-speed="1300" 
								data-start="2500" 
								data-easing="easeOutExpo">
								Commited to Technology!
							</div>
							
							<!-- CAPTION #06-->
							<div class="tp-caption big_white sfr"
								data-x="-2" 
								data-y="107"
								data-speed="1300" 
								data-start="3200" 
								data-easing="easeOutExpo">
								Commited to Engineering.
							</div>
				
						</li>
						<!-- END: SLIDE #01 -->
						
						<!-- BEGIN: SLIDE #03 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
							
							<!-- BACKGROUND IMAGE -->
							<img src="img/preview_images/slider-bg2.jpg"  alt="bg3"  data-fullwidthcentering="on">
							
							<!-- CAPTION #01 -->
							<div class="tp-caption sfr start"
								data-x="0" 
								data-y="125"
								data-speed="900"
								data-start="1100"
								data-easing="easeOutExpo" style="z-index: 9;">
								<img src="img/preview_images/c-caption.jpg" alt="Image 1">
							</div>
							
					        <!-- CAPTION #02 -->
					        <div class="tp-caption sfr start"
					        	data-x="0"
					        	data-y="175"
					        	data-speed="900"
					        	data-start="1400"
					        	data-easing="easeOutExpo">
					            <img src="img/preview_images/c-caption2.jpg" alt="Image 1">
					        </div>

					        <!-- CAPTION #05 -->
					        <div class="tp-caption lfb start"
					        	data-x="480" 
					        	data-y="44" 
					        	data-speed="600" 
					        	data-start="800" 
					        	data-easing="easeOutExpo">
					            <img src="img/preview_images/ipad-big.png" alt="Image 6">
					        </div>
								
							</li>
							
							
						<!-- BEGIN: SLIDE #04 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
							
							<!-- BACKGROUND IMAGE -->
							<img src="img/preview_images/bg4.jpg"  alt=""  data-fullwidthcentering="on">
							
							<!-- CAPTION #01-->
							<div class="tp-caption sfr"
								data-x="755" 
								data-y="7"
								data-speed="1300" 
								data-start="500" 
								data-easing="easeOutExpo">
								<img src="img/preview_images/raspi.png" alt="">					 					 							</div>
								
							<!-- CAPTION #02-->
							<div class="tp-caption sfr"
								data-x="653" 
								data-y="249"
								data-speed="1300" 
								data-start="800" 
								data-easing="easeOutExpo">
								<img src="img/preview_images/arduino_logo.png" alt="">					 					 							</div>
					
							<!-- CAPTION #03-->
							<div class="tp-caption very_big_white sfr"
								data-x="0" 
								data-y="78"
								data-speed="1300" 
								data-start="1100" 
								data-easing="easeOutExpo">
								Join the streak, <br>let's Innovate and<br>make things Better!!!
							</div>
							
							<!-- CAPTION #04-->
							<!--<div class="tp-caption small_text sfr"
								data-x="5" 
								data-y="221"
								data-speed="1300" 
								data-start="1400" 
								data-easing="easeOutExpo">
								Zap is ultra Responsive,including all premium sliders and every features you wish to use with it.
							</div>-->
					
							<!-- CAPTION #05-->
							<!--<div class="tp-caption lfr"
								data-x="3" 
								data-y="276"
								data-speed="1300" 
								data-start="1700" 
								data-easing="easeOutExpo">
								<a href='#' class='tp-button lightgrey small'>BUY THEME</a>
							</div>-->
						</li>
						<!-- END: SLIDE #03 -->						
					</ul>
					<!-- END: SLIDE #04 -->
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>				
		
		<!-- BEGIN: REVOLUTION SLIDER SCRIPT -->						
		<script type="text/javascript">
		
			var tpj=jQuery;
			
							
			var revapi2;
			
			tpj(document).ready(function() {
			
			if (tpj.fn.cssOriginal != undefined)
				tpj.fn.css = tpj.fn.cssOriginal;
			
			if(tpj('#rev_slider_2_1').revolution == undefined)
				revslider_showDoubleJqueryError('#rev_slider_2_1');
			else
			   revapi2 = tpj('#rev_slider_2_1').show().revolution(
				{
					delay:9000,
					startwidth:1010,
					startheight:450,
					hideThumbs:200,
					
					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:4,
					
					navigationType:"none",
					navigationArrows:"solo",
					navigationStyle:"round",
					
					touchenabled:"on",
					onHoverStop:"on",
					
					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:20,
		
					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:0,
					soloArrowLeftVOffset:0,
		
					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:0,
					soloArrowRightVOffset:0,
							
					shadow:0,
					fullWidth:"on",
					fullScreen:"off",
		
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
		
					shuffle:"off",
					
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					videoJsPath:"http://designarethemes.com/themes/zapwp/wp-content/plugins/revslider/rs-plugin/videojs/",
					fullScreenOffsetContainer: ""	
				});
			
			});	//ready
			
		</script>
		<!-- END: REVOLUTION SLIDER -->	
	
		</div>
		<!-- END: SLIDER CONTAINER DIV -->			
									
		<!-- START: FULL CONTENT -->	
		<div class="entry-content">
			
			<!-- BEGIN: INTRO TEXT -->
			<div class="container">
				
		    	<h1 style="text-align: center;">Welcome to <span class="text_color">GNIOT-TechClub</span></h1>
		    	<h2 style="text-align: center;">An opportunity to Inspire, Innovate and Ignite.</h2>
			</div><br/>
		    
		    <!-- BEGIN: DESIGNARE BIG ICONS SECTION -->
		    <div class="container">
		    
			    <!-- DIVIDER -->
			    <br/>
			    <div class="des-sc-dots-divider"></div>
			    <br/>
			    <div class="white-space"></div>
			    
			    <!-- BIG DESIGNARE ICONS -->
			    <div class="shortcode-services default">
			        <div class="service-items bigicons itemsPerRow-3">
			            <div class="row row-0">
			                <ul>
                                <li class="service-item no-flicker one-third column">
                                    <p class="designare_icon des-big-icon">
                                        <img alt="" src="img/designare_icons/icon31_big.svg" class="des-big-icon" title="Tons of layout options"></p>

                                    <div class="title_and_text big-icon">
                                        <p class="item-title">MISSION</p>

                                        <p class="item-desc">To undertake collabrative projects which offer opportunities for long term interaction with academia & technology.</p>
                                    </div>
                                </li>
			                    <li class="service-item no-flicker one-third column">
			                        <p class="designare_icon des-big-icon">
			                        <img alt="" src="img/designare_icons/icon38_big.svg" class="des-big-icon" title="Tons of layout options"></p>
			
			                        <div class="title_and_text big-icon">
			                            <p class="item-title">AIM</p>
			
			                            <p class="item-desc">To work for the improvement of technical knowledge of students & providing them an exposure to the technical world.</p>
			                        </div>
			                    </li>
			
			                    <li class="service-item no-flicker one-third column">
			                        <p class="designare_icon des-big-icon">
			                        <img alt="" src="img/designare_icons/icon11_big.svg" class="des-big-icon" title="Tons of layout options"></p>
			
			                        <div class="title_and_text big-icon">
			                            <p class="item-title">VISION</p>
			
			                            <p class="item-desc">To contribute to India & the world through excellence in scientific, technical education and research.</p>
			                        </div>
			                    </li>

			                </ul>
			            </div>
			       </div>
			   </div>
			</div>
			<!-- END: DESIGNARE BIG ICONS SECTION -->
			
		    <div class="white-space"></div>
		    
		    <!-- START: SIMPLE FULL SECTION -->
			<div class="fullsection-color" style="background:#fdfdfd;margin-top:70px;">
			  <div class="parallax-content container">
						 				  
			    <!-- BEGIN: RECENT PROJECTS STYLE 1 -->
			    <div class="container">
				    
				    <section class="home_widget recentProjects3">
				        <div class="projects_container_proj sixteen columns">
			            	<!-- BEGIN: RP TITLE -->
			            	<div class="zaptitle page_title_s3">
			                	<span class="page_info_title_s3">Event Log</span>
			                
				                <!-- BEGIN: SLIDES ARROWS -->						                
				                <div class="pag-proj2_s3">
				                    <div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal"></div>
				                    
				                    <!-- GO-TO-PROJECTS LINK -->
				                    <div class="goto_projects" onclick="window.location = '#';" title="VIEW PORTFOLIO"></div>
				
				                    <div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal"></div>
				                </div>
				                <!-- END: SLIDES ARROWS -->
				            </div>
			            
			            
				            <!-- BEGIN: PROJECTS THUMBNAILS -->
				            <div class="project_list_s3">
				                <ul class="slides_container jcarousel-skin-tango">
				                    
				                    <!-- PROJECT #01 
					                     NOTE: YOU CAN SELECT THE HOVER EFFECT ON data-rel='magnifier' OPTIONS: 'magnifier', 'link_magnifier', 'link', 'none' -->
				                    <li class="indproj1" data-rel='magnifier'>
				                        <div class="slides_item post-thumb">
				                            
				                            <!-- PROJECT THUMBNAIL -->
				                            <ul class="ch-grid">
				                                <li>
				                                    <div class="ch-item">
				                                    
				                                    	<!-- PROJECT LINK + THUMBNAIL IMAGE  -->
				                                        <img alt="" class="img_thumb" src="img/preview_images/robo.jpg">

				                                    </div>
				                                </li>
				                            </ul>
				                            
				                            <!-- PROJECT TITLE + CATEGORIES -->
				                            <div class="no-flicker">
				                                <div class="proj-title-tags">
				                                    <div class="p_title no-flicker">
				                                        <a href="">Battle Bots</a>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </li>
				                    <!-- END: PROJECT #01 -->
				                    
				                    
				                    <!-- PROJECT #02 -->
				                    <li class="indproj1" data-rel='link_magnifier'>
				                        <div class="slides_item post-thumb">
				                            
				                            <!-- PROJECT THUMBNAIL -->
				                            <ul class="ch-grid">
				                                <li>
				                                    <div class="ch-item">
				                                    
				                                    	<!-- PROJECT LINK + THUMBNAIL IMAGE  -->
				                                        <img alt="" class="img_thumb" src="img/preview_images/langaming.jpg">

				                                    </div>
				                                </li>
				                            </ul>
				                            
				                            <!-- PROJECT TITLE + CATEGORIES -->
				                            <div class="no-flicker">
				                                <div class="proj-title-tags">
				                                    <div class="p_title no-flicker">
				                                        <a href="">LAN Party</a>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </li>
				                    <!-- END: PROJECT #02 -->
				                    
				                    
				                    <!-- BEGIN: PROJECT #03 -->
				                    <li class="indproj1" data-rel='link'>
				                        <div class="slides_item post-thumb">
				                            
				                            <!-- PROJECT THUMBNAIL -->
				                            <ul class="ch-grid">
				                                <li>
				                                    <div class="ch-item">
				                                    	
				                                    	<!-- PROJECT LINK + THUMBNAIL IMAGE  -->
				                                        <img alt="" class="img_thumb" src="img/preview_images/circuit.jpg">

				                                    </div>
				                                </li>
				                            </ul>
				                            
				                            <!-- PROJECT TITLE + CATEGORIES -->
				                            <div class="no-flicker">
				                                <div class="proj-title-tags">
				                                    <div class="p_title no-flicker">
				                                        <a href="">
				                                        Circuit Debugging</a>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </li>
				                    <!-- END: PROJECT #03 -->
				                    
				                    
				                    <!-- BEGIN: PROJECT #04 -->
				                    <li class="indproj1" data-rel='none'>
				                        <div class="slides_item post-thumb">
				                            
				                            <!-- PROJECT THUMBNAIL -->
				                            <ul class="ch-grid">
				                                <li>
				                                    <div class="ch-item">
				                                    	
				                                    	<!-- PROJECT LINK + THUMBNAIL IMAGE  -->
				                                        <img alt="" class="img_thumb" src="img/preview_images/quiz.jpg">

				                                    </div>
				                                </li>
				                            </ul>
				                            
				                            <!-- PROJECT TITLE + CATEGORIES -->
				                            <div class="no-flicker">
				                                <div class="proj-title-tags">
				                                    <div class="p_title no-flicker">
				                                        <a href="">Online Quiz</a>
				                                    </div>

				                                </div>
				                            </div>
				                        </div>
				                    </li>
				                    <!-- END: PROJECT #04 -->
				                    
				                    							                    
				                    <!-- BEGIN: PROJECT #05 -->							
				                    <li class="indproj1" data-rel='link'>
				                        <div class="slides_item post-thumb">
				                            
				                             <!-- PROJECT THUMBNAIL -->
				                            <ul class="ch-grid">
				                                <li>
				                                    <div class="ch-item">
				                                    	
				                                    	<!-- PROJECT LINK + THUMBNAIL IMAGE  -->
				                                        <img alt="" class="img_thumb" src="img/preview_images/debate.jpg">

				                                    </div>
				                                </li>
				                            </ul>
				                            
				                            <!-- PROJECT TITLE + CATEGORIES -->
				                            <div class="no-flicker">
				                                <div class="proj-title-tags">
				                                    <div class="p_title no-flicker">
				                                        <a href="">Debate</a>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </li>
				                    <!-- END: PROJECT #05 -->
				                    
				                    
				                    <!-- BEGIN: PROJECT #06 -->	
				                    <li class="indproj1" data-rel='link_magnifier'>
				                        <div class="slides_item post-thumb">
				                            
				                            <!-- PROJECT THUMBNAIL -->
				                            <ul class="ch-grid">
				                                <li>
				                                    <div class="ch-item">
				                                    	
				                                    	<!-- PROJECT LINK + THUMBNAIL IMAGE  -->
				                                        <img alt="" class="img_thumb" src="img/preview_images/bridge.jpg">

				                                    </div>
				                                </li>
				                            </ul>
				                            
				                            <!-- PROJECT TITLE + CATEGORIES -->
				                            <div class="no-flicker">
				                                <div class="proj-title-tags">
				                                    <div class="p_title no-flicker">
				                                        <a href="">Bridge Building</a>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </li>
				                    <!-- END: PROJECT #06 -->
				                    
				                    
				                    <!-- BEGIN: PROJECT #07 -->	
				                    <li class="indproj1" data-rel='link_magnifier'>
				                        <div class="slides_item post-thumb">
				                            
				                            <!-- PROJECT THUMBNAIL -->
				                            <ul class="ch-grid">
				                                <li>
				                                    <div class="ch-item">
				                                    	
				                                    	<!-- PROJECT LINK + THUMBNAIL IMAGE  -->
				                                        <img alt="" class="img_thumb" src="img/preview_images/windev.jpg">

				                                    </div>
				                                </li>
				                            </ul>
				                            
				                            <!-- PROJECT TITLE + CATEGORIES -->
				                            <div class="no-flicker">
				                                <div class="proj-title-tags">
				                                    <div class="p_title no-flicker">
				                                        <a href="">Workshop on Windows Dev</a>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </li>							                    
				                    <!-- BEGIN: PROJECT #07 -->	
				                </ul>
				            </div>
					    </div>
				        
					    <!-- PROJECTS CARROUSSEL SCRIPT -->
					    <script>
					        jQuery(document).ready(function(){jQuery('.slides_container').parent().carousel({dispItems: 1});});
				        </script>
				
				        <div class="clear"></div>
				    </section>
			      </div>
			      <!-- END: RECENT PROJECTS STYLE 1 -->
		      	</div> 
		      </div>
		    
		      
		      <!-- START: PARALLAX #01 -->
		      <div id="parallax-1" class="parallax" style="background-image: url(img/parallax/incharge.jpg);">
			  	<div class="parallax-overlay parallax-overlay-pattern"></div>
				  
			  	<div class="parallax-content container">
					<div class="quotes-section">
						<p>" Let’s go invent tomorrow instead of worrying about what happened yesterday !!!"</p>
						<span class="quote-author"><strong>Dr. RAJESH PATHAK, Club Incharge</strong></span>
					</div>
				</div>
			  </div>
			  <!-- END: PARALLAX #01 -->
		
              <div class="white-space"></div>
		
              
              <!-- BEGIN: SPECIAL DESIGNARE SECTION -->
              <div class="container">
	
                  <!-- DIVIDER -->
                  <div class="white-space"></div>
		    
		    
                  	<!-- BEGIN: SPECIAL DESIGNARE TABS -->
				    <section class='special_tabs st-0'>
				        
				        <!-- BEGIN: TAB1 -->
				        <!-- LABEL1 -->
				        <div class='label 1 current'>
				            <div class='designare_icon_special_tabs'><i class="fa fa-mobile" style="font-size: 1.2em !important;padding-left: 3px;"></i></div>
				            <span class='tab_title'>Windows 8 App Dev</span>
				        </div>
				        
				        <!-- CONTENT1 -->
				        <div class='content 1'>
				
				            <div class="main_cols container">
				                <div class="eight columns">
				                	<div>
				                        <h3 style="text-align: left; font-size: 19px;">Windows 8 App Dev</h3>
				
				                        <br/>
				
				                        <p>Get started with Windows Runtime apps. You can write a Windows Runtime app in a variety of languages, such as C# or C++ with XAML, C++ with DirectX, and JavaScript with HTML/CSS. Bunch of apps have been developed & published on the store.</p>
				                    </div>
				                </div>
				
				                <div class="eight columns">
				                	<div>
				                    	<p><img alt="" src="img/preview_images/windev8.png" style="width: 100%;"></p>
				                    </div>
				                </div>
				            </div>							        
				        </div>
				        <!-- END -->
				        <!-- END: TAB1 -->
				        
				        
				        <!-- BEGIN: TAB2 -->
				        <!-- LABEL2 -->
				        <div class='label 2'>
				            <div class='designare_icon_special_tabs'><i class="fa fa-code"></i></div>
				            <span class='tab_title'>Web Development</span>
				        </div>
				        
				        <!-- CONTENT2 -->
				        <div class='content 2'>
				        	<div class="main_cols container">
				                <div class="eight columns">
				                	<div>
				                        <h3 style="text-align: left; font-size: 19px;">Web Development</h3>

				                        <br/>
				
				                        <p>Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications, electronic businesses, and social network services. </p>
				                    </div>
				                </div>
				
				                <div class="eight columns">
				                	<div>
				                        <p><img alt="" src="img/preview_images/webdev.png" style="width: 100%;"></p>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <!-- END -->
				        <!-- END: TAB2 -->
				        
				        
				        <!-- BEGIN: TAB3 -->
				        <!-- LABEL3 -->
				        <div class='label 3'>
				            <div class='designare_icon_special_tabs'><i class="fa fa-adn"></i></div>
				            <span class='tab_title'>Internet of Things</span>
				        </div>
				        
				        <!-- CONTENT3 -->
				        <div class='content 3'>
				            <div class="main_cols container">
				                <div class="sixteen columns">
				                	<div>
				                        <h3 style="text-align: left; font-size: 19px;">Internet of Things</h3>

				                        <br/>
				
				                        <p>The Internet of Things (IoT) is the interconnection of uniquely identifiable embedded computing devices within the existing Internet infrastructure. Typically, IoT is expected to offer advanced connectivity of devices, systems, and services that goes beyond machine-to-machine communications (M2M) and covers a variety of protocols, domains, and applications.</p>
                                    </div>
				                </div>
				
				            </div>
				        </div>
				
				        <div class='clear'></div>
				        <!-- END -->
				        <!-- END: TAB3 -->

                        <!-- BEGIN: TAB2 -->
                        <!-- LABEL2 -->
                        <div class='label 4'>
                            <div class='designare_icon_special_tabs'><i class="fa fa-code"></i></div>
                            <span class='tab_title'>Arduino</span>
                        </div>

                        <!-- CONTENT2 -->
                        <div class='content 4'>
                            <div class="main_cols container">
                                <div class="eight columns">
                                    <div>
                                        <h3 style="text-align: left; font-size: 19px;">Arduino</h3>

                                        <br/>

                                        <p>Arduino is an open-source computer hardware and software company, project and user community that designs and manufactures kits for building digital devices and interactive objects that can sense and control the physical world.</p>
                                    </div>
                                </div>

                                <div class="eight columns">
                                    <div>
                                        <p><img alt="" src="img/preview_images/arduino.png" style="width: 50%;"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- END: TAB2 -->

                        <!-- BEGIN: TAB4 -->
                        <!-- LABEL4 -->
                        <div class='label 5'>
                            <div class='designare_icon_special_tabs'><i class="fa fa-adn"></i></div>
                            <span class='tab_title'>Data Analytics</span>
                        </div>

                        <!-- CONTENT3 -->
                        <div class='content 5'>
                            <div class="main_cols container">
                                <div class="sixteen columns">
                                    <div>
                                        <h3 style="text-align: left; font-size: 19px;">Data Analytics</h3>

                                        <br/>

                                        <p>Analysis of data is a process of inspecting, cleaning, transforming, and modeling data with the goal of discovering useful information, suggesting conclusions, and supporting decision-making. Data analysis has multiple facets and approaches, encompassing diverse techniques under a variety of names, in different business, science, and social science domains.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class='clear'></div>
                        <!-- END -->
                        <!-- END: TAB3 -->

                        <!-- BEGIN: TAB2 -->
                        <!-- LABEL2 -->
                        <div class='label 6'>
                            <div class='designare_icon_special_tabs'><i class="fa fa-code"></i></div>
                            <span class='tab_title'>Robotics</span>
                        </div>

                        <!-- CONTENT2 -->
                        <div class='content 6'>
                            <div class="main_cols container">
                                <div class="eight columns">
                                    <div>
                                        <h3 style="text-align: left; font-size: 19px;">Robotics</h3>

                                        <br/>

                                        <p>Robotics is the branch of mechanical engineering, electrical engineering and computer science that deals with the design, construction, operation, and application of robots, as well as computer systems for their control, sensory feedback, and information processing.
                                            These technologies deal with automated machines that can take the place of humans in dangerous environments or manufacturing processes, or resemble humans in appearance, behavior, and/or cognition. Many of today's robots are inspired by nature contributing to the field of bio-inspired robotics.</p>
                                    </div>
                                </div>

                                <div class="eight columns">
                                    <div>
                                        <p><img alt="" src="img/preview_images/robot.png" style="width: 100%;"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END -->
                        <!-- END: TAB2 -->
				    </section>
				    <!-- END: SPECIAL DESIGNARE TABS -->


				    <!-- BEGIN: SPECIAL DESIGNARE TABS SUBSTITUE MOBILE LAYOUTS 
				    	 THIS WILL BE USED FOR MOBILE RESOLUTIONS
		    
				    -->
				    <div class="shortcode-accs acc-substitute default">


				        <!-- BEGIN: ACC TAB1 -->
				        <!-- LABEL1 -->
				        <div class="acc-title">
				            <h2 class="" style="cursor:pointer;"><i class="icon-move"></i>Windows 8 App Dev</h2>
				        </div>

				        <!-- CONTENT1 -->
				        <div class="pane acc-sec">

				            <div class="main_cols container">
				                <div class="eight columns">
				                	<div>
				                        <h3 style="text-align: left; font-size: 19px;">Windows 8 App Dev</h3>
				                        <br/>

				                        <p>Get started with Windows Runtime apps. You can write a Windows Runtime app in a variety of languages, such as
                                            C# or C++ with XAML, C++ with DirectX, and JavaScript with HTML/CSS. Bunch of apps have been developed & published on the store.</p>
				                    </div>
				                </div>

				                <div class="eight columns">
				                	<div>
				                    	<p><img alt="" src="img/preview_images/windev8.png" style="width: 100%;"></p>
				                    </div>
				                </div>
				            </div>

				        </div>
				        <!-- END -->
				        <!-- END: ACC TAB1 -->


				        <!-- BEGIN: ACC TAB2 -->
				        <!-- LABEL2 -->
				        <div class="acc-title">
				            <h2 class="" style="cursor:pointer;"><i class="icon-gift"></i>Web Development</h2>
				        </div>

				        <!-- CONTENT2 -->
				        <div class="pane acc-sec">
				            <div class="main_cols container">
				                <div class="eight columns">
				                	<div>
				                        <h3 style="text-align: left; font-size: 19px;">Web Development</h3>

				                        <br/>

				                        <p>Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications, electronic businesses, and social network services. </p>
				                    </div>
				                </div>

				                <div class="eight columns">
				                	<div>
				                        <p><img alt="" src="img/preview_images/webdev.png" style="width: 100%;"></p>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <!-- END -->
				        <!-- END: ACC TAB2 -->


				        <!-- BEGIN: ACC TAB3 -->
				        <!-- LABEL3 -->
				        <div class="acc-title">
				            <h2 class="" style="cursor:pointer;"><i class="icon-file-alt"></i>Arduino</h2>
				        </div>

				        <!-- CONTENT3 -->
				        <div class="pane acc-sec">
				            <div class="main_cols container">
				                <div class="eight columns">
				                	<div>
				                        <h3 style="text-align: left; font-size: 19px;">Arduino</h3>

				                        <br/>

				                        <p>Arduino is an open-source computer hardware and software company, project and user community that designs and manufactures kits for building digital devices and interactive objects that can sense and control the physical world.</p>
				                    </div>
				                </div>

				                <div class="eight columns">
				                	<div>
				                        <p><img alt="" src="img/preview_images/arduino.png" style="width: 100%;"></p>
				                    </div>
				                </div>
				            </div>
				        </div>
				        <!-- END -->
				        <!-- END: ACC TAB3 -->
				    </div>
				    <!-- BEGIN: SPECIAL DESIGNARE TABS SUBSTITUE MOBILE LAYOUTS -->

				    <div class="white-space"></div>
				    <div class="white-space"></div>

		    	</div>
		    	<!-- END: SPECIAL DESIGNARE SECTION -->


            <!-- START: PARALLAX #01 -->
            <div id="parallax-1" class="parallax" style="background-image: url(img/parallax/bg3.jpg);">
                <div class="parallax-overlay parallax-overlay-pattern"></div>

                <div class="parallax-content container">
                    <div class="quotes-section">
                        <p>" Life is all about opportunities and Technology is one of it, Your Knowledge and Our Platform."</p>
                        <span class="quote-author"><big>By - Chief Co-ordinator</big></span>
                    </div>
                </div>
            </div>
            <!-- END: PARALLAX #01 -->

				  <!-- START: SIMPLE FULL SECTION 
				  	   Use this code if you want a simple fullsection with a colored background
				  -->
				  
				  <!--
				  <div class="fullsection-color" style="background:rgba(95, 190, 190, .9);">
					  <div class="parallax-content container">
							 
				      </div> 
				  </div>
				  
				  END: SIMPLE FULL SECTION -->

				  <div class="white-space"></div>

				  <!-- BEGIN: LATEST NEWS & A LITLE MORE ABOUT ZAP -->
				  <div class="container">
					  	<div class="white-space"></div>
		    
					    <!-- BEGIN: LATESTS NEWS + MORE ABOUT ZAP -->
					    <div class="main_cols container">
					        
					        <!-- BEGIN: EIGHT COLUMNS - LATESTS NEWS NO SCROLLER--> 
					        <div class="eight columns">
							    <section class="home_widget recentPosts noscroller" id="recentPosts-1">
							    	<div class="projects_container rposts2 sixteen columns">
							        	
							        	<!-- TITLE -->
							        	<div class="zaptitle page_title_s2">
							            	<span class="page_info_title_s2">Latest News</span>
							            </div>
                                        <!-- POSTS NO SCROLLER-->
                                        <div class="project_list_s2">
                                            <div class="slides_container post_listing">
                                                <!-- POST #01-->
                                                <!--<div class="posts_row">
                                                    <div>
                                                        <div class="slides-item post no-flicker" id="post-1">
                                                            <div class="the_content">
                                                                <div class="data_type">
                                                                    <div class="cutcorner_top"></div>

                                                                    <div class="data">
                                                                        <div class="day">26-27</div>
                                                                        <div class="">Sept</div>
                                                                    </div>

                                                                    <div class="post_type image"></div>
                                                                    <div class="cutcorner_bottom"></div>
                                                                </div>

                                                                <div class="title_content">
                                                                    <div class="the_title">
                                                                        <a href="#">Embedded & Robotics Workshop</a>
                                                                    </div>
                                                                    <div class="the_content">
                                                                        <p>We are organising a Workshop on Embedded System and Robotics on 26 and 27 Sept. For Further Details please go to our News & Event Section. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <!-- END POST #02-->

                                                <!-- POST #02-->
                                                <div class="posts_row">
                                                    <div>
                                                        <div class="slides-item post no-flicker" id="post-2">
                                                            <div class="the_content">
                                                                <div class="data_type">
                                                                    <div class="cutcorner_top">-</div>

                                                                    <div class="data">
                                                                        <div class="day">9-10</div>
                                                                        <div class="">Oct</div>
                                                                    </div>

                                                                    <div class="post_type slider"></div>
                                                                    <div class="cutcorner_bottom"></div>
                                                                </div>

                                                                <div class="title_content">
                                                                    <div class="the_title">
                                                                        <a href="#">TechSparks #15</a>
                                                                    </div>

                                                                    <div class="the_content">
                                                                        <p>An Inter College Technical Fest is coming for you Be Ready!!!<!--<span class="rp_readmore"><a href="javascript:;">Read More ⇒</a></span>--></p>
                                                                    </div>
                                                                </div><!--endoftitlecontent-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END POST #02-->
                                            </div>
                                        </div>
                                        <!-- END POSTS NO SCROLLER-->
							         </div>
							         <div class="clear"></div>
							    </section>
							</div>
					        <!-- END: EIGHT COLUMNS -->
					        
					        
					        <!-- BEGIN: EIGHT COLUMNS - HORIZONTAL TABS-->
					        <div class="eight columns">
					        	<div class='zaptitle'>
					            	<span>A little more about TechClub</span>
					            </div>
					            
					            <!-- BEGIN: HORIZONTAL TABS -->
					            <div class="shortcode-tabs default" id="tabs">
					                
					                <!-- HORIZONTAL TABS MENU -->
					                <ul class="tabs" id="tabslist">
					                    <li onclick="changeTab(this);">
					                        <a href="javascript:;"><i class='fa fa-compass'></i>Who we are</a>
					                    </li>
					
					                    <li onclick="changeTab(this);">
					                        <a href="javascript:;">Our Philosophy</a>
					                    </li>
					
					                    <li onclick="changeTab(this);">
					                        <a href="javascript:;">What we do</a>
					                    </li>
					                </ul>
					                
					                <!-- HORIZONTAL TABS PANES -->
					                <div class="panes">
					                    
					                    <!-- PANE #1 -->
					                    <div>
					                        <div class="main_cols container">
					                            <div class="eight columns">
					                            	<h5>Welcome to <span style="color: #10b9b9;">GNIOT-TechClub</span></h5>
					                            	<p>GNIOT Tech Club, a primary world in Greater Noida Institute of Technology for most of those who are enthusiastically crazy for their passion to live in a technical space.
                                                        Initiated by students of Greater Noida Institute of Technology with a vision of connecting and gathering young, productive and innovative minds under one common roof, also
                                                        generating appropriate skills in the area of their interest through self-learning, workshops and seminars.</p>
					                            </div>
					
					                            <div class="eight columns">
					                            	
					                            	<!-- BEGIN: FLEXSLIDER-->
					                            	<div class="flexslider clearfix" id="myslider-1" style="max-height:300px;">
					                                    <ul class="slides">
                                                            <li><a href='javascript:;'><img alt='' src='img/preview_images/group1.jpg'></a></li>
					                                        <li><a href='javascript:;'><img alt='' src='img/preview_images/group2.jpg'></a></li>
					                                        <li><a href='javascript:;'><img alt='' src='img/preview_images/group3.jpg'></a></li>
					                                    </ul>
					                                </div>
					                                
					                                <!-- FLEXSLIDER SCRIPT -->
					                                <script type="text/javascript">
														jQuery(document).ready(function($) {
														    $('#myslider-1').flexslider({
														        animation: "fade",
														        slideDirection: "vertical",
														        directionNav: false,
														        slideshowSpeed: 4500,
														        controlsContainer: '#myslider-1 .flex-container',
														        pauseOnAction: false,
														        pauseOnHover: true,
														        keyboardNav: false,
														        controlNav: true,
														        start: function(slider) {
														            $(slider).find('li').each(function() {
														                if ($(this).children('a').href != "javascript:;") {
														                    $(this).children('a').children('img').click(function() {
														                        window.location = $(this).parent('a').attr('href');
														                        $(this).parent('a').attr('href', 'javascript:;');
														                    });
														                }
														            });
														            $("#myslider-1 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
														                'opacity': 1
														            }, 500);
														        },
														        after: function(slider) {
														            $("#myslider-1").find(".flex-direction-nav").click(function() {
														                window.location = $("#myslider-1 .slides li").eq(slider.currentSlide).children("a").attr("href");
														            });
														            $("#myslider-1 .slides li").find(".flex-caption").each(function() {
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
					                            </div>
					                        </div>
					                    </div>
					                    <!-- END PANE #1 -->
					                    
					                    
					                    <!-- PANE #2 -->
					                    <div>
					                        <p>Our Philosophy is to create awareness among people about new Innovating Technology, through which they get Inspired and Ignite themselve toward's trending and Better technology.</p><br>
                                            <p>"Technology is a word that describe something that doesn't work yet..."</p>
                                        </div>
					                    <!-- END PANE #2 -->
					                    
					                    
					                    <!-- PANE #3 -->
					                    <div>
					                        <div class="shortcode-services default">
					                            <p>We, The Tech Club have excelled in bringing together people with inquisitive nature
                                                    ,helping them enhance their technical knowledge and skills.
                                                    The Tech Club provides techies a platform to showcase their talent.
                                                    Our bright and radiant tech club team keeps incessantly working on the technical
                                                    research and development in science and technology.Out tech club team is always en-thrilled to bring up
                                                    something new for the people out there.
                                                    From time to time it brings out the workshops and seminars on the trending technologies and
                                                    technical topics. We believe one never stops learning. Learning is an unending process.
                                                    But one must also learn the implementation and application of the knowledge he has gained.
                                                    We believe in a growth which is never ending.Tech Club is totally altruistic in its interests.
                                                    It helps one,helps all.	It has given numerous minds the wings to soar high in the sky.
                                                    The assets of the Tech Club help them recognize them their worth,by enhancing their
                                                    outlook and developing their techincal skills. </p>
					
					                        </div><br/>
					                        <p>
					                    </div>
					                    <!-- END PANE #3 -->
					                    
					                </div>
					            </div>
					            <!-- END HORIZONTAL TABS -->
					        </div>
					    </div>
                      <!-- BEGIN: CLIENTS FEEDBACK & OUR PARTNERS-->
                      <div class="container">

                          <!-- EIGHT COLUMNS -->
                          <div class="eight columns">

                              <!-- SCRIPT FOR TESTIMONIALS SROLLER -->
                              <script type="text/javascript">
                                  jQuery(document).ready(function ($) {
                                      jQuery('.testimonis-1').carousel({
                                          dispItems: 1
                                      });
                                  });
                              </script>


                              <!-- BEGIN: TESTIMONIALS-->
                              <section class="recent_projects recent_testimonials">
                                  <div class="zaptitle page_title_testimonials">

                                      <span class="page_info_title_testimonials">Clients Feedback</span>
                                      <!-- BEGIN Slides Arrows -->
                                      <div class="pag-testimonials">
                                          <div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal"></div>
                                          <div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal"></div>
                                      </div>
                                      <!-- END Slides Arrows -->
                                  </div>

                                  <!-- Testimonials -->
                                  <div id="testimonials2" class="home_proj slideContent testimonis-1">
                                      <ul class="carousel">

                                          <!-- CLIENT#1 -->
                                         <!-- <li>
                                              <div class="slide s1">
                                                  <div class="featured_image">
                                                      <div class="rotate-bg"></div>
                                                      <img title="Jonh Doe" alt="Jonh Doe" src="img/tech15/robotics-logo2.png" />
                                                  </div>
                                                  <div class="testi-text">
                                                      <p></p>
                                                  </div>
                                                  <div class="testi-info"><span class='author'>Jonh Doe</span>, <span class='company'>Envato</span>
                                                  </div>
                                              </div>
                                          </li>

                                          <!-- CLIENT#2 -->
                                          <!--<li>
                                              <div class="slide s2">
                                                  <div class="featured_image">
                                                      <div class="rotate-bg"></div>
                                                      <img title="Joana Doe" alt="Joana Doe" src="img/preview_images/350x400.gif" />
                                                  </div>
                                                  <div class="testi-text">
                                                      <p>" Vestibulum porta tristique porttitor. Donec at velit ac nunc blandit mollis. Donec ornare quis lorem eu iaculis. Curabitur scelerisque tincidunt lorem quis egestas. Vestibulum vitae tellus si... "</p>
                                                  </div>
                                                  <div class="testi-info"><span class='author'>Joana Doe</span>, <span class='company'>Designare</span>
                                                  </div>
                                              </div>
                                          </li>-->
                                      </ul>
                                  </div>
                                  <!-- end Testimonials -->
                              </section>
                              <!-- end My Testimonials -->
                          </div>

                          <!-- EIGHT COLUMNS -->
                          <div class="eight columns">

                              <!-- BEGIN: PARTNERS WITH SCROLLER -->
                              <section id='partners-1' class='shortcode-partners sixteen columns'>
                                  <div class="zaptitle"><span>Our Partners</span>
                                      <div class='pag-proj_partners'>
                                          <div class='nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal'></div>
                                          <div class='prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal'></div>
                                      </div>
                                  </div>

                                  <!-- START PARTNERS -->
                                  <div class='partners-carousel'>
                                      <ul class='partners-items'>
                                          <!-- PARTNER#01 -->
                                          <li class='withscroller partner-item no-flicker'>
                                              <a target='_blank' href='javascript:;' title='WOW'>
                                                  <img class='logopartner' src='img/tech15/bluemix.jpg' alt='WOW' title='WOW' />
                                              </a>
                                          </li>

                                          <!-- PARTNER#01 -->
                                          <li class='withscroller partner-item no-flicker'>
                                              <a target='_blank' href='javascript:;' title='WOW'>
                                                  <img class='logopartner' src='img/tech15/WOW.jpg' alt='WOW' title='WOW' />
                                              </a>
                                          </li>

                                          <!-- PARTNER#02 -->
                                          <li class='withscroller partner-item no-flicker'>
                                              <a target='_blank' href='javascript:;' title='Aptron'>
                                                  <img class='logopartner' src='img/tech15/aptron.jpg' alt='Aptron' title='Aptron' />
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                                  <!-- END PARTNERS -->
                                  <div class='clear'></div>
                              </section>
                              <!-- END: PARTNERS WITH SCROLLER -->


                              <!-- SCRIPT FOR PARTNERS SCROLLER -->
                              <script type='text/javascript'>
                                  jQuery(document).ready(function ($) {
                                      jQuery('#partners-1 .partners-items li').css({
                                          'margin': '0px 10px 0px 0px',
                                          'float': 'left',
                                          'max-height': '130px'
                                      });
                                      jQuery('#partners-1').find('.partners-carousel').carousel({
                                          dispItems: 1
                                      });
                                      jQuery('#partners-1').find('.logopartner').hide().fadeIn(1000);
                                  });
                                  jQuery(window).load(function () {
                                      jQuery('#partners-1 .partners-items li').each(function (e) {
                                          jQuery(this).css('min-height', '').css('max-height', jQuery(this).children('a').height());
                                      });
                                      jQuery('#partners-1').find('.logopartner').each(function () {
                                          jQuery(this).greyScale({
                                              fadeTime: 500,
                                              reverse: false
                                          });
                                      });
                                  });
                                  jQuery(window).resize(function () {
                                      jQuery('#partners-1 .partners-items li').each(function (e) {
                                          jQuery(this).css('min-height', '').css('max-height', jQuery(this).children('a').height());
                                      });
                                  });
                              </script>
                          </div>
                          <!-- END: EIGHT COLUMNS -->
                      </div>
                      <!-- END: CLIENTS FEEDBACK & OUR PARTNERS-->
			  </div>
		 </div>
		 <!-- END: CONTAINER -->

         <!-- START: PARALLAX #01 -->
         <div id="parallax-3" class="parallax" style="background-image: url(img/preview_images/1440x919.gif); height: 270px;">
             <div class="parallax-overlay parallax-overlay-pattern" style="height: 270px;"></div>

            <div class="parallax-content container">
                <div class="quotes-section" style="margin: 80px 0;">
                     <p>GET IN TOUCH WITH US, WE'RE <span class="text_color">NICE</span> PEOPLE ;)</p>
                </div>
            </div>
         </div>
         <!-- END: PARALLAX #01 -->
		
		<div class="white-space"></div>
		
		<!-- BEGIN: NUMERICAL INCREMENTS -->
		<div class="container">
			<div class="four columns">		                
                <div class="center-icon" style="">
                	<i class="fa fa-clock-o"></i>
                </div>    
                <div>
                    <div class="numericals">
                        <script type="text/javascript">
                            jQuery(window).load(function () {
                                if (isScrolledIntoView("numerical-10")) {
                                    jQuery('#numerical-10').removeClass('notinview');
                                    incrementNumerical('#numerical-10', 15, 100);
                                }
                            });
                            jQuery(window).scroll(function () {
                                if (jQuery('#numerical-10.notinview').length) {
                                    if (isScrolledIntoView("numerical-10")) {
                                        jQuery('#numerical-10').removeClass('notinview');
                                        incrementNumerical('#numerical-10', 15, 100);
                                    }
                                }
                            });
                        </script>
                        <div class="numerical-container">
                            <div id="numerical-10" class="notinview">
                                <div style="font-size:60px;" class="value">0</div>
                                <div class="unit"></div>
                            </div>
                            <div class="numerical-content">Club Successful Running Months</div>
                        </div>
                    </div>
                </div>      
	        </div>
	        
	        <div class="four columns">		                
                <div class="center-icon" style="">
                	<i class="fa fa-desktop"></i>
                </div>    
                <div>
                    <div class="numericals">
                        <script type="text/javascript">
                            jQuery(window).load(function () {
                                if (isScrolledIntoView("numerical-12")) {
                                    jQuery('#numerical-12').removeClass('notinview');
                                    incrementNumerical('#numerical-12', 20, 5);
                                }
                            });
                            jQuery(window).scroll(function () {
                                if (jQuery('#numerical-12.notinview').length) {
                                    if (isScrolledIntoView("numerical-12")) {
                                        jQuery('#numerical-12').removeClass('notinview');
                                        incrementNumerical('#numerical-12', 20, 5);
                                    }
                                }
                            });
                        </script>
                        <div class="numerical-container">
                            <div id="numerical-12" class="notinview">
                                <div style="font-size:60px;" class="value">0</div>
                                <div class="unit"></div>
                            </div>
                            <div class="numerical-content">Events Organised</div>
                        </div>
                    </div>
                </div>      
	        </div>
	        
	        <div class="four columns">		                
                <div class="center-icon" style="">
                	<i class="fa fa-user"></i>
                </div>    
                <div>
                    <div class="numericals">
                        <script type="text/javascript">
                            jQuery(window).load(function () {
                                if (isScrolledIntoView("numerical-13")) {
                                    jQuery('#numerical-13').removeClass('notinview');
                                    incrementNumerical('#numerical-13', 180, 5);
                                }
                            });
                            jQuery(window).scroll(function () {
                                if (jQuery('#numerical-13.notinview').length) {
                                    if (isScrolledIntoView("numerical-13")) {
                                        jQuery('#numerical-13').removeClass('notinview');
                                        incrementNumerical('#numerical-13', 180, 5);
                                    }
                                }
                            });
                        </script>
                        <div class="numerical-container">
                            <div id="numerical-13" class="notinview">
                                <div style="font-size:60px;" class="value">0</div>
                                <div class="unit"></div>
                            </div>
                            <div class="numerical-content">Members</div>
                        </div>
                    </div>
                </div>      
	        </div>
	        
	        <div class="four columns">		                
                <div class="center-icon" style="">
                	<i class="fa fa-coffee"></i>
                </div>    
                <div>
                    <div class="numericals">
                        <script type="text/javascript">
                            jQuery(window).load(function () {
                                if (isScrolledIntoView("numerical-14")) {
                                    jQuery('#numerical-14').removeClass('notinview');
                                    incrementNumerical('#numerical-14', 1, 50);
                                }
                            });
                            jQuery(window).scroll(function () {
                                if (jQuery('#numerical-14.notinview').length) {
                                    if (isScrolledIntoView("numerical-14")) {
                                        jQuery('#numerical-14').removeClass('notinview');
                                        incrementNumerical('#numerical-14', 1, 50);
                                    }
                                }
                            });
                        </script>
                        <div class="numerical-container">
                            <div id="numerical-14" class="notinview">
                                <div style="font-size:60px;" class="value">0</div>
                                <div class="unit"></div>
                            </div>
                            <div class="numerical-content">Investiture</div>
                        </div>
                    </div>
                </div>      
	        </div>
	    </div>
	    <!-- END: NUMERICAL INCREMENTS -->
		    
		<div class="white-space"></div>
		
		<!-- BEGIN: BACK-TO-TOP BUTTON -->			
		<div id="back-to-top"><a href="javascript:;"></a></div>
		
<?php require'footer.php'; ?>