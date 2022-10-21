<?php
/**
 * Shoeshine functions and definitions
 *
 * @package WordPress
 * @subpackage Shoeshine
 * @since Shoeshine 1.0
 */

if ( ! function_exists( 'shoeshine_support' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Shoeshine 1.0
	 *
	 * @return void
	 */
	function shoeshine_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
}

add_action( 'after_setup_theme', 'shoeshine_support' );

if ( ! function_exists( 'shoeshine_styles' ) ) {
	/**
	 * Enqueue styles.
	 *
	 * @since Shoeshine 1.0
	 *
	 * @return void
	 */
	function shoeshine_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'shoeshine-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'shoeshine-style' );
	}
}

add_action( 'wp_enqueue_scripts', 'shoeshine_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );
