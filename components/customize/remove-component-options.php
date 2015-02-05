<?php

/**
 * Remove component options
 */

add_filter('aesop_avail_components', 'remove_options');
function remove_options( $shortcodes ) {

	// remove image width option for images
	unset($shortcodes['image']['atts']['imgwidth']);
	return $shortcodes;

    }