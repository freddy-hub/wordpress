<?php
$sectionHeading = get_sub_field('ivd_marktplatz__heading');
?>

<section class="ivd-marktplatz">
  <div class="container">
    <h2 class="h2-styled"><?php echo $sectionHeading ?></h2>

    <div class="ivd-marktplatz__products">
      <?php if (have_rows('ivd_marktplatz__repeater')) : ?>
        <?php while (have_rows('ivd_marktplatz__repeater')) : the_row(); ?>  
          <div class="ivd-marktplatz__product">

            <div class="ivd-marktplatz__product-image-container">
              <?php $productImage = get_sub_field('ivd_marktplatz__repeater__image'); ?>
              <img src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>">
            </div>

            <div class="ivd-marktplatz__text-container">
              <h3 class="h3-styled"><?php the_sub_field('ivd_marktplatz__repeater__heading'); ?></h3>
              <h4 class="h2-font h2-weight h2-color"><?php the_sub_field('ivd_marktplatz__repeater__subheading'); ?></h4>
              <?php the_sub_field('ivd_marktplatz__repeater__text'); ?>

              <div class="ivd-marktplatz__button-container">
                <?php $productLink = get_sub_field('ivd_marktplatz__repeater__link'); ?>
                <a href="<?php echo $productLink['url']; ?>" class="button-style-1">Zum Angebot</a><span class="ivd-marktplatz__button-price"><?php the_sub_field('ivd_marktplatz__repeater__price'); ?> €</span>
              </div>

            </div>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>