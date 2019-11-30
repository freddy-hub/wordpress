<?php
$heading = get_sub_field('ivd_newsletter__heading');
$content = get_sub_field('ivd_newsletter__content');
$formCode = get_sub_field('ivd_newsletter__form-code');

?>

<section class="ivd-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ivd-newsletter__text text-alternate">

        <h2 class="h2-styled h2-alternate"><?php echo $heading; ?></h2>
        <div>
          <?php echo $content; ?>
        </div>

          <div class="ivd-newsletter__form-code">
            <?php echo $formCode; ?>
          </div>
        </div>

      </div>
    </div>

  </div>

</section>