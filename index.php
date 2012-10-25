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
    
    <article class="row">
      <div class="container">
        <section class="span1">
          <span class="icon-container"></span>
        </section>
        
        <div class="span7">
          <h1>
            <p>Hi, welcome.</p>
            <p>My name is J.Shamsul Bahri.</p>
          </h1>
          <p>I am a web producer based in Kuala Lumpur, Malaysia. I make websites for fun and 
          profit. I also maintain and writes on <a href="http://jiboneus.com">jiboneus.com</a> 
          and <a href="http://wirawanweb.com">wirawanweb.com</a>.</p>
          
          <p>This is my website. Most of the time I write about HTML5, CSS3, JavaScript and PHP, as 
          well as anything else related to web and web development. Occasionally I do write about 
          things not related web development.</p>
          
          <p>Of course you can also find me on Twitter, Facebook, Tumblr, Google+ and many more.</p>
        </div>
        
        <section class="span3 side-icons">
          <span class="side-icon">
            <span>RSS feed</span>
            <span><a href="">Subscribe</a></span>
          </span>
          <span class="side-icon">
            <span>Twitter</span>
            <span><a href="">Follow</a></span>
          </span>
        </section>
      </div>
    </article>
    
    <!-- footer container start -->
    <footer>
      <div class="container">
        <div class="span1">
          <p>&nbsp;</p>
        </div>
        <div class="span9">
          <p>&copy; Copyright 2012. jshamsul.com by J.Shamsul (@jibone). All rights reserved, unless stated otherwise.</p>
        </div>
      </div>
    </footer><!-- footer container ends -->
    
    <?php wp_footer(); ?>
    
  </body>
</html>
