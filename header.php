<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1" name="viewport">
    <meta name="keywords" content="YOUR KEYWORDS">
    <meta name="description" content="YOUR DESCRIPTION"/>
    <title>GNIOT - TechClub</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/skeleton.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/camera.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/tango/skin.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/blog.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/resize.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/retina.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/shortcodes.css' type='text/css' media='all' />
    <!-- Layer Slider -->
    <link rel='stylesheet'  href='css/layerslider.css' type='text/css' media='all' />

    <!-- Rev Slider -->
    <link rel='stylesheet' href='css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet'  href='css/captions.css' type='text/css' media='all' />

    <!-- COLORS VARIATIONS -->
    <link rel='stylesheet'  href='css/color-variations/greenzap.css' type='text/css' media='all' title="greenzap"/>
    <link rel='stylesheet'  href='css/color-variations/red.css' type='text/css' media='all'  title="red"/>
    <link rel='stylesheet'  href='css/color-variations/green.css' type='text/css' media='all'  title="green"/>
    <link rel='stylesheet'  href='css/color-variations/orange.css' type='text/css' media='all' title="orange"/>
    <link rel='stylesheet'  href='css/color-variations/yellow.css' type='text/css' media='all'  title="yellow"/>
    <link rel='stylesheet'  href='css/color-variations/blue.css' type='text/css' media='all' title="blue"/>
    <link rel='stylesheet'  href='css/color-variations/violet.css' type='text/css' media='all'  title="violet"/>
    <link rel='stylesheet'  href='css/color-variations/brown.css' type='text/css' media='all'  title="brown"/>
    <link rel='stylesheet'  href='css/color-variations/darkblue.css' type='text/css' media='all'  title="darkblue"/>
    <link rel='stylesheet'  href='css/color-variations/pink.css' type='text/css' media='all' title="pink" />

    <!-- Fonts -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans' type='text/css' media='screen' />

    <!-- Javascript -->
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jQuerytools.js'></script>
    <script type='text/javascript' src='js/utils.js'></script>
    <script type='text/javascript' src='js/zap.js'></script>
    <script type='text/javascript' src='js/blog.js'></script>
    <script type='text/javascript' src='js/twitter/jquery.tweet.js'></script>
    <script type='text/javascript' src='js/camera.min.js'></script>
    <script type='text/javascript' src='js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='js/jquery-easing-1.3.js'></script>
    <script type='text/javascript' src='js/jquerytransit.js'></script>
    <script type='text/javascript' src='js/layerslider.transitions.js'></script>
    <script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='js/jflickrfeed.js'></script>
    <script type='text/javascript' src='js/jquery.jcarousel.min.js'></script>

    <script type='text/javascript' src='js/preview.js'></script>

</head>

<!-- Setting Switcher -->
<div id="option_wrapper">
    <div class="inner">
        <!-- Start Switcher -->

        <h6 style="position:relative; top:6px;font-size: 17px;text-align: center;margin: 4px 0 12px 0;">Style Selector</h6>
        <p> Choose your color</p>
        <ul class="skins">

            <li><a href="#" rel="greenzap" class="styleswitch greenzap">GreenZap</a></li>
            <li><a href="#" rel="red" class="styleswitch red">Red</a></li>
            <li><a href="#" rel="green" class="styleswitch green">Green</a></li>
            <li><a href="#" rel="orange" class="styleswitch orange">Orange</a></li>
            <li><a href="#" rel="yellow" class="styleswitch yellow">Yellow</a></li>
            <li><a href="#" rel="blue" class="styleswitch blue">Blue</a></li>
            <li><a href="#" rel="violet" class="styleswitch violet">Violet</a></li>
            <li><a href="#" rel="brown" class="styleswitch brown">Brown</a></li>
            <li><a href="#" rel="darkblue" class="styleswitch darkblue">DarkBlue</a></li>
            <li><a href="#" rel="pink" class="styleswitch pink">Pink</a></li>

        </ul>
    </div>

