<?php
/**
 * Template part for displaying page content in treatment.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RuthMarkRoland
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid mb-0 text-center">
		<div class="row">
			<div class="container-fluid">
				<div class="row">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="homebanner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
						<div class="quoteText">Effective therapy<br />
						<span class="gray10">for individuals <br />
						and workplaces</span>
						<a href="/contact" class="btn largeBtn whiteBtn">MAKE AN ENQUIRY</a>

						</div>


					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-5 mb-5">
						<div class="treatment-intro-block">
						<?php
							the_content();
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid gray5">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-6 p-4">
						<div class="treatment-content-block">
							<?php the_field('left_col_text') ?>
						</div>
					</div>
					<div class="col-md-6 p-4">
						<div class="treatment-content-block">
							<?php the_field('right_col_text') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 p-4">
				<div class="content-block-grey10 text-center">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/call-icon.svg" width="50px" height="50"><br />
					<p><span class="introText">
						call<br />
07471 159229<br />
If you would like to discuss 
your personal needs, or to 
explore workplace therapy 
for your organisation
					</span>
				</div>
			</div>
		</div>
	</div>





</article><!-- #post-## -->
