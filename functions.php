<?php
/**
 * Chanda functions and definitions
 *
 * @package WordPress
 * @subpackage Chanda
 * @since Chanda 1.0
 */

if ( ! function_exists('chanda_setup') ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Chanda 1.0
	 *
	 * @return void
	 */
	function chanda_setup() {
		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		// TODO: add support for post formats.
		// add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif;

add_action( 'after_setup_theme', 'chanda_setup' );


if ( ! function_exists('chanda_styles') ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Chanda 1.0
	 *
	 * @return void
	 */
	function chanda_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'chanda-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'chanda-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'chanda_styles' );
