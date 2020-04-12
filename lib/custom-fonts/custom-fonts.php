<?php

/**
 * Josefin Sans url => https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap
 * Lusitana url =>  https://fonts.googleapis.com/css?family=Lusitana&display=swap
 */

//Add google fonts
add_filter( 'sp_list_google_fonts', function( $fonts ){

  // Josefin Sans similar to Brandon Grotesque
  $fonts[] = array(
      'slug'	=> 'josefin',
      'name'	=> 'Josefin Sans',
      'url'	  => 'Josefin+Sans'
    );

  //Lusitana similar to Big Caslon
  $fonts[] =array(
      'slug'	=> 'lusitana',
      'name'	=> 'Lusitana',
      'url'	  => 'Lusitana'
  );
  return $fonts;
} );
