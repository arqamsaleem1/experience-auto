<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package experienceauto
 */

get_header();
?>
<div class="content-div">
	<div class="container">
		<div class="page-content">
			<div class="row">
				<div class="page-left-section col-md-2">
					<div class="side-menu-sidebar">
						<?php /** Preparing list of child pages **/
							global $post;
							if ( is_page() && $post->post_parent ){
								$args = array('sort_order'=>'ASC','sort_column'=>'post_date','child_of'=>$post->post_parent);
							}
							else{
								$args = array('sort_order'=>'ASC','sort_column'=>'post_date','child_of'=>$post->ID);
							}
							$childpages = get_pages( $args );
						?>
						<ul class="side-menu-list">
						<li class="side-menu-item parent-item <?php if($post->post_parent == 0 ): ?> current-item <?php endif; ?>">
							<a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a>
						</li>
						<?php foreach($childpages as $childpage):?>
							<li class="side-menu-item child-item <?php if($childpage->ID == $post->ID ): ?> current-item <?php endif; ?>">
							<a href="<?php echo get_permalink( $childpage->ID ); ?>"><?php echo $childpage->post_title; ?></a>
							</li>
						<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="page-right-section col-md-10">
					<div class="page-main-content">
				
						<?php if ( ! $post->post_parent == 0 ):?>
							<div class="page-title"><h1><?php the_title(); ?></h1></div>
						<?php endif; ?>
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
	</div>
</div>
<?php
get_footer();