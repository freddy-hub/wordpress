<div class="ivd-veranstaltungen-full">
  <h2 class="h2-styled">VERANSTALTUNGEN</h2>




<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'veranstaltung',
);
$query = new WP_Query( $args );
?>

<?php if ($query->have_posts()) : ?>
  <?php $i = 0; ?>
  <?php while ($query->have_posts()) : $query->the_post(); ?>
  <?php $i++; ?>
  <?php if ($i % 2 == 1) : ?>
    <section class="ivd-veranstaltung ivd-veranstaltung--v1 ivd-veranstaltung">

      <?php if ($heading) : ?>
        <h2 class="h2-styled section-heading"><?php echo $heading; ?></h2>
      <?php endif; ?>

      <div class="ivd-veranstaltung__row ivd-veranstaltung__row--in-listing">
        <div class="ivd-veranstaltung__column-image-left">
      <?php
        $thumbnail_id  = get_post_thumbnail_id( $post->ID );
        $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
      ?>        
      <img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo $thumbnail_alt; ?>">
        </div>
        <div class="ivd-veranstaltung__column-text-right">
          <div class="ivd-veranstaltung__column-text-content">
            <h3 class="h2-font heading-weight"><?php the_title(); ?></h3>
            <?php the_field('ivd-veranstaltung__preview_text'); ?>
            <h3 class="h2-font heading-weight"><?php the_field('ivd-veranstaltung__date'); ?></h3>
            <a href="<?php the_permalink(); ?>" class="button-style-1">Mehr erfahren</a>
            <?php if ($alleButton) : ?>
              <a href="<?php echo $alleButton['url']; ?>" class="button-style-2" style="margin-top: 60px; margin-bottom: 60px;"><?php echo $alleButton['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>


    </section>
  <?php else: ?>
    <section class="ivd-veranstaltung ivd-veranstaltung--v2">

      <?php if ($heading) : ?>
        <h2 class="h2-styled section-heading"><?php echo $heading; ?></h2>
      <?php endif; ?>

      <div class="ivd-veranstaltung__row  ivd-veranstaltung__row--in-listing">

        <div class="ivd-veranstaltung__column-text-left">
          <div class="ivd-veranstaltung__column-text-content">
            <h3 class="h2-font heading-weight"><?php the_title(); ?></h3>
            <?php the_field('ivd-veranstaltung__preview_text'); ?>
            <h3 class="h2-font heading-weight"><?php the_field('ivd-veranstaltung__date'); ?></h3>
            <a href="<?php the_permalink(); ?>" class="button-style-1">Mehr erfahren</a>
            <?php if ($alleButton) : ?>
              <a href="<?php echo $alleButton['url']; ?>" class="button-style-2" style="margin-top: 60px; margin-bottom: 60px;"><?php echo $alleButton['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="ivd-veranstaltung__column-image-right">
        <?php
            $thumbnail_id  = get_post_thumbnail_id( $post->ID );
            $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
          ?>        
          <img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo $thumbnail_alt; ?>">
      </div>

    </section>
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?> 
<div class="container">
  <div class="ivd-veranstaltungen-full__all-link"><a href="#">Ältere Veranstaltungen >></a></div>
</div>





</div>