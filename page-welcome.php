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
				<div class="postContainer">
				
				<div class="postHeader">
					<div class="postTitle">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
		
				<div class="postBody">
			
					<?php the_post(); the_content(__('')); ?>
		
				</div>				
				
				</div>
			</div><!-- content ends -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- page container ends -->
		
		<?php  get_template_part('navigation'); ?>
		
	</div><!-- page container ends -->
	<div id="sticky-bottom"></div>

<?php get_footer(); ?>
