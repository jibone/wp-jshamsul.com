
		
	<!-- sidebar container start -->
	<div class="sidebarContainer">
			
		<?php  get_template_part('social-icons'); ?>
		
		<!-- sidebar panel start -->
		<?php // -- this needs to be able to be translated... ?>
		<div class="sidebarPanel postInformation">
			<p>This entry was posted on <span class="date"><?php the_time('F j, Y'); ?></span> at <span class="time"><?php the_time('g:i a'); ?></span> filed under <?php the_category(', '); ?><?php the_tags(' and tagged with ', ', ', ''); ?>.</p> 
			<p>You can <a href="#comments">leave a response</a> to this entry.</p>
		</div><!-- sidebar panel ends -->
			
	</div><!-- sidebar container ends -->
	