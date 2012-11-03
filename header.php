<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php wp_title(' - ', true, 'right'); bloginfo('name'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/icon-fonts.css" rel="stylesheet">
    <!--[if IE 7]
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/icon-fonts-ie7.css" rel="stylesheet">
    <![endif]-->
  
    <link rel='alternate' type='application/rss+xml' title='<?php bloginfo('name'); ?> RSS Feed' href='' />
    <link rel='pingback' href='<?php bloginfo('pingback_url'); ?>' />
    <link rel="image_src" href="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" />
    <link rel='alternate' type='application/rss+xml' title='<?php bloginfo('name'); ?> RSS Feed' href='http://feeds.feedburner.com/jshamsulcom' />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    
  </head>
  <body>
  
    <!-- header container start -->
    <header class="row top-header">
      <div class="container">
        <section class="span1">
          <span class="icon-container">
            <a href="" class="logo"><span class="icon-text">jS</span></a>
          </span>
        </section>
        <nav class="span8">
          <?php wp_nav_menu(array(
            'theme_location'  => 'header_navigation',
            'container'       => false,
            'items_wrap'      => '<ul id="%1$s" class="nav nav-pills top-nav">%3$s</ul>'
          )); ?>
        </nav>
        <section class="span3"></section>
      </div>
    </header><!-- header container ends -->
 
