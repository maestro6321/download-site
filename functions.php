<?php




if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  add_post_type_support( 'support', 'thumbnail' );
}





register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
  require_once get_template_directory() . '/wp_bootstrap_navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
// if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
//     // File does not exist... return an error.
//     return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
// } else {
//     // File exists... require it.
//     require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }






// $args = array(
// 	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
// 	'id'            => 'unique-sidebar-id',    // ID should be LOWERCASE  ! ! !
// 	'description'   => '',
//         'class'         => '',
// 	'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 	'after_widget'  => '</li>',
// 	'before_title'  => '<h2 class="widgettitle">',
// 	'after_title'   => '</h2>' ); 


if ( function_exists( 'register_sidebar' ) ) {
  register_sidebar( array(
   'name'			=>"middle ads",
   'id'			=>'ali_middle_ads',
   'description'	=>"middle ads tools",
      // 'class'         => 'img img-responsive',
   'before_widget' => '<div class="container img-responsive"',
   'after_widget'  => '</div>',
    	// 'before_title'	=>'<img id="%1$s" class="img-responsive %2$s">',
    	// 'after_title'	=>'</h1>',

 ));


  register_sidebar( array(
    'name'      =>"Sidebar ads",
    'id'      =>'ali_sidebar_ads',
    'description' =>"middle ads tools",
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' =>'<h3>',
    'after_title'  =>'</h3>'

  ));

  register_sidebar( array(
    'name'      =>"Sidebar ads text",
    'id'      =>'ali_sidebar_ads_text',
    'description' =>"middle ads tools",
    'before_widget' => '<li><span>',
    'after_widget'  => '</span></li>',
      // 'before_title' =>'<span>',
      // 'after_title'  =>'</span>',

  ));


  register_sidebar( array(
    'name'      =>"about-me",
    'id'      =>'ali_about_me',
    'description' =>"middle ads tools",
      // 'before_widget' => '<li><span>',
      // 'after_widget'  => '</span></li>',
      // // 'before_title' =>'<span>',
      // // 'after_title'  =>'</span>',

  ));


}


add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
  $labels = array(
    'name'               => _x( 'Slider', 'post type general name'),
    'singular_name'      => _x( 'Slide', 'post type singular name'),
    'menu_name'          => _x( 'Slider', 'admin menu'),
    'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
    'add_new'            => _x( 'Add New', 'Slide'),
    'add_new_item'       => __( 'Name'),
    'new_item'           => __( 'New Slide'),
    'edit_item'          => __( 'Edit Slide'),
    'view_item'          => __( 'View Slide'),
    'all_items'          => __( 'All Slide'),
    'featured_image'     => __( 'Featured Image', 'text_domain' ),
    'search_items'       => __( 'Search Slide'),
    'parent_item_colon'  => __( 'Parent Slide:'),
    'not_found'          => __( 'No Slide found.'),
    'not_found_in_trash' => __( 'No Slide found in Trash.'),
  );

  $args = array(
    'labels'             => $labels,
    'menu_icon'      => 'dashicons-star-half',
    'description'        => __( 'Description.'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'           => array('title','editor','thumbnail')
  );

  register_post_type( 'slider', $args );
}


?>