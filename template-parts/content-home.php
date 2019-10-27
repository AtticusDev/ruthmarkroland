<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RuthMarkRoland
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid mb-0 text-center" style="background-color: #ffffff;">
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
	<div class="container p-4">
		<div class="row">
			<div class="col-md-6 p-4">
				<div class="content-block">
					<?php the_field("home_intro"); ?>
				</div>
			</div>
			<div class="col-md-6 p-4">
				<div class="content-block">
					<div class="content-block-grey10">
						<?php the_field("home_conditions"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid gray5">
		<div class="row">
			<div class="col-md-12">
				<div class="content-block-grey5 text-center">
					<h2><?php the_field("home_choose_title"); ?></h2>
						<?php the_field("home_choose_intro"); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="d-flex justify-content-center">
								<div class="circleBlock d-flex align-items-center justify-content-center">
									<?php the_field("home_choose_box1"); ?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="d-flex justify-content-center">
								<div class="circleBlock d-flex align-items-center justify-content-center">
									<?php the_field("home_choose_box2"); ?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="d-flex justify-content-center">
								<div class="circleBlock d-flex align-items-center justify-content-center">
									<?php the_field("home_choose_box3"); ?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="d-flex justify-content-center">
								<div class="circleBlock d-flex align-items-center justify-content-center">
									<?php the_field("home_choose_box4"); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="content-block-grey5 text-center">
					<?php the_field("home_choose_bottom"); ?>

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-4">
				<div class="content-block">
					<?php the_field("home_therapy_panel"); ?>
					<a href="/contact" class="btn largeBtn grayBtn">MAKE AN ENQUIRY</a>

				</div>
			</div>
			<div class="col-md-6 p-4">
				<div class="content-block">
					<div class="content-block-grey10 text-center">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/call-icon.svg" width="50px" height="50"><br />
						<p><span class="introText">
							call<br />
	07471 159229<br />
	If you would like to discuss 
	your personal needs, or to 
	explore workplace therapy 
	for your organisation
						</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
</article><!-- #post-## -->
