<?php
$sectionHeading = get_sub_field('ivd_vorteile__heading');

?>


<section class="ivd-vorteile">
  <div class="container">
    <h2 class="h2-styled ivd-vorteile__checklist-heading"><?php echo $sectionHeading; ?></h2>

    <div class="ivd-vorteile__checklist-repeater">
      <div class="ivd-vorteile__checklist-repeater-inner">
        <div class="row">
          <?php if (have_rows('ivd_vorteile__repeater')) : ?>
            <?php while (have_rows('ivd_vorteile__repeater')) : the_row(); ?>  
              <div class="ivd-vorteile__checklist-item col-md-6">
                <i class="fa fa-check"></i>
                <div class="ivd-vorteile__item-content">
                  <div class="ivd-vorteile__checklist-item-text h2-font h2-weight"><?php echo the_sub_field('ivd_vorteile__repeater__heading'); ?></div>
                  <p><?php echo the_sub_field('ivd_vorteile__repeater__text'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>