<?php
/**
 * Template part for displaying page content in about.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RuthMarkRoland
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid mb-0" style="background-color:#f5f5f3; background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/RMR-white.svg'); background-size:181px auto; background-repeat:no-repeat; background-position: bottom;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 col-md-8 text-center mainContent">
							<h1>
							<?php
								the_title();
							?>
							</h1>
							<?php
								the_content();
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#ffffff;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 col-md-8 text-center mainContent">
						<h2 class="p1">book a free get-to-know-you call directly with Ruth</h2>
							<p class="contactDetails">Call 07940 840743
							EMAIL <a href="mailto:enquiries@ruthmarkroland.com">enquiries@ruthmarkroland.com</a></p>
							<a href="/contact/" class="btn bookBtn" style="color:black;">MAKE AN ENQUIRY</a>


					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-0 text-center" style="background-color: #ffffff;">
		<div class="row">
			<div class="container-fluid">
				<div class="row">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="homebanner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
						<div class="quoteText container text-left">Ruth changed my life,<br />
						I can’t put it any other way.
						<div class="quoteCredit">
							A.Brown
						</div>
						</div>


					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
