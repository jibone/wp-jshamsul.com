<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<title>
		<?php wp_title(' - ', true, 'right'); ?> 
		<?php bloginfo('name'); ?>
	</title>
	
	
	
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/jshamsul.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/sunburst.css" />
	
	<link rel='alternate' type='application/rss+xml' title='<?php bloginfo('name'); ?> RSS Feed' href='' />
	<link rel='pingback' href='<?php bloginfo('pingback_url'); ?>' />
	<link rel="image_src" href="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" />
	<link rel='alternate' type='application/rss+xml' title='<?php bloginfo('name'); ?> RSS Feed' href='http://feeds.feedburner.com/jshamsulcom' />
	
	<?php // -- set the Facebook Open Graph thinggy ?>
	<?php if(is_single() || is_page()) : the_post(); ?>
	
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo strip_tags(get_the_title()); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?> " />
	<meta property="og:site_name" content="<?php bloginfo('name') ?>" />
		
		<?php if(empty( $post->post_excerpt )) : // -- check or excerpt start ?>
		
	<meta property="og:description" content="<?php echo strip_tags(get_the_content_first_paragraph($include_image == false)); ?>" />
		
		<?php else : ?>
			
	<meta property="og:description" content="<?php the_excerpt(); ?>" />
		
		<?php endif; // check for excerpt ends ?>
		<?php if(has_post_thumbnail()) : // -- check if post has thumbnail or image or not.  ?>
			
	<meta property="og:image" content="<?php the_post_thumbnail(); ?>" />
		
		<?php else : // -- if post has not feature image
				$att = get_children(array(
					'post_type' => 'attachment', 
					'post_mime_type' => 'image', 
					'post_parent' => $post->ID
				));  ?>
			<?php if(count($att) > 0) : foreach($att as $k => $v): // -- check if there is an image start ?>
				
	<meta property="og:image" content="<?php echo $v->guid; ?>" />
					
			<?php endforeach; else : ?>		
				
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory') ?>/images/logo.gif" />
				
			<?php endif; // -- check if there is an image start ?>		
		<?php endif; // -- check for if post has image end ?>
		
	<?php rewind_posts(); else: ?>
			
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:url" content="<?php bloginfo('url'); ?> " />
	<meta property="og:site_name" content="<?php bloginfo('name') ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory') ?>/images/logo.gif" />
			
	<?php endif; ?>
		
	<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/libs/modernizr-2.0.6.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/libs/google-code-prettify/prettify.js"></script>
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
		
</head>
<body onload="prettyPrint()" <?php body_class(); ?>>
	<a name="top" id="top"></a>
