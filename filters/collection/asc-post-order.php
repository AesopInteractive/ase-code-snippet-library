/** Change the post order in a Collection from 'New to Old' to 'Old to New'
 *
 * If you are NOT using Splash Mode, then this will work to swap the direction of the
 * posts from oldest to newest.
 **/

add_filter("aesop_collection_query", "my_collection_filter");
function my_collection_filter( $args ){
	$custom = array(
		"orderby" => "date",
		"order"     => "ASC"
	);
	return array_merge($args, $custom);
}
