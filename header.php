<?php require 'lib/Nijikodo/Parser.php'; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php wp_title(' - ', true, 'right'); bloginfo('name'); ?></title>
    
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons-codes.css" rel="stylesheet">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons-ie7.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons-ie7-codes.css">
    <![endif]-->
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
