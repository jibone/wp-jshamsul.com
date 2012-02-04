
	<!-- content type quote start -->
	<div class="postContainer">
		
		<div class="postHeader">
			<div class="postTitle">
				<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
			</div>
			<div class="postMeta">
				<span class="postDate"><?php the_time('j M Y'); ?></span>
			</div>
		</div>
		
		<div class="postBody">
			
			<?php the_content(__('')); ?>
		
		</div>
		
		<div class="postNavigation">
			<span class="previous"><?php previous_post_link('Previous: %link &rarr;'); ?></span>
			<span class="next"><?php next_post_link('Next: %link &rarr;'); ?></span>
		</div>
		
		<div class="postFooter">
			
		</div>
		
	</div><!-- content type quote end -->
	