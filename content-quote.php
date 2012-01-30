	
	<!-- content type quote start -->
	<div class="post postQuote">
		
		<div class="postTitle">
			<div class="quoteText">	
				<?php 
					$content = get_the_content();
					$content = wpautop($content); 
					echo $content;  
				?> 	
			</div>	
			<div class="quoteFrom"> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		</div>
		<div class="postMeta">
			<span class="postDate"><?php the_time('j M Y'); ?></span>
		</div>
		
	</div><!-- content type quote end -->