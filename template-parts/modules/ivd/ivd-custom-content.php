<?php
$spaceTop = get_sub_field('ivd_custom_content__space-top');
$content = get_sub_field('ivd_custom_content__content');
$spaceBottom = get_sub_field('ivd_custom_content__space-bottom');
?>

<section class="ivd-custom-content" style="padding-top: <?php echo $spaceTop; ?>px; padding-bottom: <?php echo $spaceBottom; ?>px;">
  <div class="container">
    <?php echo $content; ?>
  </div>
</section>