<div class="ivd-magazin-full">
  <div class="container">
    <h2 class="h2-styled">WELCHE THEMEN INTERESSIEREN SIE?</h2>
    <p>Filtern Sie bequem nach ihren Lieblingsthemen in unserem Magazin. Oder sehen Sie sich alle Artikel an.</p>

    <div class="ivd-magazin-full__filter">

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="online" />
          <label for="online"><div class="label-text h3-styled">Online</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="markt" />
          <label for="markt"><div class="label-text h3-styled">Markt</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="recht" />
          <label for="recht"><div class="label-text h3-styled">Recht</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="versicherung" />
          <label for="versicherung"><div class="label-text h3-styled">Versicherung</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="verband" />
          <label for="verband"><div class="label-text h3-styled">Verband</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="finanzierung" />
          <label for="finanzierung"><div class="label-text h3-styled">Finanzierung</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="service" />
          <label for="service"><div class="label-text h3-styled">Service</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="politik" />
          <label for="politik"><div class="label-text h3-styled">Politik</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="partner" />
          <label for="partner"><div class="label-text h3-styled">Partner</div></label>
        </div>
      </div>

      <div class="ivd-magazin-full__checkbox-group">
        <div class="round">
          <input type="checkbox" id="hotspot-berlin" />
          <label for="hotspot-berlin"><div class="label-text h3-styled">Hotspot Berlin</div></label>
        </div>
      </div>

    </div>
  </div>

  <?php
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
);
$query = new WP_Query( $args );
?>
<?php if ($query->have_posts()) : ?>

<section class="ivd-magazin" data-section-id="aktuelles">
  <div class="container">
    <h2 class="h2-styled">Akutelles</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </div> 
</section>
<?php endif; ?> 

  <?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Online'
);
$query = new WP_Query( $args );
?>
<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="online">
  <div class="container">
    <h2 class="h2-styled">Online</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?> 
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(3); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?>


<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Markt'
);
$query = new WP_Query( $args );
?>
<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="markt">
  <div class="container">
    <h2 class="h2-styled">Markt</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(4); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?>

<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Recht'
);
$query = new WP_Query( $args );
?>
<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="recht">
  <div class="container">
    <h2 class="h2-styled">Recht</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(5); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 

<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Versicherung'
);
$query = new WP_Query( $args );
?>

<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="versicherung">
  <div class="container">
    <h2 class="h2-styled">Versicherung</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(6); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 

<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Verband'
);
$query = new WP_Query( $args );
?>

<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="verband">
  <div class="container">
    <h2 class="h2-styled">Verband</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(7); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 


<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Finanzierung'
);
$query = new WP_Query( $args );
?>

<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="finanzierung">
  <div class="container">
    <h2 class="h2-styled">Finanzierung</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(8); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 



<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Service'
);
$query = new WP_Query( $args );
?>

<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="service">
  <div class="container">
    <h2 class="h2-styled">Service</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(9); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 


<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Politik'
);
$query = new WP_Query( $args );
?>
<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="politik">
  <div class="container">
    <h2 class="h2-styled">Politik</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(10); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 


<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Partner'
);
$query = new WP_Query( $args );
?>

<?php if ($query->have_posts()) : ?>
<section class="ivd-magazin" data-section-id="partner">
  <div class="container">
    <h2 class="h2-styled">Partner</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(11); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 

<?php
$args = array(
    'posts_per_page' => 6,
    'post_type' => 'post',
    'category_name' => 'Hotspot Berlin'
);
$query = new WP_Query( $args );
?>
        <?php if ($query->have_posts()) : ?>

<section class="ivd-magazin" data-section-id="hotspot-berlin">
  <div class="container">
    <h2 class="h2-styled">Hotspot Berlin</h2>
      
    <div class="ivd-magazin__grid">
      <div class="row">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
            
            <div class="ivd-magazin__item col-lg-4 col-md-6"> 
              <div class="ivd-magazin__item-inner">
                <a href="<?php the_permalink(); ?>" class="ivd-magazin__image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                </a>
                <div class="ivd-magazin__bottom-container">
                  <a class="ivd-magazin__heading-link" href="<?php the_permalink(); ?>"><h3 class="h3-styled"><?php the_title(); ?></h3></a>
                  <div class="ivd-magazin__grid-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a href="<?php the_permalink();?>" class="button-style-2 ivd-magazin__grid-button">Weiterlesen</a>
                </div>
              </div>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="ivd-magazin__archive-link"><a href="<?php echo get_category_link(12); ?>">Ältere Artikel >></a></div>
  </div> 
</section>
<?php endif; ?> 
</div>