<?php
/**
 * Block styles.
 *
 * @package shoeshine
 * @since 1.0.1
 */

/**
 * Register block styles
 *
 * @since 1.0.1
 *
 * @return void
 */
function shoeshine_register_block_styles() {
	$block_styles_handle = 'shoeshine-block-styles';
	$theme_version       = wp_get_theme()->get( 'Version' );
	$version_string      = is_string( $theme_version ) ? $theme_version : false;

	wp_register_style(
		$block_styles_handle,
		get_template_directory_uri() . '/assets/css/block-styles.css',
		array(),
		$version_string
	);

	wp_enqueue_style( $block_styles_handle );

	register_block_style(
		'core/navigation',
		array(
			'name'         => 'shoeshine-header-navigation',
			'label'        => __( 'Header navigation', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	register_block_style(
		'core/site-title',
		array(
			'name'         => 'shoeshine-site-title-elegant',
			'label'        => __( 'Elegant', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	register_block_style(
		'core/latest-posts',
		array(
			'name'         => 'shoeshine-latest-posts-bulleted-list',
			'label'        => __( 'Bulleted list', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

}

add_action( 'init', 'shoeshine_register_block_styles' );
