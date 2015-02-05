<?php

/**
 * Remove component
 */

add_filter('aesop_avail_components', 'remove_component');
function remove_component( $shortcodes ) {

	// remove image component
	unset($shortcodes['image']);
	return $shortcodes;

    }