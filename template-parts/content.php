<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package worldliner-template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ivd-single'); ?>>
  <div class="container">
		<div class="ivd-single__row">
			<div class="ivd-single__content-column">
				<header class="entry-header">
					<?php mangos_post_thumbnail(); ?>
				</header><!-- .entry-header -->


				<div class="entry-content ivd-single__entry-content">
					<div class="ivd-single__author-info">
						<?php $img = get_field('ivd_single__person-image'); ?>
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						<div class="ivd-single__author-text">
							<?php the_field('ivd_single__person-text'); ?>
						</div>
					</div>
					<div class="ivd-single__text-content">
						<?php the_title( '<h1 class="entry-title h2-font h2-weight">', '</h1>' ); 
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'worldliner' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						?>
						<div class="ivd-single__back-button-container">
							<a href="/veranstaltungen/" class="button-style-2">ZURÜCK ZUR ÜBERSICHT</a>
						</div>
					</div>
				</div><!-- .entry-content -->	
			</div>
			<div class="ivd-single__decoration-column">
				<div class="ivd-single__decoration">

				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
