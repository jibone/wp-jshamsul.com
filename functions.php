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
		$c = 0; $p = count($content_explode); $return_data = "";
		while($c < $p) {
			$test = strip_tags($content_explode[$c]);
			if($test != '') {
				$return_data = $return_data . "<p>" . $content_explode[$c] . "</p>\n";
				break;
			} else {
				$return_data = $return_data ."<p>" . $content_explode[$c] . "</p>\n";
			} $c++;
		}
		
		return $return_data;
	}
endif;


// -- convert numbers to words
// -- http://www.phpro.org/examples/Convert-Numbers-to-Words.html
if(!function_exists('convert_number')) :
	function convert_number($number) {
	
		if(!is_numeric($number) || $number < 0 || ($number > 999999999)) {
			$return = false;
		} else {
			
			$Gn = floor($number / 1000000);  /* Millions (giga) */ 
			$number -= $Gn * 1000000; 
			$kn = floor($number / 1000);     /* Thousands (kilo) */ 
			$number -= $kn * 1000; 
			$Hn = floor($number / 100);      /* Hundreds (hecto) */ 
			$number -= $Hn * 100; 
			$Dn = floor($number / 10);       /* Tens (deca) */ 
			$n = $number % 10;               /* Ones */ 
			
			$res = "";
			
			if($Gn) {
				$res .= convert_numbers($Gn) . " " . __('million', 'wp-jshamsul');
			}
			
			if($kn) {
				$res .= (empty($res) ? "" : " ") . convert_number($kn) . " " . __('thousand', 'wp-jshamsul');
			}
			
			if($Hn) {
				$res .= (empty($res) ? "" : " ") . convert_number($Hn) . " " . __('hundred', 'wp-jshamsul');
			}
			
			$ones = array(
				__(""), 
				__("one", "wp-jshamsul"),
				__("two", "wp-jshamsul"),
				__("three", "wp-jshamsul"),
				__("four", "wp-jshamsul"),
				__("five", "wp-jshamsul"),
				__("six", "wp-jshamsul"),
				__("seven", "wp-jshamsul"),
				__("eight", "wp-jshamsul"),
				__("nine", "wp-jshamsul"),
				__("ten", "wp-jshamsul"),
				__("eleven", "wp-jshamsul"),
				__("twelve", "wp-jshamsul"),
				__("thirteen", "wp-jshamsul"),
				__("fourteen", "wp-jshamsul"),
				__("fifteen", "wp-jshamsul"),
				__("sixteen", "wp-jshamsul"),
				__("seventeen", "wp-jshamsul"),
				__("eightteen", "wp-jshamsul"),
				__("nineteen", "wp-jshamsul"),
			);
			
			$tens = array(
				__(""), __(""), 
				__("twenty", "wp-jshamsul"),
				__("thirty", "wp-jshamsul"),
				__("forty", "wp-jshamsul"),
				__("fifty", "wp-jshamsul"),
				__("sixty", "wp-jshamsul"),
				__("seventy", "wp-jshamsul"),
				__("eighty", "wp-jshamsul"),
				__("ninety", "wp-jshamsul"), 
			);
			
			if($Dn || $n) {
				if(!empty($res)) {
					$res .= " " . __('and', 'wp-jshamsul');
				}
				
				if($Dn < 2) {
					$res .= $ones[$Dn * 10 + $n];
				} else {
					$res .= $tens[$Dn];
					if($n) {
						$res .= "-" . $ones[$n];
					}
				}
			}
			
			if(empty($res)) {
				$res = __('zero', 'wp-jshamsul');
			}
			
			$return = $res;
			
		} 
		return $return;
		
	}
endif; 

