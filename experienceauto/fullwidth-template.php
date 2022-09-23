<?php
/**
 * Template Name: Full width Template
 */

get_header();
?>
<div class="fullwidth-div content-div">
	<div class="container">
		<div class="page-content">
			<div class="page-main-content">
				<div class="page-title"><h1><?php the_title(); ?></h1></div>
				<div class="page-content-div">
					<?php
						while ( have_posts() ) :
							the_post();			
							the_content();
						endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();