</div>

<div class="option_btn settings-close" style="">

    <style>
        #switcher{
            position: fixed;
            left: 0px;
            top: 80px;
            z-index: 9999999999999;
            background:#fff;
            border:1px solid #ddd;
            padding:0 4px 10px 7px;
            width:150px;
        }

        #switcher form select{
            width:148px;
            padding:4px 6px;
            border:1px solid #ccc;
        }
        .option_btn{
            position: fixed;
            top: 90px;
            cursor: pointer;
            z-index: 9999999999999;
            width: 40px;
            height: 40px;
        }

        .settings-open{
            background:  url(img/close.png) 10px 11px no-repeat;
        }

        .settings-close{
            background:  url(img/open.png) 15px 11px  no-repeat;
        }

        #option_wrapper
        {
            position: fixed;
            top: 80px;
            left:-222px;
            width: 200px;
            padding: 7px 0 23px 0;
            background-color: #fff;
            z-index: 9999999999999;
            color: #666;
            font-size: 11px;
            border: 1px solid #E1E1E1;
            border-bottom: 1px solid rgba(150, 150, 150, 0.2);
            -webkit-box-shadow: 2px 2px 0px 0px rgba(150, 150, 150, 0.1);
            -moz-box-shadow: 2px 2px 0px 0px rgba(150, 150, 150, 0.1);
            box-shadow: 2px 2px 0px 0px rgba(150, 150, 150, 0.1);
            font-family: "Helvetica Neue", "Arial";
        }
        a.wide{
            padding: 10px 20px;
            background: #f2f2f2;
            color: #666;
            font-size: 12px;
        }
        a.boxed{
            padding: 10px 20px;
            background: #f2f2f2;
            color: #666;
            font-size: 12px;
            margin-left: 15px;
        }
        a.boxed:hover, a.wide:hover{
            background: #10b9b9;
            color: #fff;
        }
        #option_wrapper .inner
        {
            width: 90%;
            margin:auto;
        }
        #bg_body_image{
            position: relative;
            float: left;
            top: 5px;
            left: 5px;
        }
        #bg_body_image a{
            width: 32px;
            height: 32px;
            opacity: .8;
        }
        #bg_body_image img{
            width: 32px;
            height: 32px;
        }

        #bg_body_image a.pattern img{
            background-attachment: fixed;
            background-repeat: repeat;
        }
        .switch-button {
            border:1px solid #fff;
            border-left:1px solid #fff;
            display:block;
            height:30px;
            width:30px;
            position:absolute;
            margin-left:152px;
            margin-top:10px;
            cursor:pointer;
        }
        #option_wrapper p{
            border-bottom: 1px solid #f8f8f8;
            border-top: 1px solid #f8f8f8;
            margin-bottom: 10px;
            margin-top: 10px;
            position: relative;
            float: left;
            width: 100%;
            text-align: center;
            right: 2px;
            font-size: 12px;
            padding: 10px 0;
        }
        #option_wrapper .button{
            top: 29px;
            position: relative;
            float: left;
            padding: 8px;
            background: #EEE;
            text-align: center;
            margin-bottom: 30px;
            left: 31px;
        }
        .open {
            background:#fff url(img/close.png) no-repeat center center;
            border-bottom: none;
        }
        .closed {
            background:#fff url(img/open.png) no-repeat center center;
            border-bottom: none;
        }

        a.closed:hover, a.open:hover {
            border-bottom: none;
        }

        #option_wrapper .skins{
            position: relative;
            float: left;
            left: 0;
            top: 5px;
            padding-bottom: 10px;
        }
        #option_wrapper .skins li{
            position: relative;
            float: left;
            margin: 0 !important;
        }
        #option_wrapper .skins a{
            position: relative;
            float: left;
            text-decoration: none;
            border: none !important;
            padding: 0;
            color: #ccc;
            text-align: center;
            font-size: 13px;
            text-indent: -9999px;
            width: 32px;
            height: 32px;
            margin: 2px;
            opacity: .8;
        }
        #option_wrapper .skins a:hover{opacity: 1;}
        #option_wrapper .skins a.blue{background: #24a0d3;}
        #option_wrapper .skins a.red{background: #d94d4d;}
        #option_wrapper .skins a.green{background: #71a615;}
        #option_wrapper .skins a.pink{background: #bd47bd;}
        #option_wrapper .skins a.violet{background: #a33da3;}
        #option_wrapper .skins a.yellow{background: #dca51b;}
        #option_wrapper .skins a.greenzap{background: #10b9b9;}
        #option_wrapper .skins a.darkblue{background: #0a79c4;}
        #option_wrapper .skins a.orange{background: #df6031;}
        #option_wrapper .skins a.brown{background: #9d7142;}
    </style>





