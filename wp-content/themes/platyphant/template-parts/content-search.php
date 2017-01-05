<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="search-wrapper">
		<div class="search-thumb">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="search-text">
			<h1><?php echo get_the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>" class="search-cta">View the project</a>
		</div>
	</div>

</article><!-- #post-## -->