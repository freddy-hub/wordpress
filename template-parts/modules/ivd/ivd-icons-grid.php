<?php
$sectionHeading = get_sub_field('ivd_icons_grid__heading');
?>


<section class="ivd-icons-grid">
  <div class="container">
    <?php if ($sectionHeading): ?>
      <h2 class="h2-styled"><?php echo $sectionHeading ?></h2>
    <?php endif; ?>
    <div class="ivd-icons-grid__grid">
      <?php if (have_rows('ivd_icons_grid__repeater')) : ?>
        <div class="row">
          <?php while (have_rows('ivd_icons_grid__repeater')) : the_row(); ?>  
            <div class="ivd-icons-grid__item col-lg-4 col-md-6">
              <div class="ivd-icons-grid__item-inner">
                <div class="ivd-icons-grid__icon-container">
                  <?php $iconImage = get_sub_field('ivd_icons_grid__repeater__icon'); ?>
                  <img src="<?php echo $iconImage['url']; ?>" alt="<?php echo $iconImage['alt']; ?>">
                </div>
                <h3 class="h2-font h2-weight"><?php the_sub_field('ivd_icons_grid__repeater__heading'); ?></h3>
                <p class="ivd-icons-grid__item-text">
                  <?php the_sub_field('ivd_icons_grid__repeater__text'); ?>
                </p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>