
  <!-- loop container start -->
  <div class="loop-container single-post">
  
    <?php if(have_posts()) : the_post(); ?>
    
    <!-- post container start -->
    <div class="post-container">
      <div class="post-header">
        <div class="post-date"><?php the_time('j M Y'); ?></div>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </div>
      <div class="post-body">
        
        <?php the_content(); ?>
        
      </div>
    </div><!-- post container ends -->
    
    <!-- share container start -->
    <div class="share-container">
      <p>
      <span>Did you enjoy this post? Share it with your friends:</span>
      <span><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-lang="en">Tweet</a> <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(the_permalink()); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=128979620479922" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px; margin-top:1px;" allowTransparency="true"></iframe></span>
      </p>
    </div>
    <!-- share container ends -->
    
    <!-- get in touch container start -->
    <div class="share-container">
      <p>Have something to say about this post? Get in touch with me on Twitter, will discuss more. <a href="https://twitter.com/jibone" class="twitter-follow-button" data-show-count="false">Follow @jibone</a></p>
    </div><!-- get in touch container ends -->
    
    <!-- next previous container start -->
    <div class="next-previous-container">
      <p>
      <span class="previous"><?php previous_post_link('Previous: %link'); ?></span>
      <span class="next"><?php next_post_link('Next: %link'); ?></span>
      <span class="home">Home: <a href="/">Back to blog</a> &rarr;</span>
      </p>
    </div><!-- next previous container ends -->
    
    <?php else : get_template_part('content', 'error'); endif; ?>
  
  </div><!-- loop container ends -->
