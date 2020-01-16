<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'support', 'thumbnail' );
}





function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Header Menu' ),
      'main-menu' => __( 'Extra Menu' ),
    
      
    )
  );
}
add_action( 'init', 'register_my_menus' );



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
    	// 'before_title'	=>'<h1>',
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


?>