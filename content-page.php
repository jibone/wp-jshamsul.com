
  <!-- loop content container -->
  <div class="loop-container single-post">
  
    <?php if(have_posts()) : the_post(); ?>
      
    <!-- post container start -->
    <div class="post-container">
      <div class="post-header">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>
      <div class="post-body">
        
        <?php the_content(); ?>
        
      </div>
    </div><!-- post container ends -->

    <?php else : get_template_part('content', 'error'); endif; ?>
  
  </div>
  <!-- loop content container -->
