<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RuthMarkRoland
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row justify-content-center">
				<div class="site-info">
						<div style="width: 250px; margin-top: 4rem; margin-bottom: 2rem;">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/RMR-only-grey.svg" width="100%">
						</div>
					
				</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
