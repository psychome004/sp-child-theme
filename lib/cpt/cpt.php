<?php

// CREATES CUSTOM POST TYPE
add_filter( 'orbit_post_type_vars', function( $orbit_types ){

	$orbit_types['resources'] = array(
		'slug' 		=> 'resources',
		'labels'	=> array(
			'name' 					=> 'Resources',
			'singular_name' => 'Resource',
      'add_new'       => 'Add New',
      'add_new_item'  => 'Add New Resource',
      'all_items'     =>  'All Resources'
		),
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

	// $post_types['stories'] = array(
	// 	'slug' 		=> 'stories',
	// 	'labels'	=> array(
	// 		'name' 					=> 'Stories',
	// 		'singular_name' => 'Story',
	// 	),
	// 	'menu_icon'	=> 'dashicons-format-gallery',
	// 	'public'		=> true,
	// 	'supports'	=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	// );

	return $orbit_types;
} );
