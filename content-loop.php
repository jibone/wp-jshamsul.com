
  <!-- loop container start -->
  <div class="loop-container the-loop">
    
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
        <p class="continue"><a href="<?php the_permalink(); ?>">Continue Reading</a> &rarr;</p>
        </div>
      </div><!-- post container ends -->
      
      <?php endwhile; // post loop end ?>
      
      <div class="item-container">
        <p>
          <span class="button">
            <a href="/archive">Archive</a> &rarr;
          </span>
        </p>
      </div>
      
    <?php else : get_template_part('content', 'error'); endif;?>
  
  </div><!-- loop container ends -->
