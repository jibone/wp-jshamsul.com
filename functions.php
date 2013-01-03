<?php // functions.php


// -- theme setup
add_action('after_setup_theme', 'jshamsul_setup');
if(!function_exists('jshamsul_setup')):
  function jshamsul_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
      'header_navigation'   =>  __('Header Navigation')
    ));
  }
endif;


// -- get only first paragraph from post
if(!function_exists('get_first_paragraph')):
  function get_first_paragraph($include_image = true) {
    $content = get_the_content();
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content_explode = explode("</p>", $content);
    // check if first paragraph is an image or a video embed,
    // got for the next paragraph instead
    $c = 0; $p = count($content_explode); $return_data = "";
    while($c < $p) {
      $test = strip_tags($content_explode[$c]);
      if($test != '') {
        $return_data = $return_data . $content_explode[$c] . "</p>\n";
        $c = $p;
        break;
      } else {
        if($include_image == true) {
          $return_data = $return_data . $content_explode[$c] . "</p>\n";
        }
      } $c++;
    }
    return $return_data;
  }
endif;


// -- register the widgetize area
add_action('widgets_init', 'jshamsul_widgets_init');
if(!function_exists('jshamsul_widgets_init')):
  function jshamsul_widgets_init() {
    register_sidebar(array(
      'name'          =>  __('Landing Social Links'),
      'id'            =>  'landing',
      'before_widget' =>  '',
      'after_widget'  =>  '',
      'before_title'  =>  '',
      'after_title'   =>  ''
    ));
  }
endif;
