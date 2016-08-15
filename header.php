<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords"> <!-- ADD THE KEYWORDS FOR YOUR SITE HERE -->
    <meta name="author" content="Vanessa Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--=== LINK TAGS ===-->
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/images/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!--=== TITLE ===-->
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
		<!-- main-wrapper contains all the entire site elements -->
		<div id="wrapper">
            <div class="cb-1" id="header-fixed"> <!-- colorblock 1 - header -->
                <header class="header-fixed"><!-- header-fixed contains - nav-top | social | search -->
                    <!-- navigation top nav -->
                    <nav class="nav-top">
                        <ul class="nav-top">
                            <li class="nav-top"><a href="#home">home</a></li>
                            <li class="nav-top"><a href="#about">about</a></li>
                            <li class="nav-top"><a href="#contact">contact</a></li>
                        </ul>
                    </nav><!-- end top nav -->
                    <!-- social buttons -->
                    <aside class="social-top">
                        <p>&nbsp;&#124;&nbsp;<img src="images/facebook32.png" height="24" width="24" />
                        <img src="images/pinterest32.png" height="24" width="24" />
                        <img src="images/instagram32.png" height="24" width="24" />
                        <img src="images/rss32.png" height="24" width="24" /></p>
                    </aside><!-- end social -->
                    <!-- this will clear the float -->
                    <div class="clear"></div><!-- end clear -->
                </header><!-- end header-wrapper -->
            </div><!-- end colorblock -->
            <div class="cb-2"> <!-- colorblock 2 - banner | nav-main -->
                <section class="banner-wrapper">
                    <header class="banner"><img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" /></header><!-- end banner -->
                    <!-- main menu  this the category menu  Only on homepage -->
                    <nav class="nav-main">
                        <ul class="nav-main">
                                <li class="nav-main"><a href="#starthere">Start Here</a></li>
                                <li class="nav-main"><a href="#cards">Handmade Cards</a></li>
                                <li class="nav-main"><a href="#diy">DIY Home Decor</a></li>
                                <li class="nav-main"><a href="#fav"><span class="nav-main">I Love This!</span></a></li>
                            </ul>
                    </nav><!-- end main menu -->
                </section>
            </div><!-- end colorblock -->
            <div class="cb-3"> <!-- colorblock 3 newsletter -->
                <!-- newsletter banner -->
                <aside class="newsletter-banner sb-news-top">
                    <p class="newsletter-banner">
    <span class="newsletter-banner">Welcome!</span> Be sure to <span class="newsletter-banner">subscribe</span> to the newsletter!
</p>
<form class="inline-form" action="http://myinky-fingers.us13.list-manage.com/subscribe/post" method="POST">
<input type="hidden" name="u" value="7376f773b0796a9c333533dda">
<input type="hidden" name="id" value="d61925ab52">
    <input class="newsletter-banner" type="text" name="name" placeholder="First Name" name="MERGE1" id="MERGE1">
    <input class="newsletter-banner" type="email" name="email" placeholder="Email Address" name="MERGE0" id="MERGE0">
    <input class="newsletter-banner" type="submit" value="Join Today" >
</form>
                </aside><!-- end newsletter banner -->
            </div><!-- end colorblock -->
            <!-- This is the end of the content that will appear at the top every page in the site -->
            <!-- don't forget to close the body tag in the footer.php -->




