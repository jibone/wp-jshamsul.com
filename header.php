<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<title>
		<?php wp_title(' - ', true, 'right'); ?> 
		<?php bloginfo('name'); ?>
	</title>
	
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/jshamsul.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/sunburst.css" />
	
	<link rel='alternate' type='application/rss+xml' title='<?php bloginfo('name'); ?> RSS Feed' href='' />
	<link rel='pingback' href='<?php bloginfo('pingback_url'); ?>' />
	<link rel="image_src" href="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" />
	<link rel='alternate' type='application/rss+xml' title='<?php bloginfo('name'); ?> RSS Feed' href='http://feeds.feedburner.com/jshamsulcom' />
	
	<meta property="og:title" content="jShamsul.com" />
	<meta property="og:description" content="I am a web producer based in Kuala Lumpur, Malaysia. I make websites for fun and profit." />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory') ?>/images/logo.gif" />
	
	<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/libs/modernizr-2.0.6.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/scripts/libs/google-code-prettify/prettify.js"></script>
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	
</head>
<body onload="prettyPrint()" <?php body_class(); ?>>
	<a name="top" id="top"></a>
