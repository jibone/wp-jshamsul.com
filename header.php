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
    <header class="row">
      <div class="container">
        <div class="span1">
          <span class="icon-container">
            <a href="" class="logo"><span class="icon-text">jS</span></a>
          </span>
        </div>
        <div class="span8">
          <ul class="nav nav-pills top-nav">
            <li><a href="/">jShamsul.com</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
        <div class="span3"></div>
      </div>
    </header><!-- header container ends -->
 
