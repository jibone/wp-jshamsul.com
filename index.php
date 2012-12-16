<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php wp_title(' - ', true, 'right'); bloginfo('name'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons-codes.css" rel="stylesheet">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/fontello-fonts-ie7.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/fontello-fonts-ie7-codes.css">
    <![endif]-->
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
    
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
    <!-- page container start-->
    <div class="page-container">
      <!-- navigation container start -->
      <div class="navigation-container">
        <div class="section">
          <div class="logo-container">
            <a href=""><span class="bold">jS</span>hamsul.com</a>
          </div>
          <div class="navigation dropdown">
            <a href="#" class="dropdown-toggle" id="navi-drop" role="button" data-toggle="dropdown">Navigation <i class="icon-down-open-mini"></i></a>
            <ul id="navi-menu" class="dropdown-menu" role="menu" ara-labelledby="navi-drop">
              <li><a href="">About</a></li>
              <li><a href="">Projects</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>
        </div>
      </div><!-- navigation container ends -->
      
      <!-- content container start -->
      <div class="content-container">
        <!-- info container start -->
        <div class="info-container">
          <div class="section">
            <div class="profile-pic">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/profile-pic.jpg">
            </div>
            <div class="blog-description">
              <p>This is the web home of J.Shamsul (@jibone), a web
              developer based in Kuala Lumpur, Malaysia. He maintains
              and writes on Jiboneus.com and Wirawanweb. Right now working
              at EzyPzy.</p>
            </div>
          </div>
        </div><!-- info container ends -->
        <!-- loop container start -->
        <div class="loop-container">
          <div class="post-container">
            <div class="post-header">
              <div class="post-date">Monday, 23rd December 2012</div>
              <h1><a href="">This is the post title</a></h1>
            </div>
            <div class="post-body"></div>
          </div>
        </div><!-- loop container ends -->
      </div><!-- content container ends -->
      
      <!-- sidebar container start -->
      <div class="sidebar-container">
      
      </div><!-- sidebar container ends -->
    </div><!-- page container ends -->
    
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery-1.8.3.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js" ></script>
    
    <?php wp_footer(); ?>
    
  </body>
</html>
