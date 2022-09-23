<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package experienceauto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
  <nav class="navbar navbar-expand-sm upper-menu">
	<a class="navbar-brand" href="#">
			<img src="<?php echo of_get_option( 'header_logo','' ); ?>">
	</a>
	  <ul class="navbar-nav ml-auto"></ul>
	  <ul class="navbar-nav social-media">
		<li class="nav-item">
		  <a class="nav-link" href="<?php echo of_get_option( 'facebook_link','' ); ?>"><i class="fa fa-facebook"></i></a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="<?php echo of_get_option( 'instagram_link','' ); ?>"><i class="fa fa-instagram"></i></a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="<?php echo of_get_option( 'youtube_link','' ); ?>"><i class="fa fa-youtube-play"></i></a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="https://wa.me/<?php echo of_get_option( 'whatsapp_link','' ); ?>"><i class="fa fa-whatsapp"></i></a>
		</li>
	  </ul>
	</nav>
</div>
<div class="container">
	<div class="mobile-menu">
		
		 <nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="mobile-nav collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu( array('theme_location' => 'main',) ); ?>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
	<div class="desktop-menu">
		<div class="row">
			<div class="col-sm-9 left-menu">
			<nav class="navbar navbar-expand-lg menu-setting">
			  <?php wp_nav_menu( array('theme_location' => 'main',) ); ?>
			</nav>
		  </div>
		  <div class="col-sm-3 right-menu">
		  <nav class="navbar navbar-expand-sm">
			<?php wp_nav_menu( array('theme_location' => 'main-right',) ); ?>
		  </nav>
		  </div>
		</div>
	</div>
</div>