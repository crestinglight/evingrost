<?php

function get_post_excerpt( $post_id, $excerpt_length = null, $excerpt_more = null, $more_link = true ) {
	$post = get_post( $post_id );
	if ( null === $excerpt_length ) {
		$excerpt_length = apply_filters( 'excerpt_length', 55 );
	}
	if ( $post->post_excerpt ) {
		$excerpt = $post->post_excerpt;
	} else {
		$excerpt = strip_shortcodes( $post->post_content );
		$excerpt = apply_filters( 'the_content', $excerpt );
		$excerpt = str_replace( ']]>', ']]&gt;', $excerpt );
		$excerpt = wp_trim_words( $excerpt, $excerpt_length, '' );
	}
	if ( null === $excerpt_more ) {
		$excerpt_more = apply_filters( 'excerpt_more', '&hellip;' );
	}
	$excerpt = apply_filters( 'get_post_excerpt_excerpt', $excerpt . $excerpt_more );
	if ( false === $more_link ) {
		return $excerpt;
	} else {
		$more_link = sprintf( '<a href="%s" class="more-link read-more-link">%s</a>',
			get_the_permalink( $post->ID ),
			apply_filters( 'get_post_excerpt_read_more_text', 'Read More' ) );
	}
	return $excerpt . apply_filters( 'get_post_excerpt_read_more_link', $more_link );
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_post-images',
		'title' => 'Post Images',
		'fields' => array (
			array (
				'key' => 'field_59f0cac080e21',
				'label' => 'Header Image',
				'name' => 'header_image',
				'type' => 'image',
				'instructions' => 'Should be around 2560 x 1440 resolution. At least High Def.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_59f0cb3580e22',
				'label' => 'Preview Image',
				'name' => 'preview_image',
				'type' => 'image',
				'instructions' => 'Should be same as Header Image, but exactly 900 x 600 resolution.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


?>