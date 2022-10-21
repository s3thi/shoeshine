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

	wp_register_style(
		$block_styles_handle,
		get_template_directory_uri() . '/assets/css/block-styles.css',
		array(),
		SHOESHINE_VERSION
	);

	wp_enqueue_style( $block_styles_handle );

	// Navigation.
	register_block_style(
		'core/navigation',
		array(
			'name'         => 'shoeshine-header-navigation',
			'label'        => __( 'Header navigation', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	// Site title.
	register_block_style(
		'core/site-title',
		array(
			'name'         => 'shoeshine-site-title-elegant',
			'label'        => __( 'Elegant', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	// Latest posts.
	register_block_style(
		'core/latest-posts',
		array(
			'name'         => 'shoeshine-latest-posts-bulleted-list',
			'label'        => __( 'Bulleted list', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	// Separator.
	register_block_style(
		'core/separator',
		array(
			'name'         => 'shoeshine-separator-default',
			'label'        => __( 'Default', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
			'is_default'   => true,
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'shoeshine-separator-dots',
			'label'        => __( 'Dots', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	register_block_style(
		'core/separator',
		array(
			'name'         => 'shoeshine-separator-line',
			'label'        => __( 'Line', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	// List.
	register_block_style(
		'core/list',
		array(
			'name'         => 'shoeshine-list-default',
			'label'        => __( 'Default', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
			'is_default'   => true,
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'         => 'shoeshine-list-impact',
			'label'        => __( 'Impact', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	// Post navigation link.
	register_block_style(
		'core/post-navigation-link',
		array(
			'name'         => 'shoeshine-post-navigation-link-default',
			'label'        => __( 'Default', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
			'is_default'   => true,
		)
	);

	register_block_style(
		'core/post-navigation-link',
		array(
			'name'         => 'shoeshine-post-navigation-link-large-label',
			'label'        => __( 'Large label', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

	// Quote.
	register_block_style(
		'core/quote',
		array(
			'name'         => 'shoeshine-quote-impact',
			'label'        => __( 'Impact', 'shoeshine' ),
			'style_handle' => 'shoeshine-block-styles',
		)
	);

}

add_action( 'init', 'shoeshine_register_block_styles' );

/**
 * Unregister block styles.
 *
 * @since 1.0.1
 *
 * @return void
 */
function shoeshine_unregister_block_style() {
	wp_enqueue_script(
		'shoeshine-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		SHOESHINE_VERSION,
		true
	);
}

add_action( 'enqueue_block_editor_assets', 'shoeshine_unregister_block_style' );
