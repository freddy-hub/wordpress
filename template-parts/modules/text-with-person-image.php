<section class="container text-with-person section-spacing">
  <h2 class="h2-styled">IHR QUALITÄTS-IMMOBILIENMAKLER NEBENAN</h2>
  <h3 class="h3-styled">IMMOBILIENBEWERTUNG | EXPERTE WOHNEN IM ALTER | GUTACHTEN | PROFESSIONELLER IMMOBILIENVERKAUF</h3>
  <div class="text-with-person__content">
    <?php the_sub_field('mangos_flexible_text_with_person_image__text-content'); ?>
  </div>
  <div class="text-with-person__image-container">
    <?php $image = get_sub_field('mangos_flexible_text_with_person_image__image'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
  </div>
</section>