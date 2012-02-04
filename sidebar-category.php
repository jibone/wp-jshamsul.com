

		
	<!-- sidebar container start -->
	<div class="sidebarContainer">
					
		<!-- sidebar panel start -->
		<!-- needs to be a wp_nav_menu option? -->
		<div class="sidebarPanel socialButtons">
				
			<div class="socialItem rss">
				<img src="<?php bloginfo('stylesheet_directory') ?>/images/rss.png" />
				<div class="text">
					<span class="bold"><?php _e('RSS Feed', 'wp-jshamsul'); ?></span>
					<span class="normal"><a href="http://feeds.feedburner.com/jshamsulcom"><?php _e('Subscribe', 'wp-jshamsul'); ?></a></span>
				</div>
			</div>
				
			<div class="socialItem twitter">
				<img src="<?php bloginfo('stylesheet_directory') ?>/images/twitter.png" />
				<div class="text">
					<span class="bold"><?php _e('Twitter', 'wp-jshamsul'); ?></span>
					<span class="normal"><a href="http://twitter.com/jibone"><?php _e('Follow', 'wp-jshamsul'); ?></a></span>
				</div>
			</div>
											
		</div><!-- sidebar panel ends -->
		
		<!-- sidebar panel start -->
		
		<?php
			$thisCat = get_category(get_query_var('cat'),false);
			$recent = new WP_Query('posts_per_archive_page=1&cat=' . $thisCat->cat_ID);
		?>
		
		<div class="sidebarPanel postInformation">
			<p><?php _e($thisCat->category_description); ?></p>
			<p>There are <?php _e(convert_number($thisCat->count)) ?> entry filed under <span class="line"><?php _e($thisCat->cat_name); ?></span>. The most recent post was published on <span class="date"><?php _e(date("l jS \of F Y h:i:s a", strtotime($recent->posts[0]->post_date))); ?></span>.</p>
		</div><!-- sidebar panel ends -->
			
	</div><!-- sidebar container ends -->
	
	