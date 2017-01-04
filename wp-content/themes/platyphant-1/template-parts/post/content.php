<!-- client entry -->
<a href="<?php the_permalink(); ?>" class="prtf-client-container">
	<div class="prtf-client-thumb">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="prtf-client-content">
		<h3><?php echo get_the_title(); ?></h3>
		<p class="prtf-client-services"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . '&nbsp&nbsp&nbsp'; } ?></p>
		<p class="prtf-client-cta">View the project</p>
	</div>
</a>
<!--  end/ client entry -->

<section id="case-study">
		<!-- portfolio content -->
		<div class="cs-content">
			<?php
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			echo '<div id="cs-img-header" style="background-image: url('. $url.')">';
			?>
				<div class="cs-img-content-wrapper">
					<h1><?php echo get_the_title(); ?></h1>
					<a href="#the-content" class="scroll">
						Read the case study
						<span class="arrow">
							<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.31 75.15">
								<path d="M65.15,75.15a10,10,0,0,1-7.07-2.93L2.93,17.07A10,10,0,0,1,17.07,2.93L65.15,51,113.24,2.93a10,10,0,0,1,14.14,14.14L72.23,72.23A10,10,0,0,1,65.15,75.15Z"/>
							</svg>
						</span>
					</a>
				</div>
				<div class="cs-services">
					<div class="cs-service-icon-wrap">
						<div class="cs-service-icon">
							<img src="assets/images/icon-consulting.svg" alt="Consulting">
						</div>
						<h2>Consulting</h2>
					</div>
					<div class="cs-service-icon-wrap">
						<div class="cs-service-icon">
							<img src="assets/images/icon-web-analytics.svg" alt="Web Analytics">
						</div>
						<h2>Web Analytics</h2>
					</div>
					<div class="cs-service-icon-wrap">
						<div class="cs-service-icon">
							<img src="assets/images/icon-sem-seo.svg" alt="SEM & SEO">
						</div>
						<h2>SEM & SEO</h2>
					</div>
					<div class="cs-service-icon-wrap">
						<div class="cs-service-icon">
							<img src="assets/images/icon-ux-design.svg" alt="UX Design">
						</div>
						<h2>UX Design</h2>
					</div>
					<div class="cs-service-icon-wrap">
						<div class="cs-service-icon">
							<img src="assets/images/icon-design.svg" alt="Web Design">
						</div>
						<h2>Web Design</h2>
					</div>
				</div>
			</div>
			<div class="internal-wrapper" id="the-content">
				<?php the_content(); ?>
			</div>
		</div>
		<!-- end/ portfolio content -->
	</section>