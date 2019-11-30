<?php
$backgroundImage = get_sub_field('ivd_hero_header__background-image');
$mainColHeading = get_sub_field('ivd_hero_header__main-column-heading');
$mainColText = get_sub_field('ivd_hero_header__main-column-text');
$sideColHeading = get_sub_field('ivd_hero_header__side-column-heading');
$sideColImage = get_sub_field('ivd_hero_header__main-column-image');
$sideColText = get_sub_field('ivd_hero_header__side-column-text');
$sideColButton = get_sub_field('ivd_hero_header__side-column-button');
?>
<section class="ivd-hero-header" style="background-image: url('<?php echo $backgroundImage['url']; ?>');" >
  <div class="container">
    <div class="row">
      <div class="ivd-hero-header__main-content col-xl-7">
          <?php if ($mainColHeading): ?>
            <h1 class="h2-styled h2-styled--alternate"><?php echo $mainColHeading; ?></h1>
            <h2><?php echo $mainColText; ?></h2>
          <?php endif; ?>
      </div>
    </div>
    <?php if ($sideColHeading): ?>

      <div class="ivd-hero-header__overlay-section">
        <h3 class="h3-styled"><?php echo $sideColHeading; ?></h3>
        <div class="ivd-hero-header__overlay-content">
          <?php if ($sideColImage): ?>

            <div class="ivd-hero-header__overlay-image-column">
              <img src="<?php echo $sideColImage['url']; ?>" alt="<?php echo $sideColImage['alt']; ?>">
            </div>

            <div class="ivd-hero-header__overlay-text-column">
              <div class="ivd-hero-header__overlay-text h2-font">
                <?php echo $sideColText; ?>
              </div>
              <?php if ($sideColButton) : ?>
                <a href="<?php echo $sideColButton['url']; ?>" class="button-style-1"><?php echo $sideColButton['title']; ?></a>
              <?php endif; ?>

            </div>
          <?php else: ?>
            <div class="ivd-hero-header__overlay-text-column ivd-hero-header__overlay-text-column--full">
              <div class="ivd-hero-header__overlay-text h2-font">
                <?php echo $sideColText; ?>
              </div>
              <?php if ($sideColButton) : ?>
                <a href="<?php echo $sideColButton['url']; ?>" class="button-style-1"><?php echo $sideColButton['title']; ?></a>
              <?php endif; ?>
            </div>            
          <?php endif; ?>

        </div>
      </div>

    <?php endif; ?>
  </div>



</section>