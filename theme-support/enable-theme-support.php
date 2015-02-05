<?php

/**
 * Enable Extended Style Support. This will load one CSS file 
 * for any of the items that you include in the snippet below.
 */

add_theme_support("aesop-component-styles", array("parallax", "image", "quote", "gallery", "content", "video", "audio", "collection", "chapter", "document", "character", "map", "timeline" ) );

/**
 * For example, let’s say that you only want additional CSS loaded 
 * for the parallax, image, and quote components.
 */

add_theme_support("aesop-component-styles", array("parallax", "image", "quote") );