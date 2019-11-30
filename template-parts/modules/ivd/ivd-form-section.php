<?php
$heading = get_sub_field('ivd_form_section__heading');
$content = get_sub_field('ivd_form_section__content');
$formCode = get_sub_field('ivd_form_section__form-code');

?>


<section class="ivd-form-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ivd-form-section__text">

          <h2 class="h2-styled"><?php echo $heading; ?></h2>
          <div>
            <?php echo $content; ?>
          </div>

          <div class="ivd-form-section__form-code">
            <?php echo $formCode; ?>
          </div>
        </div>

      </div>
    </div>

  </div>

</section>