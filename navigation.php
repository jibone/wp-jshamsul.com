	
	<!-- navigation container start -->
	<div id="sticky-anchor"></div>
	<div class="navigationContainer" id="sticky">
		<div class="logoContainer">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo('stylesheet_directory') ?>/images/logo.gif" alt="J Shamsul, Web Producer" />
			</a>
		</div>
		
		<?php 
			if(is_page()) { $menu_param = array('theme_location' => 'primary'); } 
			else { $menu_param = array('menu' => 'Blog'); }
			wp_nav_menu($menu_param); 
		?>
		
	</div><!-- navigation container ends -->
	