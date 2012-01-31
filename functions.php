<?php
// 
//  functions.php
//  wp-jshamsul
//  
//  Created by J Shamsul Bahri on 2011-11-22.
//  Copyright 2011 jShamsul.com . All rights reserved.
// 


// --- theme setup ---
add_action('after_setup_theme', 'jshamsul_setup');
if(!function_exists('jshamsul_setup')):
	function jshamsul_setup() {
	
		// - Localization and translation stuff
		load_theme_textdomain('wp-jshamsul', get_template_directory() . '/languages');
		$locale = get_locale();
		$locale_file = get_template_directory() . "/languages/$locale.php";
		if(is_readable($locale_file)) { require_once($locale_file); }	

		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
	
		register_nav_menu('primary', __('Primary Menu', 'wp-jshamsul'));
		add_custom_background();

	} // end of function
endif;


// - Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
function twentyeleven_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyeleven_page_menu_args' );


// -- get only the first paragraph from the post --
if(!function_exists('get_the_content_first_paragraph')) :
	function get_the_content_first_paragraph() {
		$content = get_the_content();
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		$content_explode = explode("</p>", $content);
		
		// -- check if first paragraph is an image or video embed and ignore it
		// -- go for the second paragraph instead.
		$c = 0; $p = count($content_explode);
		while($c < $p) {
			$test = strip_tags($content_explode[$c]);
			if($test != '') {
				$return_paragraph = $c;
				break;
			} $c++;
		}
		
		return $content_explode[$return_paragraph];
	}
endif;

