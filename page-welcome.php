<?php
/*
Template Name: welcome
*/

get_header(); ?>

	<!-- body container start -->
	<div class="bodyContainer">
		
		<!-- page container start -->
		<div class="contentContainer">
			
			<!-- content start -->
			<div class="content">
				
				<h1><?php the_title(); ?></h1>
				
				<?php the_post(); the_content(); ?>
				
			</div><!-- content ends -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- page container ends -->
		
		<?php  get_template_part('navigation'); ?>
		
	</div><!-- page container ends -->

<?php get_footer(); ?>
