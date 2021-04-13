<?php
/**
 * The template for displaying Archive pages
 */

get_header(); 

global $wp_query;


// start building args for query_posts
$args = array_merge( $wp_query->query_vars, array(
	'post_type' => 'job',
	'orderby' => 'meta_value',
	'order' => 'ASC',
	'meta_key' => '_p_job_expires',
	'posts_per_page' => 1000
) );


// start building meta query for job expiration
$today = date( 'Y-m-d' );
$expires_query = array(
	'relation' => 'OR',
	array(
		'key' => '_p_job_expires',
		'value' => '',
		'compare' => '='
	),
	array(
		'key' => '_p_job_expires',
		'value' => $today,
		'compare' => '>='
	)
);


// if we have a type query
$args['meta_query'] = $expires_query;

query_posts( $args );

$job_count = $wp_query->found_posts;

?>

	<div id="content" class="wrap group content-wide" role="main">
		<h1>Wellness Health Careers</h1>
		<div class="job-search"><input type="text" id="job-search" value="" placeholder="Search Jobs"></div>
		<div class="job-count"><strong>Showing <?php print $job_count; ?> Job<?php print ( $job_count == 1 ? '' : 's' ) ?></strong></div>
		<?php 

		if ( have_posts() ) : 
			// Start the Loop.
			while ( have_posts() ) : the_post(); 
				?>
		<div class="entry-job group">
			<div class="two-third no-margin">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
			</div>
			<div class="third job-info">
				
				<?php
				print ( has_cmb_value( 'job_expires' ) ? "<p><label>Closing:</label> " . date( "n/j/Y", strtotime( get_cmb_value( 'job_expires' ) ) ) . "</p>" : '' );
				print ( has_cmb_value( 'job_company' ) ? "<p><label>Company:</label><br> " . get_cmb_value( 'job_company' ) . "</p>" : '' );
				?>
			</div>
		</div>
				<?php
			endwhile;
		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div><!-- #content -->

	</section><!-- #primary -->

<?php

get_footer();

?>