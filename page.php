<?php get_header(); ?>

  <!-- page container start -->
  <div class="page-container">
  
    <?php get_template_part('navigation'); ?>
    
    <!-- content container start -->
    <div class="content-container">
    
      <?php
        get_template_part('content', 'page');
        get_sidebar();
        get_template_part('copyright');
      ?>
      
    </div>
    <!-- content container ends -->
  </div>
  <!-- page container ends -->

<?php get_footer(); ?>
