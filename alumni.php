<?php require'header.php'; ?>

    <!-- PAGE TITLE -->
    <!-- Put your image here on the "style" -->
    <div class="fullwidth-container image" style="background: url(img/preview_images/top-about.jpg);">
        <div class="parallax-overlay parallax-overlay-pattern"></div>
        <div class="container">
            <div class="pageTitle sixteen columns">
                <h1 class="page_title">Alumni</h1>
                <h2 class="secondaryTitle"></h2>
            </div>
        </div>
    </div>

    <!-- START: FULL CONTENT -->
    <div class="entry-content">
        <div class="container">
            <div id="primary" class="blogarchive2 single-p">
                <div id="content">

                    <!-- BEGIN: PROJECT CONTENT -->
                    <div class="proj-content">
                        <div class="projects_description">

                            <!-- PROJECT SLIDER + PRETTYPHOTO -->
                            <div class="projects_media eleven columns leftSlider">
                                <div id='p-slider-1206' class='flexslider clearfix'>
                                    <ul class='slides da-thumbs-plus'>
                                        <li>
                                            <a href='img/preview_images/about-us.jpg'>
                                                <img src='img/preview_images/about-us.jpg' alt='' class='rp_style1_img'>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='img/preview_images/about-2.jpg' rel='prettyPhoto[pp_gal]'>
                                                <img src='img/preview_images/about-2.jpg' alt='' width='100%' class='rp_style1_img'>
                                            </a>
                                        </li>
                                        <li>
                                            <a href='img/preview_images/about-1.jpg' rel='prettyPhoto[pp_gal]'>
                                                <img src='img/preview_images/about-1.jpg' alt='' width='100%' class='rp_style1_img'>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- PROJECT DESCRIPTION -->
                            <div class="content_container five columns">
                                <h2 class="zaptitle"><span>Alumni</span></h2>
                                <p>Connect to the richly developed network of GNIOT-TechClub alumni by joining one of the Official technical club of GNIOT.
                                    Alumni is one of the way to give respect to those people who make their efforts to start this new club at specific region.
                                    Connect with GNIOT-TechClub alumni around a particular student activity, identity group, specific profession and technical events.</p>
                                <br/><br/>

                            </div>
                        </div>
                    </div>
                    <!-- END: PROJECT CONTENT -->

                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {

                            if ($("#p-slider-1206").find('li').length > 1) {
                                $("#p-slider-1206").flexslider({
                                    animation: 'fade',
                                    slideDirection: "horizontal",
                                    directionNav: '1',
                                    slideshowSpeed: 5500,
                                    controlsContainer: "#p-slider-1206 .flex-container",
                                    pauseOnAction: false,
                                    pauseOnHover: '1',
                                    keyboardNav: false,
                                    controlNav: '1',
                                    slideshow: '1',
                                    animationDuration: 500,
                                    after: function (slider) {
                                        $(slider).find('.magnifier')
                                            .unbind('click')
                                            .bind('click', function () {
                                                $(slider).find('li:not(".clone")').eq(slider.currentSlide).find('a').trigger('click');
                                            });
                                        window.curSlide = slider.currentSlide;
                                    },
                                    start: function (slider) {
                                        window.curSlide = slider.currentSlide;
                                        $(slider).find('.magnifier').bind('click', function () {
                                            $(slider).find('li:not(".clone")').eq(slider.currentSlide).find('a').trigger('click');
                                        });
                                        if ($('.projects_media .flexslider .mask').length) {
                                            $('.projects_media .flexslider .flex-direction-nav li a').hover(function () {
                                                $('.projects_media .flexslider .mask .more').css('opacity', 0);
                                            }, function () {
                                                $('.projects_media .flexslider .mask .more').css('opacity', 1);
                                            });
                                        }
                                    }
                                });
                                $("#p-slider-1206").css('max-height', 'auto');

                            } else {
                                $("#p-slider-1206").find('ul li').css('display', 'block');
                                $("#p-slider-1206").find('li a img').css('opacity', 1);
                                $("#p-slider-1206").find('.magnifier').bind('click', function () {
                                    $("#p-slider-1206").find('li a').trigger('click');
                                });
                            }

                            $('.slides a.pretty').prettyPhoto({
                                deeplinking: false,
                                show_title: false,
                                social_tools: '',
                                theme: 'pp_default'
                            });

                            if (!$('.nav-previous-nav1').html().length) {
                                $('.nav-previous-nav1').html('<a href="javascript:;" rel="prev" style="color: rgb(102, 102, 102); opacity: 0.3; filter: alpha(opacity=30);">l</a>');
                            }
                            if (!$('.nav-next-nav1').html().length) {
                                $('.nav-next-nav1').html('<a href="javascript:;" rel="next" style="color: rgb(102, 102, 102); opacity: 0.3; filter: alpha(opacity=30);">r</a>');
                            }

                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- END: FULL CONTENT -->
    <div class="white-space"></div>

    <div class="des-sc-dots-divider"></div>

    <!-- BEGIN: TEAM SECTION -->
    <div class="container">
        <section id="team-2" class="shortcode-team sixteen columns">
            <!-- Team title-->
            <h2 class="team_header zaptitle" style="min-height:20px;"><span>Alumni</span></h2>
            <!-- Begin Team Member Row 2-->
            <div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Engg. Raghvendra Pratap Singh' title='Engg. Raghvendra Pratap Singh' src='img/alumni/raghvendra.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Engg. Raghvendra Pratap Singh</h4>
                        <p><span class="text_color">1st Chief Coordinator of GNIOT-TechClub</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/infinity.rps?fref=ts" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://in.linkedin.com/pub/raghavendra-pratap-singh/8b/119/853" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <div class="white-space"></div>

    <!-- BEGIN: BREADCRUMBS -->
    <div class="breadcrumbs-container">
        <div class="entry-breadcrumb no-flicker" style="border: none;">
            <p>You are here: <a href="#">Home</a><span class="delimiter"> &raquo; </span>Alumni</p>
        </div>
    </div>


<?php require'footer.php'; ?>