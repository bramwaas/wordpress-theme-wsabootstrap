<?php 
/**
 * Wsa Bootstrap functions and definitions
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wsabootstrap
 * gestart vanuit: http://blog.teamtreehouse.com/responsive-wordpress-bootstrap-theme-tutorial
 * daarna deels overgenomen van @package WP_Bootstrap_Starter
 * verder gewerkt vanuit: https://www.lyrathemes.com/bootstrap-wordpress-theme-tutorial-1/
 */
if ( ! function_exists( 'wsabootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *//*
 */

function wsabootstrap_starter_setup() {
	
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
			'primary' => esc_html__( 'Primary', 'wsabootstrap-starter' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
	) );
	
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	function wsaboostrap_starter_add_editor_styles() {
		add_editor_style( 'custom-editor-style.css' );
	}
	add_action( 'admin_init', 'wsaboostrap_starter_add_editor_styles' );
	
}
endif;
add_action( 'after_setup_theme', 'wsabootstrap_starter_setup' );

function wsabootstrap_enqueue_styles() {
/*
 * in plaats van header:
 * <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
 * <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
 * <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
 */	
	$dependencies = array();
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', $dependencies, null );
	$dependencies = array('bootstrap');
	wp_register_style('bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', $dependencies, null);
	$dependencies = array('bootstrap', 'bootstrap-theme');
	wp_enqueue_style( 'wsabootstrap-style', get_stylesheet_uri(), $dependencies );
}

function wsabootstrap_enqueue_scripts() {
	$dependencies = array('jquery');
// ipv: <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', $dependencies, '3.3.7', true );
}

add_action( 'wp_enqueue_scripts', 'wsabootstrap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'wsabootstrap_enqueue_scripts' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));
/**
 * Load custom WordPress nav walker. van wp_bootstrap
 */
if ( ! class_exists( 'wsabootstrap_navwalker' )) {
	require_once(get_template_directory() . '/inc/wsabootstrap_navwalker.php');
}
