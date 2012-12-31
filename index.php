<?php
/*
 *  index.php
 *  wp-jshamsul.com
 *
 *  Created by J Shamsul on 2012-12-29.
 *  Copyright 2013 J Shamsul. All rights reserved.
 */
 get_header(); ?>
    
    <!-- page container start-->
    <div class="page-container">
      
      <?php get_template_part('navigation'); ?>
      
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
              developer</strong> based in Kuala Lumpur, Malaysia. This is my 
              personal website.</p>
              <p>
              <a href="https://twitter.com/jibone" class="twitter-follow-button" data-show-count="false">Follow @jibone</a>
              </p>
            </div>
          </div>
        </div><!-- info container ends -->
        
        <?php get_template_part('content','loop'); ?>
      
      </div><!-- content container ends -->
      
      <?php get_sidebar(); ?>
      
    </div><!-- page container ends -->
    
<?php get_footer(); ?>
