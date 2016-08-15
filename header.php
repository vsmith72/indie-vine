<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
  <head>

    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords"> <!-- ADD THE KEYWORDS FOR YOUR SITE HERE -->
    <meta name="author" content="Vanessa Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--=== LINK TAGS ===-->
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Antic|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/font-awesome-cdn/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--=== TITLE ===-->
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!-- main-wrapper contains all the entire site elements -->
  <div id="wrapper">
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Add your site or application content here -->
    <header>

      <div id="logo"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="The Indie Vine" width="100%"></a></div>
      <nav>
        <ul>
          <li>
            <a href="/about/index.html"><i class="fa fa-users" aria-hidden="true"></i>About Us</a>
            <ul class="subnav">
              <li><a href="/about/faqs.html">FAQ</a></li>
              <li><a href="/about/">Who We Are &amp; Contact</a></li>
            </ul>
          </li>
          <li>
            <a href="/concerts/index.html"><i class="fa fa-music" aria-hidden="true"></i>Concerts</a>
          </li>
          <li>
            <a href="/reviews/index.html"><i class="fa fa-headphones" aria-hidden="true"></i>Reviews</a>
          </li>
        </ul>
      </nav>
      <div class="clear"></div>

    </header>
<!-- This is the end of the content that will appear at the top every page in the site -->
<!-- don't forget to close the body tag in the footer.php -->




