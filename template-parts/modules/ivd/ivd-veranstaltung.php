<?php
$heading = get_sub_field('ivd_veranstaltung__main_heading');
$layout = get_sub_field('ivd_veranstaltung__layout');
$veranstaltungPost = get_sub_field('ivd_veranstaltung__veranstaltung-post');
$alleButton = get_sub_field('ivd_veranstaltung__alle_veranstaltungen_button');
if ($layout == 'img-left') : ?>

<section class="ivd-veranstaltung ivd-veranstaltung--v1">

  <?php if ($heading) : ?>
    <h2 class="h2-styled section-heading"><?php echo $heading; ?></h2>
  <?php endif; ?>
  <?php if( $veranstaltungPost ): $post = $veranstaltungPost; setup_postdata( $post ); ?>

    <div class="ivd-veranstaltung__row">
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
            <div><a href="<?php echo $alleButton['url']; ?>" class="button-style-2" style="margin-top: 60px; margin-bottom: 60px;"><?php echo $alleButton['title']; ?></a></div>
          <?php endif; ?>
        </div>
      </div>
    </div>

  <?php wp_reset_postdata(); endif;?>

</section>

<?php endif;

if ($layout == 'img-right') : ?>

<section class="ivd-veranstaltung ivd-veranstaltung--v2">

  <?php if ($heading) : ?>
    <h2 class="h2-styled section-heading"><?php echo $heading; ?></h2>
  <?php endif; ?>
  <?php if( $veranstaltungPost ): $post = $veranstaltungPost; setup_postdata( $post ); ?>

  <div class="ivd-veranstaltung__row">

    <div class="ivd-veranstaltung__column-text-left">
      <div class="ivd-veranstaltung__column-text-content">
        <h3 class="h2-font heading-weight"><?php the_title(); ?></h3>
        <?php the_field('ivd-veranstaltung__preview_text'); ?>
        <h3 class="h2-font heading-weight"><?php the_field('ivd-veranstaltung__date'); ?></h3>
        <a href="<?php the_permalink(); ?>" class="button-style-1">Mehr erfahren</a>
        <?php if ($alleButton) : ?>
          <div><a href="<?php echo $alleButton['url']; ?>" class="button-style-2" style="margin-top: 60px; margin-bottom: 60px;"><?php echo $alleButton['title']; ?></a></div>
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

  <?php wp_reset_postdata(); endif;?>

</section>
<?php endif; ?>