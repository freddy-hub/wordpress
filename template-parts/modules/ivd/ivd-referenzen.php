<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'review',
);
$query = new WP_Query( $args );
?>


<section class="ivd-referenzen">
  <div class="container">
    <h2 class="h2-styled section-heading">das sagen unsere Mitgleider</h2>
    
      <div class="ivd-referenzen__slider ui-color">
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>



        <div class="ivd-referenzen__slide">
          <div class="ivd-referenzen__slide-inner">
            <div class="ivd-referenzen__portrait-column">
              <?php $img = get_field('kundenbild'); ?>
              <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
              <div class="ivd-referenzen__portrait-text"><?php the_field('ivd-referenzen__title-under-image'); ?></div>
            </div>
            <div class="ivd-referenzen__text-column">
              <h3 class="h3-styled"><?php the_field('review_titel'); ?></h3>
              <div class="ivd-referenzen__stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="ivd-referenzen__text">
                <?php the_field('review_text'); ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); endif; ?> 
      </div>
    </div>
  </div>
</section>