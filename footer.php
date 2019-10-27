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
				<div class="site-info text-center contactDetailsFooter">
							<?php the_field("footer_address", "option"); ?>
							<a href="mailto:ENQUIRIES@ruthmarkroland.com">ENQUIRIES@ruthmarkroland.com</a></p>
					
				</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
