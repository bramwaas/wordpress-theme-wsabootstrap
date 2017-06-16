<?php get_header(); ?>

<div class="row">
  <div class="col-xs-12 col-md-9">


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>
		<?php the_content(); ?>
		<hr>
		<?php comments_template(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="col-xs-12 col-md-3">
	<?php get_sidebar(); ?>	
 
  </div>
</div>

<?php get_footer(); ?>
