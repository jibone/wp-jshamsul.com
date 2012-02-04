<?php
// 
//  archive.php
//  wp-jshamsul.com
//  
//  Created by J Shamsul on 2012-02-03.
//  Copyright 2012 J Shamsul. All rights reserved.
// 
get_header(); ?>

	<!-- body container start -->
	<div class="bodyContainer">
		
		<!-- page container start -->
		<div class="contentContainer">
			
			<!-- content start -->
			<div class="content">
				
				<h1 class="bigTitle">
					
					<?php if(is_day()) : ?>
						<?php printf( __( 'Daily Archives: %s', 'wp-jshamsul' ), '<span>' . get_the_date() . '</span>' ); ?>
					<?php elseif(is_month()) : ?>
						<?php printf( __( 'Monthly Archives: %s', 'wp-jshamsul' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
					<?php elseif(is_year()) : ?>
						<?php printf( __( 'Yearly Archives: %s', 'wp-jshamsul' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
					<?php else : ?>
						<?php _e( 'Blog Archives', 'wp-jshamsul' ); ?>
					<?php endif; ?>
					
				</h1>
				
				<?php if(is_month() || is_day()) : ?>
					
				<div class="return">&larr; <a href="<?php bloginfo('url'); ?>/archive">Return to archive</a></div>	
				
				<?php
					query_posts($query_string."&posts_per_page=-1"); 
					while(have_posts()) : 
						the_post(); 
						get_template_part('content');
					endwhile;
				?>
				
				<!-- previous and next navigation container start -->
				<div class="previousNextContainer">
					<span class="previous linkButton"><?php next_posts_link(__('<span class="arrow">&larr;</span> Older posts', 'wp-jshamsul')); ?></span>
					<span class="next linkButton"><?php previous_posts_link(__('Newer posts <span class="arrow">&rarr;</span>', 'wp-jshamsul')); ?> </span>
				</div><!-- previous and next navigation container ends -->
				
				
				<?php else : ?>
				
				<!-- archive list container start -->
				<div class="archiveListContainer">
					
					<?php // -- get the full archive and format it just the way I wanted it to be :)
						$string = wp_get_archives('type=monthly&format=custom&show_post_count=0&echo=0');
						$string = strip_tags($string);
						$string = explode("\n", trim($string));
						
						$c = count($string); 
						for($i = 0; $i < $c; $i++) {
							$exp = explode(" ", $string[$i]);
							if(is_array($data[$exp[1]])) {
								array_push($data[$exp[1]], $exp[0]);
							} else {
								$data[$exp[1]] = array( $exp[0] );
							}
						}
					?>
					
					<ul class="archiveYearList">
					
					<?php foreach ($data as $year => $month_arr) : ?>
					
						<li class="year">
							<span class="yearBigText"><?php _e($year); ?></span>
							<ul class="monthList">
							
							<?php foreach($month_arr as $month) : ?>
							
								<li class="month">
									<a href="<?php bloginfo('url'); ?>/<?php _e($year); ?>/<?php _e(date('m',strtotime($month))); ?>/">
										
										<?php _e($month ." "); ?> <span class="arrow">&rarr;</span>
									
									</a> 
								</li>
							
							<?php endforeach; ?>
							
							</ul>
						</li>
						
					<?php endforeach; ?>
					
					</ul>	
				</div><!-- archive list container ends -->
				
				<?php endif; ?>
				
			</div><!-- content ends -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- page container ends -->
		
		<?php  get_template_part('navigation'); ?>
				
	</div><!-- body container ends -->
	<div id="sticky-bottom"></div>
	
<?php get_footer(); ?>
