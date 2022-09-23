<?php
/**
 * Experience Auto Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package experienceauto
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/options-framework/' );
require_once dirname( __FILE__ ) . '/options-framework/options-framework.php';
// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );
 
 
if ( ! function_exists( 'experienceauto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function experienceauto_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on experienceauto, use a find and replace
		 * to change 'experienceauto' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'experienceauto', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main' => esc_html__( 'Main', 'experienceauto' ),
		) );
		register_nav_menus( array(
			'main-right' => esc_html__( 'Main Right', 'experienceauto' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'experienceauto_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'experienceauto_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function website_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Form', 'experienceauto' ),
		'id'            => 'footer-form',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<!--',
		'after_title'   => '-->',
	) );
}
add_action( 'widgets_init', 'website_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function add_experienceauto_website_scripts() {
	wp_enqueue_style("my-bootstrap-css", get_stylesheet_directory_uri()."/css/bootstrap.min.css");
	wp_enqueue_script( "my-bootstrap-js", get_stylesheet_directory_uri()."/js/bootstrap.min.js",array(), false, true );
	wp_enqueue_script( "my-script", get_stylesheet_directory_uri()."/js/custom.js",array(), false, true );
	
	wp_enqueue_style("poppins-font","https://fonts.googleapis.com/css?family=Poppins:400,400i,500,700|Roboto:700");
	wp_enqueue_style("fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri()."/css/custom.css" );
	wp_enqueue_style( 'experienceauto-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );

}
add_action( 'wp_enqueue_scripts', 'add_experienceauto_website_scripts' );
?>