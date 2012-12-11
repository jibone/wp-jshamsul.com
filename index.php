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
      <!-- left container start -->
      <div class="left-container clearfix">
        <div class="logo-container">
          <img src="<?php bloginfo('stylesheet_directory') ?>/img/logo.gif" alt="J Shamsul, Web Developer from Kuala Lumpur.">
        </div>
        <div class="navigation dropdown navi-dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Navigation <i class="icon-menu"></i></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="">Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Archive</a></li>
          </ul>
        </div>
        <div class="navigation navi-links">
          <ul class="menu-links">
            <li><a href="">Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Archive</a></li>
          </ul>
        </div>

      </div><!-- left container ends -->
      
      <!-- middle container start -->
      <div class="middle-container">
        
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          
          <div class="post-container">
            <div class="post-meta">
              <div class="post-date">
                <span><?php the_time('j M Y'); ?></span>
              </div>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </div>
            <div class="post-content">
            <?php 
              if($pos = strpos($post->post_content, '<!--more-->')) :
                the_content(__(''));
              else :
                echo get_first_paragraph();
              endif;
            ?>
            <p><a href="<?php the_permalink(); ?>">Continue reading &rarr;</a></p>
            </div>
          </div>
          
          <?php endwhile; ?>
        <?php else : ?>
        <div class="post-container">
          <div class="post-meta">
            <h1>Error. Page Not Found.</h1>
          </div>
          <div class="post-content">
            <p>Nothing to see here.</p>
          </div>
        </div>
        <?php endif;?>

      </div><!-- middle container ends -->
      
      <!-- right container start -->
      <div class="right-container">
        <!-- [TODO] widgetize this -->
        <div class="socialicons">
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/rss.png">
            <span class="text">RSS Feed</span>
            <span class="link"><a href="http://feeds.feedburner.com/jshamsulcom">subscribe</a></span>
          </div>
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png">
            <span class="text">Twitter</span>
            <span class="link"><a href="http://twitter.com/jibone">follow</a></span>
          </div>
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png">
            <span class="text">RSS Feed</span>
            <span class="link"><a href="http://facebook.com/jshamsul">friend</a></span>
          </div>
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/google.png">
            <span class="text">Google+</span>
            <span class="link"><a href="https://plus.google.com/110139302180508107868/">connect</a></span>
          </div>
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/tumblr.png">
            <span class="text">Tumblr</span>
            <span class="link"><a href="http://jibone.tumblr.com">reblog</a></span>
          </div>
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/flickr.png">
            <span class="text">Flickr</span>
            <span class="link"><a href="https://flickr.com/jibone">photos</a></span>
          </div>
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/mail.png">
            <span class="text">Email</span>
            <span class="link"><a href="http://facebook.com/jshamsul">contact</a></span>
          </div>
          <div class="socialicon-container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/github.png">
            <span class="text">Github</span>
            <span class="link"><a href="https://github.com/jibone">code</a></span>
          </div>
        </div>
      </div><!-- right container ends -->
    </div><!-- page container ends -->
    
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery-1.8.3.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js" ></script>
    
    <?php wp_footer(); ?>
    
  </body>
</html>
