<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php wp_title(' - ', true, 'right'); bloginfo('name'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/icon-fonts.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/icon-fonts-codes.css" rel="stylesheet">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/icon-fonts-ie7.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/icon-fonts-ie7-codes.css">
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
    
    <div class="header-container section-container">
      <div class="line-container">
        <span class="line-content content-left logo-name"><span class="bold">js</span>hamsul.com</a></span>
        <span class="line-content content-right"><i class="icon-home"></i></span>
      </div>
      <div class="content-container top-navigation">
        <a href="/about"><span class="bold">A</span>bout</a>
        <a href="/project"><span class="bold">P</span>rojects</a>
        <a href="/contact"><span class="bold">C</span>ontact</a>
      </div>
    </div>
    
    <div class="bio-container section-container">
      <div class="line-container">
        <span class="line-content content-left">Avatar</span>
        <span class="line-content content-right">bla</span>
      </div>
      <div class="content-container">
        <p>This is the website of J.Shamsul (@jibone), a web developer based in
        Kuala Lumpur, Malaysia. He make websites for fun and profit, writes and 
        manages <a href="http://jiboneus.com">jiboneus.com</a> and 
        <a href="http://wirawanweb.com">wirawanweb.com</a>. Works at 
        <a href="http://ezypzy.com">EzyPzy</a>.</p>
      </div>
    </div>
    
    <div class="post-container section-container">
      <div class="line-container">
        <span class="line-content content-left">Post</span>
        <span class="line-content content-right">bla</span
      </div>
      <div class="content-container">
        <h1><a href="">This is a title for the post</a></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a 
        mi neque, sit amet adipiscing ipsum. Curabitur vitae nulla sapien, a mattis 
        lectus. Sed adipiscing, quam gravida sollicitudin tristique, neque metus 
        euismod felis, sed pellentesque risus nibh a urna.</p>
        <p><a href="">Read more...</a></p>
      </div>
    </div>
    
    <?php wp_footer(); ?>
    
  </body>
</html>
