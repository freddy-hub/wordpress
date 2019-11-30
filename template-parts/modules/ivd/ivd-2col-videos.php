<?php
$sectionHeading = get_sub_field('ivd_2col_videos__section-heading');
$iframe1 = get_sub_field('ivd_2col_videos__iframe-1');
$iframe2 = get_sub_field('ivd_2col_videos__iframe-2');
$content = get_sub_field('ivd_2col_videos__content');
$subtitle = get_sub_field('ivd_2col_videos__subtitle');
$button = get_sub_field('ivd_2col_videos__button');
?>

<section class="ivd-2col-videos">
  <div class="container">
    <h2 class="h2-styled"><?php echo $sectionHeading ?></h2>
    <div class="ivd-2col-videos__row row">
      <div class="col-lg-6">
        <div class="ivd-2col-videos__video">
          <?php echo $iframe1; ?>
        </div>
        <div class="ivd-2col-videos__video">
          <?php echo $iframe2; ?>
        </div>
      </div>
      <div class="col-lg-6">
          <?php echo $content; ?>
          <h3 class="ivd-2col-videos__more"><?php echo $subtitle; ?></h3>
          <div class="ivd-2col-videos__button-container">
            <a href="<?php echo $button['url']; ?>" class="button-style-1"><?php echo $button['title']; ?></a>
          </div>
      </div>
    </div>
  </div>
</section>

