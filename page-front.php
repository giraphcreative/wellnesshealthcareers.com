<?php

/*
Template Name: Page - Home
*/

get_header();

?>

	<?php the_showcase(); ?>

	<div class="home-pad bg-grey-light group" role="main">
		
		<?php the_ad_showcase(); ?>

	</div>

	<?php the_footer_showcase(); ?>

<?php 

get_footer();

?>