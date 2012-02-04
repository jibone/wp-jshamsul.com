
		
	<!-- sidebar container start -->
	<div class="sidebarContainer">
			
		<!-- sidebar panel start -->
		<?php // needs to be a wp_nav_menu option? ?>
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
							
			<div class="socialItem mail">
				<img src="<?php bloginfo('stylesheet_directory') ?>/images/mail.png" />
				<div class="text">
					<span class="bold"><?php _e('Contact', 'wp-jshamsul'); ?></span>
					<span class="normal"><a href="http://flickr.com/jibone"><?php _e('Contact', 'wp-jshamsul'); ?></a></span>
				</div>
			</div>
				
			<div class="socialItem fanboy">
				<img src="<?php bloginfo('stylesheet_directory') ?>/images/apple.png" />
				<div class="text">
					<span class="bold"><?php _e('Apple', 'wp-jshamsul'); ?></span>
					<span class="normal"><a href="http://apple.com"><?php _e('Fanboy', 'wp-jshamsul'); ?></a></span>
				</div>
			</div>
				
		</div><!-- sidebar panel ends -->
		
		<!-- sidebar panel start -->
		<?php // this needs to be able to be translated... ?>
		<div class="sidebarPanel postInformation">
			<p>This entry was posted on <span class="date"><?php the_time('F j, Y'); ?></span> at <span class="time"><?php the_time('g:i a'); ?></span> filed under <?php the_category(', '); ?><?php the_tags(' and tagged with ', ', ', ''); ?>.</p> 
			<p>You can <a href="#comments">leave a response</a> to this entry.</p>
		</div><!-- sidebar panel ends -->
			
	</div><!-- sidebar container ends -->
	