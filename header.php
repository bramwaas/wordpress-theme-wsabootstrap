<?php
/**
 * @copyright  Copyright (C) 2017 - 2017 AHC Waasdorp. All rights reserved.
 * @license    GNU/GPL, see LICENSE
 * @package wsabootstrap
 * 
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * verder: https://www.lyrathemes.com/bootstrap-wordpress-theme-tutorial-1/
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
    <?php wp_head(); ?>  </head>

  <body>

    <div id="masthead" class="navbar navbar-default " role="banner"> <!-- <div class="navbar navbar-inverse navbar-fixed-top"> -->
      <div class="navbar-inner">
        <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
		  		<button type="button"  class="navbar-toggle btn btn-navbar " data-toggle="collapse" data-target=".nav-collapse" aria-controls="nav-collapse" aria-expanded="false">
					<span class="sr-only"><?php echo esc_html__('Toggle navigation', 'wsabootstrap'); ?></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wsabootstrap_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo get_theme_mod( 'wsabootstrap_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>
                </div><!-- /.navbar-brand -->
          	</div>	
          	<div class="navbar-collapse collapse" role="navigation">
  
 		  <?php
 		  wp_nav_menu( array(
 		  'theme_location'    => 'primary',
 		  'depth'             => 3,
 		  'link_before' => '', //Add wrapper in the text inside the anchor tag
 		  'link_after' => '',
 		  'container'         => '',
 		  'container_class'   => '',
 		  'container_id'      => 'navbar-collapsed',
 		  'menu_class'        => 'nav navbar-nav flex-column nav-tabs ', // classes van buitenste <ul>
 		  'fallback_cb'       => 'wsabootstrap_navwalker::fallback',
 		  'walker'            => new wsabootstrap_navwalker())
 		  );
 		  ?>

          </div><!--/.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </div>
    </div><!-- #masthead -->
    <div id="page-sub-header" style="background-image: url('<?php if(has_header_image()) { header_image(); } ?>');">
        <div class="container">
            <h1><?php esc_url(bloginfo('name')); ?></h1>
            <p><?php bloginfo( 'description'); ?></p>
        </div>
    </div>

    <div class="container">
