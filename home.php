<?php get_header(); ?>

<div class="row">
  <div class="col-xs-12 col-md-9">
	<h1>Nieuws</h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>
    	<hr>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this post does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="col-xs-12 col-md-3">
	<?php get_sidebar(); ?>	
 
  </div>
</div>

<?php get_footer(); ?>
