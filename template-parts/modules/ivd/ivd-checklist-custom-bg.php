<section class="ivd-checklist-custom-bg">
  <div class="container">
    <div class="ivd-checklist-custom-bg__checklist-repeater">
      <div class="ivd-checklist-custom-bg__checklist-repeater-inner">
        <?php if (have_rows('ivd_checklist_custom_bg__repeater')) : ?>
          <?php while (have_rows('ivd_checklist_custom_bg__repeater')) : the_row(); ?>  
            <div class="ivd-checklist-custom-bg__checklist-item">
              <i class="fa fa-check"></i><span class="ivd-checklist-custom-bg__checklist-item-text h2-font h2-weight"><?php echo the_sub_field('ivd_checklist_custom_bg__repeater__text'); ?></span>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>