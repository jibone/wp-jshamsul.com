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


// -- register custom post type
add_action('init', 'create_post_type');
if(!function_exists('create_post_type')):
  function create_post_type() {
	  register_post_type( 'photo_post',
		  array(
			  'labels'          => array(
				  'name'          => __( 'Photos' ),
				  'singular_name' => __( 'Photo' )
			  ),
		  'public'        => true,
      'has_archive'   => true,
      'show_ui'       => true,
      'menu_position' => 5,
      'rewrite'       => array('slug' => 'photo'),
      'supports'      => array('title','editor','comments'),
      'taxonomies'    => array('post_tag', 'category')
		  )
    );
  }
endif;


$prefix = 'pic_';
$meta_box = array(
  'id'        => 'photo_meta_box',
  'title'     => 'Photo Data',
  'page'      => 'photo_post',
  'context'   => 'normal',
  'priority'  => 'high',
  'fields'    => array(
    array(
      'name'  => 'Camera Type',
      'desc'  => 'Type of camera the image was taken from',
      'id'    => 'camera_type',
      'type'  => 'text',
      'std'   => ''
    ),
    array(
      'name'  => 'Film Type',
      'desc'  => 'Type of film used to take the photo',
      'id'    => 'film_type',
      'type'  => 'text',
      'std'   => '' 
    )
  )
);

// -- custom meta box
add_action('admin_menu', 'jshamsul_add_box');
if(!function_exists('jshamsul_add_box')):
  function jshamsul_add_box() {
    global $meta_box;
    add_meta_box(
      $meta_box['id'], 
      $meta_box['title'], 
      'jshamsul_show_box', 
      $meta_box['page'], 
      $meta_box['context'], 
      $meta_box['priority']
    );
  }
endif;
if(!function_exists('jshamsul_show_box')):
  function jshamsul_show_box() {
    global $meta_box, $post; 
    // Use nonce for verification
    echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
	  foreach ($meta_box['fields'] as $field) {
		  // get current post meta data
		  $meta = get_post_meta($post->ID, $field['id'], true);
      echo  '<tr>',
		        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				    '<td>';
		  switch ($field['type']) {		
			case 'text':
        echo '<input type="text" name="', $field['id'], 
          '" id="', $field['id'], 
          '" value="', $meta ? $meta : $field['std'], 
          '" size="30" style="width:97%" />',
					'<br />', $field['desc'];
				break;
				case 'button':
				  echo '<input type="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				break;
		  }
		  echo 	'<td>',
			      '</tr>';
	  }
	  echo '</table>';
  }
endif;

add_action('save_post', 'jshamsul_save_data');
if(!function_exists('jshamsul_save_data')):
  function jshamsul_save_data($post_id) {
    global $meta_box;
	  if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
		  return $post_id;
	  }
	  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		  return $post_id;
	  }
	  if ('page' == $_POST['post_type']) {
		  if (!current_user_can('edit_page', $post_id)) {
			  return $post_id;
		  }
	  } elseif (!current_user_can('edit_post', $post_id)) {
		  return $post_id;
	  }
 
	  foreach ($meta_box['fields'] as $field) {
		  $old = get_post_meta($post_id, $field['id'], true);
		  $new = $_POST[$field['id']];
 
		  if ($new && $new != $old) {
			  update_post_meta($post_id, $field['id'], $new);
		  } elseif ('' == $new && $old) {
			  delete_post_meta($post_id, $field['id'], $old);
		  }
	  } 
  }
endif;
