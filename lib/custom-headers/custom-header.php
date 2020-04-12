<?php

/**
 * Parent theme has 4 headers by default.
 * So, custom header must always start from header5
 * $headers_arr['header5'] adds a new custom header to the global headers
 */


 /**
  * HEADER OPTIONS
  * $headers_arr['header5'] adds a new custom header to the global headers
  */
 add_filter( 'sp_headers_options', function( $headers_arr ){
   $headers_arr['header5'] = 'Your Menu Name';
   return $headers_arr;
 } );


/**
 * Includes the custom header template
 * using :
 * get_stylesheet_directory().'/header-templates/header5.php';
 */
 add_filter( 'sp_header5_template', function( $template ){
   $template = get_stylesheet_directory().'/header-templates/header5.php';
   return $template;
 } );


/**
 * For bootstrap only
 * CHANGE THE ATTRIBUTES PASSED TO THE NAVIGATION MENU
 */
add_filter('sp_nav_menu_options', function( $sp_nav_menu_options ){

  global $sp_customize;

  $header_type = $sp_customize->get_header_type();

  if( $header_type == 'header5' ){

    //Add bootstrap navbar classes

    $sp_nav_menu_options['container_class'] = 'collapse navbar-collapse';
    $sp_nav_menu_options['container_id']    = 'bs-example-navbar-collapse-1';
    $sp_nav_menu_options['menu_class']      = 'nav navbar-nav navbar-right';

  }

  return $sp_nav_menu_options;
});
