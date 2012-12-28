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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons-ie7.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/jshamsul-icons-ie7-codes.css">
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
          <div class="navigation">
            <a href="#" id="menu-btn">Menu <i class="icon-menu"></i></a>
          </div>
        </div>
      </div><!-- navigation container ends -->
      <!-- navigation menu container start -->
      <div class="menu-container">
        <ul class="menu">
          <li><a href="">About</a></li>
          <li><a href="">Projects</a></li>
          <li><a href="">Contact</a></li>
        </ul>
      </div><!-- navigation menu container ends -->
      
      <!-- content container start -->
      <div class="content-container">
        <!-- info container start -->
        <div class="info-container">
          <div class="section">
            <div class="profile-pic">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/profile-pic.jpg">
            </div>
            <div class="blog-description">
              <p>My name is <strong>J.Shamsul Bahri</strong>. I am a <strong>web
                developer</strong> based in Kuala Lumpur, Malaysia.</p>
              <p>
              <a href="https://twitter.com/jibone" class="twitter-follow-button" data-show-count="false">Follow @jibone</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              </p>
            </div>
          </div>
        </div><!-- info container ends -->
        <!-- loop container start -->
        <div class="loop-container">
            
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            
            <!-- post container start -->
            <div class="post-container">
              <div class="post-header">
                <div class="post-date"><?php the_time('j M Y'); ?></div>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              </div>
              <div class="post-body">
              
              <?php 
                if($pos = strpos($post->post_content, '<!--more-->')) : the_content(__(''));
                else : echo get_first_paragraph();
                endif;
              ?>
              
              </div>
            </div><!-- post container ends -->

            <?php endwhile; ?>

            <?php else : ?>
            
            <div class="post-container">
              <div class="post-header">
                <h1>Page Not Found. 404.</h1>
              </div>
              <div class="post-body">
                <p>The page you are looking for could not be found. You might want to try the
                <a href="/archive">archive</a>.</p>
              </div>
            </div>

          <?php endif; ?>
        </div><!-- loop container ends -->
      </div><!-- content container ends -->
      
      <!-- sidebar container start -->
      <div class="sidebar-container">
      
      </div><!-- sidebar container ends -->
    </div><!-- page container ends -->
    
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery-1.8.3.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/bootstrap.min.js" ></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jshamsul.js"></script>
    
    <?php wp_footer(); ?>
    
  </body>
</html>
