<?php
// 
//  single.php
//  wp-jshamsul.com
//  
//  Created by J Shamsul on 2012-02-01.
//  Copyright 2012 J Shamsul. All rights reserved.
// 
get_header(); ?>

	<!-- body container start -->
	<div class="bodyContainer">
		
		<!-- page container start -->
		<div class="contentContainer">
			
			<!-- content start -->
			<div class="content">
				
				<?php if(have_posts()) : ?>
				
					<?php /* Start the Loop */ ?>
					<?php while(have_posts()) : the_post(); ?>
					
						<?php get_template_part('content', 'single'); ?>
						
					<?php endwhile; ?>
					
					<?php comments_template('', true); ?>
				
				<?php else : ?>
					
					<div class="postError">
						<h1><?php _e('Nothing to see here.', 'wp-jshamsul'); ?></h1>
						
						<div class="postContent">
							<p><?php _e('No result were found.', 'wp-jshamsul'); ?></p>
						</div>
					</div>
					
				<?php endif; ?>
				
			</div><!-- content ends -->
			
			<?php get_sidebar('post'); ?>
			
		</div><!-- page container ends -->
		
		<?php  get_template_part('navigation'); ?>
				
	</div><!-- body container ends -->
	<div id="sticky-bottom"></div>
	
<?php get_footer(); ?>

