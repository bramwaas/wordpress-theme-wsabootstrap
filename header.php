<?php
/**
 * @copyright  Copyright (C) 2015 - 2017 AHC Waasdorp. All rights reserved.
 * @license    GNU/GPL, see LICENSE
 * @package wsabootstrap
 * 
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>  </head>

  <body>

    <div id="masthead" class="navbar navbar-default " role="banner"> <!-- <div class="navbar navbar-inverse navbar-fixed-top"> -->
      <div class="navbar-inner">
        <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header>
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
                </div><!-- /.nabar-brand -->
          	</div>	
          	<div class="navbar-collapse collapse" role="navigation">
  
 		  <?php
  /*
   *             <ul class="nav navbar-nav flex-column nav-tabs "><!-- eventueel ook nav-tabs   -->
   *  wp_list_pages(array('title_li' => ''));
   * home page uitsluiten van menu op basis van id = 7
   * wp_list_pages(array('title_li' => '', 'exclude' => 7)) ; ?>
   *            </ul>
   * in plaats hiervan, inclusief <ul> met een functie gekopieerd uit wp_bootstrap,
   * waarschijnlijk ook aanpassing in functions.php nodig
   */
 		 
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
