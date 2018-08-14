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

		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center">
						<div style="width: 300px; margin-top: 4rem; margin-bottom: 2rem;">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/RMR-master-logo.svg" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">