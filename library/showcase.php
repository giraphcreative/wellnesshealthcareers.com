<?php


function the_showcase() {

	// get the slides
	$slides = get_post_meta( get_the_ID(), CMB_PREFIX . "showcase", 1 );

	if ( !empty( $slides ) ) {
		?>
		<div class="showcase">
		<?php
		$count = 0;
		foreach ( $slides as $key => $slide ) {
			if ( !empty( $slide["image"] ) ) {

				// store the title and subtitle
				$title = ( isset( $slide["title"] ) ? $slide["title"] : '' );
				$subtitle = ( isset( $slide["subtitle"] ) ? $slide["subtitle"] : '' );
				$link = ( isset( $slide["link"] ) ? $slide["link"] : '' );
				$alt = ( isset( $slide['alt-text'] ) ? $slide["alt-text"] : "Link to " . $link );

				// check if it's an image or video
				if ( p_is_image( $slide["image"] ) ) {
					// it's an image, so resize it and generate an img tag.
					$image = '<img src="' . $slide["image"] . '" alt="' . $alt . '">';
				} else {
					// it's a video, so oEmbed that stuffs, yo
					$image = apply_filter( 'the_content', $slide["image"] );
				}

				?>
			<div class="slide<?php print ( $key == 0 ? ' visible' : '' ); ?>">
				<?php if ( !empty( $link ) ) { ?><a href="<?php print $link ?>" class="<?php print ( stristr( $link, 'vimeo' ) || stristr( $link, 'youtube' ) || stristr( $link, 'google.com/maps' ) ? 'lightbox-iframe' : '' ) ?>"><?php } ?>
				<?php print $image; ?>
				<?php if ( !empty( $link ) ) { ?></a><?php } ?>
				
				<?php if ( !empty( $title ) || !empty( $subtitle ) ) { ?>
				<div class="slide-content">
					<?php if ( !empty( $title ) ) { ?><h1><?php print $title; ?></h1><?php } ?>
					<?php if ( !empty( $subtitle ) ) { ?><h2><?php print $subtitle; ?></h2><?php } ?>
				</div>
				<?php } ?>
			</div>
				<?php
				$count++;
			}
		}

		if ( $count > 1 ) { 
			?>
			<div class="showcase-nav">
				<a class="previous">Previous Slide</a>
				<a class="next">Next Slide</a>
			</div>
			<?php
		}
		?>
		</div>
		<?php
	}
}



// ad showcase
function the_ad_showcase() {

	// get the ad showcase
	$ads = get_cmb_value( 'ad_showcase' );

	// if it's not empty
	if ( !empty( $ads ) ) {
		?><div class="icons"><?php
		$count = 0;

		// loop through up to 4 ads and display them
		foreach ( $ads as $ad ) {
			if ( $count < 4 ) {
				?><a class="icon <?php print $ad['color'] ?>" href="<?php print $ad['link']; ?>"><?php print $ad['alt-text']; ?></a><?php
			}
			$count++;
		}
		?></div><?php
	}

}



function the_footer_showcase() {

	// get the slides
	$slides = get_post_meta( get_the_ID(), CMB_PREFIX . "showcase_footer", 1 );

	if ( !empty( $slides ) ) {
		?>
		<div class="showcase footer">
		<?php
		$count = 0;
		foreach ( $slides as $key => $slide ) {
			if ( !empty( $slide["image"] ) ) {

				// store the title and subtitle
				$title = ( isset( $slide["title"] ) ? $slide["title"] : '' );
				$subtitle = ( isset( $slide["subtitle"] ) ? $slide["subtitle"] : '' );
				$link = ( isset( $slide["link"] ) ? $slide["link"] : '' );
				$alt = ( isset( $slide['alt-text'] ) ? $slide["alt-text"] : "Link to " . $link );

				// check if it's an image or video
				if ( p_is_image( $slide["image"] ) ) {
					// it's an image, so resize it and generate an img tag.
					$image = '<img src="' . $slide["image"] . '" alt="' . $alt . '">';
				} else {
					// it's a video, so oEmbed that stuffs, yo
					$image = apply_filter( 'the_content', $slide["image"] );
				}

				?>
			<div class="slide<?php print ( $key == 0 ? ' visible' : '' ); ?>">
				<?php if ( !empty( $link ) ) { ?><a href="<?php print $link ?>" class="<?php print ( stristr( $link, 'vimeo' ) || stristr( $link, 'youtube' ) || stristr( $link, 'google.com/maps' ) ? 'lightbox-iframe' : '' ) ?>"><?php } ?>
				<?php print $image; ?>
				<?php if ( !empty( $link ) ) { ?></a><?php } ?>
				
				<?php if ( !empty( $title ) || !empty( $subtitle ) ) { ?>
				<div class="slide-content">
					<?php if ( !empty( $title ) ) { ?><h1><?php print $title; ?></h1><?php } ?>
					<?php if ( !empty( $subtitle ) ) { ?><h2><?php print $subtitle; ?></h2><?php } ?>
				</div>
				<?php } ?>
			</div>
				<?php
				$count++;
			}
		}

		if ( $count > 1 ) { 
			?>
			<div class="showcase-nav">
				<a class="previous">Previous Slide</a>
				<a class="next">Next Slide</a>
			</div>
			<?php
		}
		?>
		</div>
		<?php
	}
}




?>