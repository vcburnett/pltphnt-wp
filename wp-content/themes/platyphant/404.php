<?php get_header(); ?>

<div class="menu-compensation"></div>

<section class="content-thin">
	<div class="error-img">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/platyphant-404.png" alt="Error 404">
	</div>
	<div class="error-content">
		<h1>No peanuts here!</h1>
		<p>Looks like we lost this page somewhere... problems of living in a jungle. But maybe you can search for what you need below.</p>
		<?php get_search_form(); ?>

	</div>
</section>

<?php get_footer(); ?>
