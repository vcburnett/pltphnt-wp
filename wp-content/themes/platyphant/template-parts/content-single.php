<section id="case-study">
		<!-- portfolio content -->
		<div class="cs-content">
			<?php
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				echo '<div id="cs-img-header" style="background-image: url(' . $url . ')">';
			?>
				<div class="cs-img-content-wrapper">
					<h1><?php the_title(); ?></h1>
					<a href="#the-content" class="scroll">
						Read the case study
						<span class="arrow">
							<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.31 75.15">
								<path d="M65.15,75.15a10,10,0,0,1-7.07-2.93L2.93,17.07A10,10,0,0,1,17.07,2.93L65.15,51,113.24,2.93a10,10,0,0,1,14.14,14.14L72.23,72.23A10,10,0,0,1,65.15,75.15Z"/>
							</svg>
						</span>
					</a>
				</div>
			</div>
			<?php the_content(); ?>
		</div><!-- end/ cs-content -->

</section><!-- #post-## -->
