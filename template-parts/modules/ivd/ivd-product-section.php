<?php
$col1Image = get_sub_field('ivd_product_section__column-1-image');
$col1Heading = get_sub_field('ivd_product_section__column-1-heading');
$col1Subheading = get_sub_field('ivd_product_section__column-1-subheading');
$col1Text = get_sub_field('ivd_product_section__column-1-text');
$col2Heading = get_sub_field('ivd_product_section__column-2-heading');
$col2Text = get_sub_field('ivd_product_section__column-2-text');
$col2Image = get_sub_field('ivd_product_section__column-2-image');
$col2Link = get_sub_field('ivd_product_section__column-2-link');
$col2Price = get_sub_field('ivd_product_section__column-2-price');
?>


<section class="ivd-product-section">
  <div class="container">
    <div class="row">
      <div class="ivd-product-section__column-1 col-lg-6">

        <div class="ivd-product-section__column-1-image-container">
          <img src="<?php echo $col1Image['url']; ?>" alt="<?php echo $col1Image['alt']; ?>">
        </div>
        <h2 class="h3-styled"><?php echo $col1Heading; ?></h2>
        <h3 class="h4-styled"><?php echo $col1Subheading; ?></h3>
        <div class="ivd-product-section__column-1-text-container">
          <?php echo $col1Text; ?>
        </div>
      </div>
      <div class="ivd-product-section__column-2 col-lg-6">
        <div class="ivd-product-section__text-container">
          <h2 class="h3-styled"><?php echo $col2Heading; ?></h3>
          <?php echo $col2Text; ?>
        </div>
        <div class="ivd-product-section__column-2-bottom-content">
          <div class="ivd-product-section__column-2-image-container">
            <img src="<?php echo $col2Image['url']?>" alt="<?php echo $col2Image['alt']?>">
          </div>
          <div class="ivd-product-section__button-container">
            <a href="<?php echo $col2Link['url']; ?>" class="button-style-1"><?php echo $col2Link['title']; ?></a><span class="ivd-product-section__button-price"><?php echo $col2Price; ?> €</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



