<?php

/**
 * $meta_box['resources'] . Here, resources is the slug of cpt Resources
 * All the metaboxes and fields must have different id's.
 * For more details check the cpt Resources
 * 
 */



//Creates a meta field
add_filter( 'orbit_meta_box_vars', function( $meta_box ){
	$meta_box['resources'] = array(

    //Metabox 1
		array(
			'id'			=> 'meta-field-one',
			'title'		=> 'MetaBox One Title',
			'fields'	=> array(
				'qualifications'	=> array(
					'type' => 'text',
					'text' => 'Qualifications'
				)
			)
		),


    //Metabox 2
    array(
      'id'			=> 'meta-field-two',
      'title'		=> 'MetaBox Two Title',
      'fields'	=> array(
        'qualifications'	=> array(
          'type' => 'text',
          'text' => 'Qualifications'
        ),
        'message'	=> array(
					'type' => 'textarea',
					'text' => 'Message'
				),
        'verified'	=> array(
          'type' => 'dropdown',
          'text' => 'Verified',
          'options'	=>	array(
            'yes'	=>	'Yes',
            'no'	=>	'No'
          )
        ),
      )
    )


	);
	return $meta_box;
});
