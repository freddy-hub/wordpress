<section class="ivd-unsere-partner">
  <h2 class="h2-styled">Unsere partner</h2>
  <div class="container">


    <?php if (have_rows('partner_auszeichnungen__repeater', 'option')) : ?>
      <div class="ivd-unsere-partner__slider ui-color">
        <?php while (have_rows('partner_auszeichnungen__repeater', 'option')) : the_row(); ?>  


          <div class="ivd-unsere-partner__slide">
            <?php $image = get_sub_field('partner_auszeichnungen__repeater__image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>

        <?php endwhile; ?>

      </div>
    <?php endif; ?>
  </div>

</section>