<?php get_header(); ?>

  <body>
    <!-- page container start -->
    <div class="page-container">
      
      <?php get_template_part('navigation'); ?>
      
      <!-- content container start -->
      <div class="content-container">
        
        <?php get_template_part('content','single'); ?>
        
      </div><!-- content container ends -->
      
      <?php get_sidebar(); ?>
      
    </div><!-- page container ends -->
  </body>

<?php get_footer(); ?>
