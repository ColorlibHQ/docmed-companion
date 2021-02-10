<?php
function docmed_page_metabox( $meta_boxes ) {

	$docmed_prefix = '_docmed_';
	$meta_boxes[] = array(
		'id'        => 'page_single_metaboxs',
		'title'     => esc_html__( 'Page Footer Options', 'docmed-companion' ),
		'post_types'=> array( 'page' ),
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'    => $docmed_prefix . 'footer-background',
				'type'  => 'background',
				'name'  => esc_html__( 'Set The Footer Background', 'docmed-companion' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'docmed_page_metabox' );