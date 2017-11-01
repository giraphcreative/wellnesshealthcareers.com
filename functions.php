<?php


// set a custom field prefix
define( "CMB_PREFIX", "_p_" );


// add post types
include( "library/post-type/job.php" );


// include some theme-related things
include( "library/menus.php" );
include( "library/scripts.php" );
include( "library/widgets.php" );


// an extra image manipulation function
include( "library/images.php" );


// include our metaboxes library
include( "library/metabox.php" );


// include quote metaboxes/functions
// include( "library/title.php" );
include( "library/showcase.php" );
// include( "library/accordion.php" );



// add editor stylesheet
add_editor_style( 'editor-style.css' );


// pagination
function pagination( $prev = '&laquo;', $next = '&raquo;' ) {
    global $wp_query, $wp_rewrite;

    $current = ( $wp_query->query_vars['paged'] > 1 ? $wp_query->query_vars['paged'] : 1 );

    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
	);

    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    if ( is_paged() ) {
        print '<div class="pagination">' . paginate_links( $pagination ) . '</div>';
    }
}


?>