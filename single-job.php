<?php
/**
 * The Template for displaying all single posts
 */

get_header();

?>
	<div id="primary" class="site-content">

		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				global $post;
				?>
		<div id="content" class="wrap group content-wide" role="main">
			<div class="third right job-info">
				<?php
				// display credit union name
				print ( has_cmb_value( 'job_company' ) ? "<p><label>Company:</label><br> " . get_cmb_value( 'job_company' ) . "</p>" : '' );

				// display region
				print ( has_cmb_value( 'job_region' ) ? "<p><label>Region:</label> " . get_cmb_value( 'job_region' ) . "</p>" : '' ) ;

				?>
				<?php if ( has_cmb_value( 'job_contact_name' ) ) { ?>
				<p>
				<?php print ( has_cmb_value( 'job_contact_name' ) ? "<label>Contact:</label> " . get_cmb_value( 'job_contact_name' ) . '<br>' : '' ); ?>
				<?php print ( has_cmb_value( 'job_contact_email' ) ? '<label>Email:</label> <a href="' . get_cmb_value( 'job_contact_email' ) . '">' . get_cmb_value( 'job_contact_email' ) . '</a><br>' : '' ); ?>
				<?php print ( has_cmb_value( 'job_contact_phone' ) ? '<label>Phone:</label> ' . get_cmb_value( 'job_contact_phone' ) . '<br>' : '' ); ?>
				<?php print ( has_cmb_value( 'job_contact_fax' ) ? "<label>Fax:</label> " . get_cmb_value( 'job_contact_fax' ) . "<br>" : '' ); ?>
				</p>
				<?php } ?>

				<?php
				// display job type
				print ( has_cmb_value( 'job_expires' ) ? "<p><label>Closing:</label> " . date( "n/j/Y", strtotime( get_cmb_value( 'job_expires' ) ) ) . "</p>" : '' );
				?>
			</div>
			<p><strong>Job Description:</strong></p>
			<?php the_content(); ?>
			<br>
				<?php
				
				if ( has_cmb_value( 'job_education' ) ) { 
					print "<p><strong>Education/Experience Required:</strong></p>";
					print apply_filters( 'the_content', get_cmb_value( 'job_education' ) ) . "<br>";
				}

				if ( has_cmb_value( 'job_comments' ) ) { 
					print "<p><strong>Additional Comments:</strong></p>";
					print apply_filters( 'the_content', get_cmb_value( 'job_comments' ) ) . "<br>";
				}

			endwhile;
		endif;
		?>
		</div>

	</div><!-- #primary -->
<?php

get_footer();

?>