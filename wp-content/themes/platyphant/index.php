<?php get_header(); ?>

	<?php
	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) : the_post();
		
			get_template_part( 'template-parts/post/content', get_post_format() );

		endwhile;

	else :

		get_template_part( 'template-parts/post/content', 'none' );

	endif;
	?>

<?php get_footer();
