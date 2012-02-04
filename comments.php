
	<!-- comments container start -->
	<div class="commentsContainer">
		<a name="comments"></a>
		
		<?php if(post_password_required()) : ?>
		
		<!-- password required start  -->
		<div class="commentsContent passwordRequired">
			<p><?php _e('This post is password protected. Enter the password to view any comments', 'wp-jshamsul'); ?></p>
		</div><!-- passqord required ends -->
		
		<?php return; endif; ?>
		
		<h1>
			<?php
				$comment_number = get_comments_number();
				if($comment_number == 1) {
					_e('One comment on &ldquo;'. get_the_title() .'&rdquo;', 'wp-jshamsul');
				} elseif($comment_number == 0) {
					_e('Be the first to comment on &ldquo;'. get_the_title() .'&rdquo;', 'wp-jshamsul');
				} else {
					_e(ucfirst(convert_number(number_format_i18n($comment_number))) .' comments on &ldquo;'. get_the_title() .'&rdquo;', 'wp-jshamsul');
				}
			?>
		</h1>
		
		<?php if(have_comments()) : ?>
		
		<div class="commentsContent commentList">
			<ul class="commentListContainer">
			
			<?php wp_list_comments(array(
				"type" => "comment",
				"avatar_size" => 48
			)); ?>
			
			</ul>
		</div>
		
		<?php elseif(!comments_open() && !is_page() && post_type_support(get_post_type(), 'comments')) : ?>
		
		<!-- comments close container start  -->
		<div class="commentsContent commentsClose">
			<p><?php _e('Comments are close.', 'wp-jshamsul'); ?></p>
		</div><!-- comments close container ends -->
			
		<?php endif; ?>
		
		<div class="commentsContent commentForm">
			
			<?php comment_form(); ?>
			
		</div>
		
	</div><!-- comments container ends -->
	