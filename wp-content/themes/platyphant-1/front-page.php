<?php get_header(); ?>

	<?php // Show the selected frontpage content.
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/page/content', 'front-page' );
		endwhile;
	else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
		get_template_part( 'template-parts/post/content', 'none' );
	endif; ?>

	<?php
	// Get each of our panels and show the post data.
	if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

		/**
		 * Filter number of front page sections in Twenty Seventeen.
		 *
		 * @since Twenty Seventeen 1.0
		 *
		 * @param $num_sections integer
		 */
		$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
		global $twentyseventeencounter;

		// Create a setting and control for each of the sections available in the theme.
		for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
			$twentyseventeencounter = $i;
			twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

<?php get_footer();
