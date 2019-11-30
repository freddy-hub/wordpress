<?php
$sectionHeading = get_sub_field('ivd_contentpaket__heading');
$sectionSubeading = get_sub_field('ivd_contentpaket__subheading');
$icon1 = get_sub_field('ivd_contentpaket__icon-1');
$icon1Text = get_sub_field('ivd_contentpaket__icon-text-1');
$icon2 = get_sub_field('ivd_contentpaket__icon-2');
$icon2Text = get_sub_field('ivd_contentpaket__icon-text-2');
$icon3 = get_sub_field('ivd_contentpaket__icon-3');
$icon3Text = get_sub_field('ivd_contentpaket__icon-text-3');
$col1Heading = get_sub_field('ivd_contentpaket__column-1-heading');
$col1Text = get_sub_field('ivd_contentpaket__column-1-text');
$col2Heading = get_sub_field('ivd_contentpaket__column-2-heading');
$col2Text = get_sub_field('ivd_contentpaket__column-2-text');
$col2Link = get_sub_field('ivd_contentpaket__column-2-link');
$price = get_sub_field('ivd_contentpaket__price');
$heading2 = get_sub_field('ivd_contentpaket__heading-2');
?>


<section class="ivd-contentpaket">
  <div class="container">
    <h2 class="h2-styled"><?php echo $sectionHeading ?></h2>
    <p class="ivd-contentpaket__subheading"><?php echo $sectionSubeading ?></p>


    <div class="ivd-contentpaket__icons row">

      <div class="ivd-contentpaket__icon-item col-lg-4">
        <div class="ivd-contentpaket__icon-container">
          <img src="<?php echo $icon1['url']; ?>" alt="<?php echo $icon1['alt']; ?>">
        </div>
        <h3 class="h2-font h2-weight">
          <?php echo $icon1Text; ?>
        </h3>
      </div>

      <div class="ivd-contentpaket__icon-item col-lg-4">
        <div class="ivd-contentpaket__icon-container">
          <img src="<?php echo $icon2['url']; ?>" alt="<?php echo $icon2['alt']; ?>">
        </div>
        <h3 class="h2-font h2-weight">
          <?php echo $icon2Text; ?>
        </h3>
      </div>

      <div class="ivd-contentpaket__icon-item col-lg-4">
        <div class="ivd-contentpaket__icon-container">
          <img src="<?php echo $icon3['url']; ?>" alt="<?php echo $icon3['alt']; ?>">
        </div>
        <h3 class="h2-font h2-weight">
          <?php echo $icon3Text; ?>
        </h3>
      </div>

    </div>


    <div class="ivd-contentpaket__columns">

      <div class="ivd-contentpaket__column-1">
        <div class="ivd-contentpaket__column-1-inner">
          <h3 class="h3-styled"><?php echo $col1Heading; ?></h3>
          <div class="ivd-contentpaket__column-text">
            <?php echo $col1Text; ?>
          </div>
        </div>
      </div>
      <div class="ivd-contentpaket__column-2">
        <div class="ivd-contentpaket__column-2-inner">
          <h3 class="h3-styled"><?php echo $col2Heading; ?></h3>
          <div class="ivd-contentpaket__column-text">
            <?php echo $col2Text; ?>
          </div>
        </div>
        <div class="ivd-contentpaket__button-container">
          <a href="<?php echo $col2Link['url']; ?>" class="button-style-1"><?php echo $col2Link['title']; ?></a><span class="ivd-contentpaket__button-price"><?php echo $price; ?> €</span>
        </div>
      </div>



    </div>

    <h2 class="h2-styled ivd-contentpaket__checklist-heading"><?php echo $heading2; ?></h2>

    <div class="ivd-contentpaket__checklist-repeater">
      <div class="ivd-contentpaket__checklist-repeater-inner">
        <?php if (have_rows('ivd_contentpaket__checklist')) : ?>
          <?php while (have_rows('ivd_contentpaket__checklist')) : the_row(); ?>  
            <div class="ivd-contentpaket__checklist-item">
              <i class="fa fa-check"></i><span class="ivd-contentpaket__checklist-item-text h2-font h2-weight"><?php echo the_sub_field('ivd_contentpaket__checklist__item'); ?></span>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>