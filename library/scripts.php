<?php


// include the main.js script in the header on the front-end.
function p_scripts() {
	wp_enqueue_script( 'p-main-js', get_stylesheet_directory_uri().'/js/main.js?v=2', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'p_scripts' );



// add noscript tag in after each javascript that's enqueued.
function add_noscript_filter( $tag, $handle, $src ){

	$noscript = "<noscript>This site requires javascript to display/behave ideally, though the content will be accessible regardless.</noscript>\r\n";
	$tag = $tag . $noscript; 
	return $tag; 

}
add_filter( 'script_loader_tag', 'add_noscript_filter', 10, 3 );


?>