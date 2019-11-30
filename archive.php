<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package worldliner-template
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<section class="ivd-magazin ivd-magazin--archive">
			<div class="container">
				<h2 class="h2-styled"><?php single_cat_title(); ?></h2>
					
				<div class="ivd-magazin__grid">
					<div class="row">

						<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
								
								<div class="ivd-magazin__item col-lg-4 col-md-6"> 
									<div class="ivd-magazin__item-inner">
										<a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
										</a>
										<div class="ivd-magazin__bottom-container">
											<a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
											<div class="ivd-magazin__grid-text">
												<?php the_excerpt(); ?>
											</div>
											<a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
										</div>
									</div>
								</div>

						<?php endwhile; wp_reset_postdata(); endif; ?> 
					</div>
				</div>
			</div> 
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
