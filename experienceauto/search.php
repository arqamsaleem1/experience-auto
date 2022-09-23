<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package experienceauto
 */

get_header();
?>
<?php if ( have_posts() ) : ?>
<div class="inner-banner">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inner-banner.jpg" class="inner-banner-img" alt="Inner Banner Image">
	<div class="inner-banner-caption">
		<h1>Search Results</h1>
	</div>
</div>
<?php endif; ?>
<div class=" search-results content-div">
	<div class="container">
		<div class="entry-header">
			<h1 class="page-title">
				<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'experienceauto' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</div>
		<div class="page-content">
			<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</div>
</div>
<?php
get_footer();
