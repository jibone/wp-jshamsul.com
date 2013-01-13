<?php get_header(); ?>

  <!-- page container start -->
  <div class="page-container">
  
    <?php get_template_part('navigation'); ?>
    
    <!-- archive container start -->
    <div class="content-container">
      <h1 class="archive">
      <?php 
        if(is_day()) :
          printf(__('Daily Archive: %s', 'wp-jshamsul'), '<span>'. get_the_date() .'</span>');
        elseif(is_month()) :
          printf(__('Monthly Archive: %s', 'wp-jshamsul'), '<span>'. get_the_date(_x('F Y', 'monthy archive date format', 'wp-jshamsul')) .'</span>');
        elseif(is_year()) :
          printf(__('Yearly Archive: %s', 'wp-jshamusl'), '<span>'. get_the_date(_x('Y', 'yearly archives date format', 'wp-jshamsul')) .'</span>');
        else :
          echo "<span>". __('Blog Archive', 'wp-jshamsul') ."</span>";
        endif;
      ?>
      </h1>
      <?php if(is_month() || is_day()) : ?>
        <?php 
          query_posts($query_string."posts_per_page=-1");
          get_template_part('content', 'loop');
          get_sidebar(); 
          get_template_part('copyright'); 
        ?>
      <?php else : ?>
      
      <!-- archive list container start -->
      <div class="archive-list-container">
      
        <?php
          $string = wp_get_archives('type=monthly&format=custom&show_post_count=0&echo=0');
          $string = strip_tags($string);
          $string = explode("\n", trim($string));
          $c = count($string);
          for($i = 0; $i < $c; $i++) {
            $exp = explode(" ", $string[$i]);
            if(is_array($data[$exp[1]])) {
              array_push($data[$exp[1]], $exp[0]);
            } else {
              $data[$exp[1]] = array($exp[0]);
            }
          }
        ?>
        
        <ul class="archive-year-list unstyled">
        
          <?php foreach($data as $year => $month_arr) :?>
          
          <li class="year">
            <span class="big-text"><?php _e($year); ?></span>
            <ul class="month-list unstyled">
              
              <?php foreach($month_arr as $month) : ?>
              
              <li class="month">
                <a href="<?php bloginfo('url'); ?>/<?php _e($year); ?>/<?php _e(date('m', strtotime($month))); ?>"><?php _e($month. " "); ?> <span class="arrow">&rarr;</span></a>
              </li>
              
              <?php endforeach; ?>
              
            </ul>
          </li>
          
          <?php endforeach; ?>
        
        </ul>
        
      </div><!-- archive list container ends -->
      
      <?php endif; ?>
      
    </div><!-- archive container ends-->
  
  </div><!-- page container ends-->

<?php get_footer(); ?>
