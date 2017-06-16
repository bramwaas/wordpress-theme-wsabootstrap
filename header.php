<!DOCTYPE html>
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

    <div class="navbar navbar-default " role="navigation"> <!-- <div class="navbar navbar-inverse navbar-fixed-top"> -->
      <div class="navbar-inner">
        <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header>
		  		<button type="button"  class="navbar-toggle btn btn-navbar " data-toggle="collapse" data-target=".nav-collapse" aria-controls="nav-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
          	</div>	
          	<div class="nav-collapse navbar-collapse collapse">
            <ul class="nav navbar-nav flex-column"><!-- eventueel ook nav-tabs   -->
  
 		  <?php
  /* wp_list_pages(array('title_li' => ''));
   * home page uitsluiten van menu op basis van id = 7
   */
  			wp_list_pages(array('title_li' => '', 'exclude' => 7)) ; ?>
  


           
            </ul>
            <!--form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form -->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
