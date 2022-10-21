<?php
/**
 * Filters
 *
 * @package shoeshine
 * @since 1.0.1
 */

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 1.0.1
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		return '…';
	}
);
