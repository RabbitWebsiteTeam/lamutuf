<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css" /><link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/jquery.mmenu.all.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/component.css" />
	<script src="<?php bloginfo('template_url'); ?>/assets/js/modernizr.custom.js"></script>
	 <script defer src="<?php bloginfo('template_url'); ?>/assets/js/jquery.flexslider.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 
	 

<script >
	 $(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
		</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			

   
<div class="top-bg"></div>
	<div class="site-inner">
       <div class="row nopad" id="top">
	   
	<div id="head">
	<div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12 logo">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"/></a>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8">
           
           <div class="phone visible-xs">
		 
			<header role="banner" class="navbar navbar-fixed-top1 ">
				  <div class="container">
				
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
						
					
					<li><a href="http://rabbitdigital.co.in/lamtuf/">Home</a></li>
					<li><a href="http://rabbitdigital.co.in/lamtuf/aboutus/">About Us</a></li>
					<li><a href="http://rabbitdigital.co.in/lamtuf/product-info/">Products </a></li>
					<li><a href="http://rabbitdigital.co.in/lamtuf/contact/">Contact US</a></li>
		             <li> <a href="#">Become a Distributor</a></li>
				
						</ul>
					</div><!-- /dl-menuwrapper -->
				</div>
					
				</header>
				
			
			
			
             </div>

			<div class="phone hidden-xs">
			<a href="http://rabbitdigital.co.in/lamtuf/">Home</a>
					<a href="http://rabbitdigital.co.in/lamtuf/aboutus/">About Us</a>
					<a href="http://rabbitdigital.co.in/lamtuf/product-info/">Products </a>
					<a href="http://rabbitdigital.co.in/lamtuf/contact/">Contact US</a>
		      <a href="#">Become a Distributor</a>
			    
             </div>
    </div>
	</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/lamtuf/assets/js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu();
			});
		</script>