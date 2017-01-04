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

		<!-- Start the Loop. -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- client entry -->
			<a href="<?php the_permalink(); ?>" class="prtf-client-container">
				<div class="prtf-client-thumb">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="prtf-client-content">
					<h3><?php echo get_the_title(); ?></h3>
					<p class="prtf-client-services"><?php foreach((get_the_category()) as $category) { echo '&nbsp&nbsp' . $category->cat_name . '&nbsp&nbsp'; } ?></p>
					<p class="prtf-client-cta">View the project</p>
				</div>
			</a>
			<!--  end/ client entry -->

			<!-- Stop The Loop (but note the "else:" - see next line). -->

		<?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>

	</div>
	<!-- end/ portfolio content -->

</section>

<?php get_footer(); ?>