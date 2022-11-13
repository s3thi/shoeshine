<?php
/**
 * Hooks
 *
 * @package shoeshine
 * @since   1.1.0
 */

/**
 * Add theme color to <head>.
 *
 * @since 1.1.0
 */
function shoeshine_hook_theme_color() {
	?>

	<meta name="theme-color" content="#374151">

	<?php
}
add_action( 'wp_head', 'shoeshine_hook_theme_color' );
