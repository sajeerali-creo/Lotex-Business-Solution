<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Lotex Application Development and Management services provide analysis, design, development. Read More. 0; 1; 2; 3; 4. Legal Notice|Privacy Policy|Corporate Governance|Website Feedback|Download. © 2015 NeoLotex Business Solutions Private Limited 2015 | All Rights Reserved | Website Developed By Digitifi ..." />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<title>Custom Software | Beyond Service level Agreements</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

			<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">
			<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">

      <!--Import Google Icon Font-->

       <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/materialize.min.css"  media="screen,projection"/>

      <!-- sass compile css -->
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/screen.css">

	  <!-- Slick -->
      <link rel='stylesheet prefetch' href="<?php bloginfo('template_url'); ?>/stylesheets/slick.css">
      <link rel='stylesheet prefetch' href="<?php bloginfo('template_url'); ?>/stylesheets/slick-theme.css">

      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/reset.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/style.css">
      <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>



</head>


<div class="cd-overlay2"></div>


<!-- header -->
<!-- =============================================== -->
<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">
        <ul class="top-contact-details">
          <li><i class="zmdi zmdi-phone"></i>&nbsp;8884426333</li>
          <li><i class="zmdi zmdi-email"></i>&nbsp;mail@Lotex.co.in</li>
        </ul>
      </div>
      <div class="col l6 m6 s12">
        <ul class="top-social">
          <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
          <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
          <li><a href="#"><i class="zmdi zmdi-youtube"></i></a></li>
          <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    </div>
</div>

<header class="cd-main-header">
	<div class="container">
	<div class="row">
		<div class="col s12 l2 m2">
			<a class="cd-logo" href="http://lotex.co.in/neolotex/"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Logo"></a>
		</div>
		<div class="col s12 l10">
			<div class="navbars m10 hide-on-med-and-down">
				<div class="dropdowns">
			    <button class="dropbtn">Company
			      <i class="zmdi zmdi-chevron-down"></i>
			    </button>
			    <div class="dropdown-contents">

			      <div class="header">
							<div class="container">
			        <h2>Company</h2>
							</div>
			      </div>
			      <div class="rows">
							<div class="container">
			        <div class="columns">
			           <?php wp_nav_menu( array('menu' => 'company-menu')); ?>
			        </div>
			        <div class="columns">&nbsp;</div>
			        <div class="columns">
			          <div class="video-m">
									<video width="400" controls>
									  <source src="<?php bloginfo('template_url'); ?>/assets/mov_bbb.mp4" type="video/mp4">
									  <source src="<?php bloginfo('template_url'); ?>/assets/mov_bbb.ogg" type="video/ogg">
									</video>
								</div>
			        </div>
						</div>
			      </div>

			    </div>
			  </div>
			  <div class="dropdowns">
			    <button class="dropbtn">Service
			      <i class="zmdi zmdi-chevron-down"></i>
			    </button>
			    <div class="dropdown-contents">
			      <div class="header">
							<div class="container">
			        	<h2>Services</h2>
							</div>
			      </div>
			      <div class="rows">
							<div class="container">
			        <div class="columns">
			          <h3>Business Process Outsourcing</h3>
			          <?php wp_nav_menu( array('menu' => 'businessprocess-menu')); ?>
			        </div>
			        <div class="columns">
			          <h3>Technology Service</h3>
			          <?php wp_nav_menu( array('menu' => 'technology-menu')); ?>
			        </div>
			        <div class="columns">
			          <h3>Scanner Dealership</h3>
			          <?php wp_nav_menu( array('menu' => 'scannerdealership-menu')); ?>
			        </div>
						</div>
			      </div>
			    </div>
			  </div>

				<div class="dropdowns">
				 <button class="dropbtn">Solutions
					 <i class="zmdi zmdi-chevron-down"></i>

				 </button>
				 <div class="dropdown-contents">
					 <div class="header">
						 <div class="container">
						 		<h2>Solutions</h2>
					 	 </div>
					 </div>
					 <div class="rows">
						 <div class="container">
						 <div class="columns solu-menu">
							 <?php wp_nav_menu( array('menu' => 'solution-menu')); ?>
						 </div>
					  </div>

					 </div>
				 </div>
			 </div>

				<a href="http://lotex.co.in/neolotex/career/">Career</a>
			  <a href="http://lotex.co.in/neolotex/blog/">Blog</a>
			  <a href="http://lotex.co.in/neolotex/contact-us/">Contact Us</a>
			</div>
			<!-- mobile -->
			<ul class="collapsible hide-on-large-only">
			 <li>
				 <div class="collapsible-header"><i class="zmdi zmdi-menu"></i>&nbsp;Menu</div>
				 <div class="collapsible-body">
					 <h2>Company</h2>
					 <?php wp_nav_menu( array('menu' => 'company-menu')); ?>
					 <h2>Services</h2>
					 <h3>Business Process Outsourcing</h3>
					 <?php wp_nav_menu( array('menu' => 'businessprocess-menu')); ?>

					 <h3>Technology Service</h3>
					 <?php wp_nav_menu( array('menu' => 'technology-menu')); ?>

					 <h3>Scanner Dealership</h3>
					 <?php wp_nav_menu( array('menu' => 'scannerdealership-menu')); ?>

					  <h2>Solution</h2>
						<?php wp_nav_menu( array('menu' => 'solution-menu')); ?>

						<a href="http://lotex.co.in/neolotex/career/">Career</a>
					  <a href="http://lotex.co.in/neolotex/blog/">Blog</a>
					  <a href="http://lotex.co.in/neolotex/contact-us/">Contact Us</a>

				 </div>
			 </li>
		 </ul>
		</div>



	</div>
	</div>
</header>
