<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RuthMarkRoland
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script type="text/javascript" src="//fast.fonts.net/jsapi/8b020e44-c402-41a0-856c-963106a715da.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">


		<div class="container-fluid" style="background-color: #474c55;">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center">
						<div class="mainLogo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/RMR-master-logo-white.svg"">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid navfixed" style="background-color: #474c55;">
			<div class="row">
				<div class="container pb-4">
					<div class="row justify-content-center">
					    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" >
								<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
						   		<div class="collapse navbar-collapse" id="navbarNav">
					            <?php
					            $args = array(
					              'theme_location' => 'primary',
					              'depth'      => 2,
					              'container'  => false,
					              'menu_class'     => 'navbar-nav',
					              'walker'     => new Bootstrap_Walker_Nav_Menu()
					              );
					            if (has_nav_menu('primary')) {
					              wp_nav_menu($args);
					            }
					            ?>
					      		</div>
				    	</nav>
				    </div> <!-- close row -->
				</div> <!-- close container -->
			</div>
		</div>




	</header><!-- #masthead -->

	<div id="content" class="site-content">