</div>



<!-- BEGIN: BODY -->
<body class="home page">

<!-- BEGIN: ALL CONTENT -->
<div class="everything">

    <!-- BEGIN: HEADER CONTAINER -->
    <div class="header_container headerstyle-style2">

        <!-- BEGIN: HEADER -->
        <header id="header" class="container">

            <!-- BEGIN: LOGO + SLOGAN-->
            <div class="logo_and_menu">

                <!-- BEGIN: LOGO -->
                <div class="logo columns">
                    <h1>
                        <a href="index.php" tabindex="-1">
                            <!-- LOGO -->
                            <img class="logo_normal notalone" src="img/logo.png" alt="" title="">

                            <!-- LOGO RETINA -->
                            <img class="logo_retina" src="img/logo@2x.png" alt="" title="">
                        </a>
                    </h1>

                    <!-- BEGIN: SLOGAN -->
                    <div class="slogan" style="background: none;font-size: 12px;color: #;margin-top: 33px; padding-top: 8px;">Inspire, Innovate & Ignite.</div>
                </div>

                <!-- BEGIN: MENU -->
                <nav id="menu" class="columns">

                    <!-- BEGIN: DESKTOP MENU -->
                    <ul id="menulava" class="sf-menu">

                        <!-- BEGIN: MENU ITEM HOME -->
                        <li ><a href="index.php">Home</a>
                        </li>

                        <!-- BEGIN: MENU ITEM TechSparks -->
                        <li class=""><a href="techsp_15.php" >TechSparks</a>
                        </li>

                        <!-- BEGIN: MENU ITEM TechSparks -->
                        <li class=""><a href="bluemix.php" >Bluemix</a>
                        </li>

                        <!-- BEGIN: MENU ITEM News & Events -->
                        <li class=""><a href="news-events.php">News &amp; Events</a>
                        </li>

                        <!-- BEGIN: MENU ITEM Alumni -->
                        <li class=""><a href="alumni.php">Alumni</a>
                        </li>

                        <!-- BEGIN: MENU ITEM About Us -->
                        <li class=""><a href="about.php">About Us</a>
                        </li>

                        <!-- BEGIN: MENU ITEM CONTACTS -->
                        <li class=""><a href="contacts.php">Contact Us</a></li>

                    </ul>
                    <!-- END: DESKTOP MENU -->

                    <!-- BEGIN: MOBILE MENU -->
                    <div id="select-menu">
                        <select class="dropdown-menu" id="menu-primary-navigation">

                            <option value="index.php">
                                Home
                            </option>

                            <option value="techsp_15.php">
                                TechSparks
                            </option>

                            <option value="bluemix.php">
                                Bluemix
                            </option>

                            <option value="news-events.php">
                                News &amp; Events
                            </option>

                            <option value="alumni.php">
                                Alumni
                            </option>

                            <option value="about.php">
                                About us
                            </option>


                            <option value="contacts.php">
                                Contact Us
                            </option>


                        </select>
                    </div>
                    <!-- End Menu -->
                </nav>

            </div>
        </header>
        <!-- END: HEADER -->
        <div class="header-shadow"></div>

    </div>
    <!-- END: HEADER CONTAINER -->