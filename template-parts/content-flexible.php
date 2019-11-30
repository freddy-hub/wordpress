<?php if (have_rows('mangos_flexible_content')) : ?>

  <?php while (have_rows('mangos_flexible_content')) : the_row(); ?>

    <?php if (get_row_layout() == 'mangos_flexible_features') : ?>
     <?php get_template_part('template-parts/modules/features'); ?>

    <?php elseif (get_row_layout() == 'mangos_flexible_text_with_person_image') : ?>
      <?php get_template_part('template-parts/modules/text-with-person-image'); ?>

    <?php elseif (get_row_layout() == 'ivd_hero_header') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-hero-header'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_2col_videos') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-2col-videos'); ?>

      <?php elseif (get_row_layout() == 'ivd_form_section') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-form-section'); ?>

      <?php elseif (get_row_layout() == 'ivd_2col_fullwidth') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-2col-fullwidth'); ?>

      <?php elseif (get_row_layout() == 'ivd_veranstaltung') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-veranstaltung'); ?>

      <?php elseif (get_row_layout() == 'ivd_unsere_partner') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-unsere-partner'); ?>

      <?php elseif (get_row_layout() == 'ivd_magazin') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-magazin'); ?>

      <?php elseif (get_row_layout() == 'ivd_referenzen') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-referenzen'); ?>    

      <?php elseif (get_row_layout() == 'ivd_newsletter') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-newsletter'); ?>

      <?php elseif (get_row_layout() == 'ivd_icons_grid') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-icons-grid'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_marktplatz') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-marktplatz'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_contentpaket') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-contentpaket'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_product_section') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-product-section'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_vorteile') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-vorteile'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_checklist_custom_bg') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-checklist-custom-bg'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_custom_content') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-custom-content'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_magazin_full') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-magazin-full'); ?>
    
      <?php elseif (get_row_layout() == 'ivd_veranstaltungen_full') : ?>
      <?php get_template_part('template-parts/modules/ivd/ivd-veranstaltungen-full'); ?>
    
      <?php endif; ?>
  <?php endwhile; ?>

<?php endif; ?>

