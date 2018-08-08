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
			<div class="container-fluid homebanner">
				<div class="row align-items-end">
					<div class="col-md-12">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail_url(); ?>" class="align-bottom">
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid mb-0" style="background-color:#e6e6e6;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 p-5 text-center">
						<?php
							the_content();
						?>
				</div>
		</div>
	</div>

</article><!-- #post-## -->
