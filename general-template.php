<?php

/**
 * Template Name: Flexible Content
 * 
 */

get_header();
?>

	<div id="primary" class="content-area content-area-general">
		<main id="main" class="site-main">

		  <?php while (have_posts()) : the_post(); ?>
			
        <?php get_template_part('template-parts/content', 'flexible'); ?>
				<?php //get_template_part('template-parts/modules/text-with-person-custom-v1'); ?>


      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
