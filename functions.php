<?php
// 
//  functions.php
//  wp-jshamsul
//  
//  Created by J Shamsul Bahri on 2011-11-22.
//  Copyright 2011 jShamsul.com . All rights reserved.
// 

add_action('after_setup_theme', 'jshamsul_setup');


// --- theme setup ---
if(!function_exists('jshamsul_setup')):

	function jshamsul_setup() {
		
		// - Localization and translation stuff
		load_theme_textdomain('wp-jshamsul', get_template_directory() . '/languages');
		$locale = get_locale();
		$locale_file = get_template_directory() . "/languages/$locale.php";
		if(is_readable($locale_file)) { require_once($locale_file); }	
	
		add_theme_support('automatic-feed-links');
		add_theme_support('post-formats', array('link', 'gallery', 'quote', 'image', 'video'));
		add_theme_support('post-thumbnails');
		
		register_nav_menu('primary', __('Primary Menu', 'wp-jshamsul'));
		add_custom_background();
	
	} // end of function

endif;

// --- post meta ---
if(!function_exists('jshamsul_posted_on')):

	function jshamsul_posted_on() {
		printf('<span class="sep">Posted on </span>
				<a href="%1$s" title="%2$s" rel="bookmark">
					<time class="entry-date" datetime="%3$s" pubdate>%4$s</time>
				</a>
				<span class="by-author"> 
				<span class="sep"> by </span> 
				<span class="author vcard">
					<a class="url" href="%5$s" title="%6$s" rel="author">%7$s</a>
				</span>
				</span>', 
				esc_url(get_permalink()),
				esc_attr(get_the_time()),
				esc_attr(get_the_date('c')),
				esc_html(get_the_date()),
				esc_url(get_author_posts_url(get_the_author_meta('ID'))),
				sprintf('View all posts by %s', get_the_author()),
				esc_html(get_the_author())
		);
	}

endif;

// - Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
function twentyeleven_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyeleven_page_menu_args' );

