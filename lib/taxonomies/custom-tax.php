<?php

/* PUSH INTO THE GLOBAL VARS OF ORBIT TAXNOMIES */
add_filter( 'orbit_taxonomy_vars', function( $taxonomies ){

  /**
   * $taxonomies['services'] & 'slug' => 'services',
   * Must have same values. Example: services
   * Are same in both the fields
   */

	$taxonomies['services']	= array(
		'label'			=> 'Services',
		'slug' 			=> 'services',
		'post_types'	=> array( 'resources' )
	);

	$taxonomies['locations']	= array(
		'label'			=> 'Location',
		'slug' 			=> 'locations',
		'post_types'	=> array( 'resources' )
	);

  // $taxonomies['locations']	= array(
	// 	'label'			=> 'Location',
	// 	'slug' 			=> 'locations',
	// 	'post_types'	=> array( 'resources', 'videos' ) //Same taxonomies can be added to multiple post types
	// );

	return $taxonomies;

} );
