<!DOCTYPE html>
<html>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">	
	<link rel="shortcut icon" href="<?php echo get_site_url(); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?></title>
	<?php 
	global $wp_query;
	$post = $wp_query->post;
	$description = strip_tags(get_field('landing_banner'));
	?>
	<meta name="description" content="<?php echo $description; ?>" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Titillium+Web:600,400,300" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<section class="header-cont">
	<div class="container">
		<div class="row">			
			<div class="col-sm-6">				
		   		<a href="mail:info@fry-fresh.co.uk">Email: info@fryfreshoils.co.uk</a>
			</div>
			<div class="col-sm-6 tel">				
		   		<a href="tel:01978821773">Tel: 01978 799704</a>
			</div>
		</div>
	</div>
</section>

<header class="home-naviagtion landing-nav" id="sticky">
		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		        	
			    
			 
		    	  <!-- Collect the nav links, forms, and other content for toggling -->
				    
			  
			    	<div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a href="<?php echo get_site_url(); ?>" class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Fry Fresh Edible Oils"></a>
				    </div>	    	
				    <?php global $post; ?>
			   		<h1><?php echo get_the_title($post->ID); ?></h1>
			   		
	 				<?php
				        wp_nav_menu( array(
				            'menu'              => 'primary',
				            'theme_location'    => 'primary',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				    		'container_id'      => 'bs-example-navbar-collapse-1',
				            'menu_class'        => 'nav navbar-nav pull-right',
				            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				            'walker'            => new wp_bootstrap_navwalker())
				        );
				    ?>
		    

		  
		  </div><!-- /.container-fluid -->
		</nav>
	</header>

