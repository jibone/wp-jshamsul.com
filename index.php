<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    
    <meta charset=<?php bloginfo('charset'); ?>>
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
    
    <div class="fauxcolumn"></div>
    
    <!-- main container start -->
    <section class="container">
      <!-- sidebar container start -->
      <section class="sidebar-container">
        <nav>
          <ul>
            <li class="logo"><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif"></a></li>
            <li class="link"><a href="">About</a></li>
            <li class="link"><a href="">Projects</a></li>
            <li class="link"><a href="">Contact</a></li>
          </ul>
        </nav>
      </section><!-- sidebar container ends -->
      <!-- page container start -->
      <section class="page-container">
        <article>
          <header class="article-header">
            <h1>
              <p>Hi, welcome.</p>
              <p>My name is J.Shamsul Bahri.</p>
            </h1>
          </header>
          <section class="article-content">
            <p>I am a web producer based in Kuala Lumpur, Malaysia. I make websites for fun and 
            profit. I also maintain and writes on jiboneus.com and wirawanweb.com.</a>
            
            <p>This is my website. I sometimes write about HTML5, CSS3, JavaScript and PHP, as 
            well as anything else related to the web. Occasionally I do write things other than 
            web development.</p>
            
            <p>Of course you can also find me on Twitter, Facebook, Tumblr, Google+ and 
            many more.</p>
            
            <p><a href="">Read the blog &rarr;</a></p>
          </section>
        </article>
      </section><!-- page container ends -->
    </section><!-- main container ends -->
    
    <?php wp_footer(); ?>
    
  </body>
</html>
