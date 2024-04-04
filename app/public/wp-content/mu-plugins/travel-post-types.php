<?php

add_action( 'init', 'travel_agency_post_types' );

function travel_agency_post_types() {
	register_post_type(
		'destination',
		array(
			'show_in_rest' => true,
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'public'       => true,
			'labels'       => array(
				'name'          => 'Destinations',
				'add_new'       => 'Add New Destination',
				'add_new_item'  => 'Add New Destination',
				'edit_item'     => 'Edit Destination',
				'all_item'      => 'All Destinations',
				'singular_name' => 'Destination',
			),
			'menu_icon'    => 'dashicons-airplane',
		)
	);

	register_post_type(
		'testimonial',
		array(
			'show_in_rest' => true,
			'supports'     => array( 'title', 'editor', 'thumbnail' ),
			'public'       => true,
			'labels'       => array(
				'name'          => 'Testimonials',
				'add_new'       => 'Add New Testimonial',
				'add_new_item'  => 'Add New Testimonial',
				'edit_item'     => 'Edit Testimonial',
				'all_item'      => 'All Testimonials',
				'singular_name' => 'Testimonial',
			),
			'menu_icon'    => 'dashicons-editor-quote',
		)
	);
}
