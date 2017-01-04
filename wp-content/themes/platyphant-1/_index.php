<?php get_header(); ?>
	
<section id="portfolio">
	<div class="internal-wrapper">
		<div class="central-text">
			<h2>Our work</h2>
			<p>Bacon ipsum dolor amet andouille beef ribs boudin picanha pig pork belly corned beef pancetta tri-tip alcatra. Filet mignon meatloaf cow kevin tail pork loin burgdoggen, rump ham t-bone ground round pork.</p>
		</div>
	</div>

	<!-- portfolio content -->
	<div class="portfolio-content">

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

	</div>
	<!-- end/ portfolio content -->

</section>

<?php get_footer();
