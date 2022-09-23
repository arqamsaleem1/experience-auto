<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundations
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
	<?php if(has_post_thumbnail()): ?>
		<div class="col-md-2">
			<div class="search-result-image">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="col-md-10">
			<div class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</div><!-- .entry-header -->
			<div class="search-result-text entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div>
	<?php else: ?>
		<div class="col-md-12">
			<div class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</div><!-- .entry-header -->
			<div class="search-result-text entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div>
	<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
