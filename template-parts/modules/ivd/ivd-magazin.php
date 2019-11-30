<?php
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
);
$query = new WP_Query( $args );
?>

<section class="ivd-magazin">
  <div class="container">
    <h2 class="h2-styled">IVD PLUS - MAGAZIN</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
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
    <div class="ivd-magazin__button-container">
      <a href="#" class="button-style-1">Weitere Artikel lesen</a>
    </div>
  </div> 
</section>