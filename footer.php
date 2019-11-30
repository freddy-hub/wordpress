<?php
$col1Bg = get_field('ivd_footer__col-1-bg', 'option');
$col1Heading = get_field('ivd_footer__col-1-heading', 'option');
$col1Text = get_field('ivd_footer__col-1-text', 'option');
$col1Button = get_field('ivd_footer__col-1-button', 'option');
$col2Bg = get_field('ivd_footer__col-2-bg', 'option');
$col2Heading = get_field('ivd_footer__col-2-heading', 'option');
$col2Text = get_field('ivd_footer__col-2-text', 'option');
$col2Button = get_field('ivd_footer__col-2-button', 'option');
$col3Bg = get_field('ivd_footer__col-3-bg', 'option');
$col3Heading = get_field('ivd_footer__col-3-heading', 'option');
$col3Form = get_field('ivd_footer__col-3-form', 'option');
?>

	</div><!-- #content -->
	<section class="footer-3col-row">

    <div class="footer-3col-row__col" style="background-image: url('<?php echo $col1Bg['url']; ?>');">
      <div class="footer-3col-row__col-overlay">
      </div>
      <div class="footer-3col-row__col-content">
        <h3 class="h2-styled"><?php echo $col1Heading; ?></h3>
        <?php echo $col1Text; ?>
        <a href="<?php echo $col1Button['url']; ?>" class="button-style-1"><?php echo $col1Button['title']; ?></a>
      </div>
    </div>

    <div class="footer-3col-row__col" style="background-image: url('<?php echo $col2Bg['url']; ?>');">
      <div class="footer-3col-row__col-overlay">
      </div>
      <div class="footer-3col-row__col-content">
        <h3 class="h2-styled"><?php echo $col2Heading; ?></h3>
        <?php echo $col2Text; ?>
        <a href="<?php echo $col2Button['url']; ?>" class="button-style-1"><?php echo $col1Button['title']; ?></a>
      </div>
    </div>
    <div class="footer-3col-row__col" style="background-image: url('<?php echo $col3Bg['url']; ?>');">
      <div class="footer-3col-row__col-overlay">
      </div>
      <div class="footer-3col-row__col-content footer-3col-row__col-content--col3">
        <h3 class="h2-styled"><?php echo $col3Heading; ?></h3>
        <?php echo $col3Form; ?>
      </div>
    </div>


	</section>
	<footer id="colophon" class="site-footer">
    <div class="site-footer__content container">
      
      <div class="site-footer__col-1">
        <?php $footerLogo = get_field('mangos_footer_logo', 'option'); ?>
        <img src="<?php echo $footerLogo['url']; ?>" alt="<?php echo $footerLogo['alt ']; ?>">
      </div>

      <div class="site-footer__col-2 h2-font">
        <h4>Kontakt</h4>
          <?php if (have_rows('mangos_footer_info_repeater', 'option')) : ?>
            <?php while (have_rows('mangos_footer_info_repeater', 'option')) : the_row(); ?>  
              <div><?php the_sub_field('textmangos_footer_info_repeater__text'); ?></div>
            <?php endwhile; ?>
          <?php endif; ?>
      </div>

      <div class="site-footer__col-3 h2-font">
        <?php
              wp_nav_menu(array(
                'theme_location' => 'footer',
              ));
              ?>
      </div>

      <div class="site-footer__col-4">
        <div class="site-footer__socials">
        <?php if (have_rows('mangos_footer__socials', 'option')) : ?>
            <?php while (have_rows('mangos_footer__socials', 'option')) : the_row(); ?>  
              <a href="<?php echo the_sub_field('mangos_footer__socials__link'); ?>" class="site-footer__social"><i class="fa <?php echo the_sub_field('mangos_footer__socials__icon'); ?>"></i></a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="site-footer__copyright">
          <?php the_field('mangos_footer_copyright', 'option') ?>
        </div>
      </div>

    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
