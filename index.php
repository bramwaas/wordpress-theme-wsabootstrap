<?php 
/**
 * @copyright  Copyright (C) 2015 - 2017 AHC Waasdorp. All rights reserved.
 * @license    GNU/GPL, see LICENSE
 * @package wsabootstrap
 * 
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * gestart vanuit: http://blog.teamtreehouse.com/responsive-wordpress-bootstrap-theme-tutorial
 * daarna deels overgenomen van @package WP_Bootstrap_Starter
 * verder gewerkt vanuit: https://www.lyrathemes.com/bootstrap-wordpress-theme-tutorial-1/
 *
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-9">
		<main id="main" class="site-main" role="main">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>	
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php 
get_sidebar();
get_footer(); 

