<?php

//sp-core-style points to the style of the parent theme.

add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('sp-child-css', get_stylesheet_directory_uri().'/assets/css/child.css', array('sp-core-style'), time() );
  // wp_enqueue_script( 'sp-child-js', get_stylesheet_directory_uri().'/assets/js/child.js', array( 'jquery' ), time(), true );
    //time() function applies different version number.
});

//Includes cpt file
include('lib/cpt/cpt.php');

//Includes taxonomy file
include('lib/taxonomies/custom-tax.php');

//Includes custom fields file
include('lib/custom-fields/cf.php');

//Includes custom fonts file
include('lib/custom-fonts/custom-fonts.php');

//Includes custom fonts file
include('lib/custom-headers/custom-header.php');
