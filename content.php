
	<!-- content type quote start -->
	<div class="post postStandard">
		
		<div class="postHeader">
			<div class="postTitle">
				<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
			</div>
			<div class="postMeta">
				<span class="postDate"><?php the_time('j M Y'); ?></span>
			</div>
		</div>
		
		<div class="postBody">
			
			<?php 
				if($pos = strpos($post->post_content, '<!--more-->')) :
					the_content(__(''));
				else :
					echo get_the_content_first_paragraph();
				endif;
			?>
		
		</div>
		
		<div class="postFooter">
			<a href="">Continue reading &rarr;</a>
		</div>
		
		
		
	</div><!-- content type quote end -->
	