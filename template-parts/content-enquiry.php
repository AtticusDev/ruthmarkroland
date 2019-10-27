<?php
/**
 * Template part for displaying page content in enquiry.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RuthMarkRoland
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid mb-0" style="background-color:#ffffff;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 col-md-8 text-center mainContent">
						<h3>book a free get-to-know-you call directly with Ruth</h3>
							<p class="contactDetails">Call 07940 840743<br />
							EMAIL <a href="mailto:enquiries@ruthmarkroland.com">enquiries@ruthmarkroland.com</a></p>

							<?php
								the_content();
							?>


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
