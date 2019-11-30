<?php
$col1Background = get_sub_field('ivd_2col_fullwidth__col-1-bg');
$col1Heading = get_sub_field('ivd_2col_fullwidth__col-1-heading');
$col1Content = get_sub_field('ivd_2col_fullwidth__col-1-content');
$col1Button = get_sub_field('ivd_2col_fullwidth__col-1-button');
$col2Background = get_sub_field('ivd_2col_fullwidth__col-2-bg');
$col2Heading = get_sub_field('ivd_2col_fullwidth__col-2-heading');
$col2Content = get_sub_field('ivd_2col_fullwidth__col-2-content');
$col2Button = get_sub_field('ivd_2col_fullwidth__col-2-button');
?>


<section class="ivd-2col-fullwidth">

  <div class="ivd-2col-fullwidth__column ivd-2col-fullwidth__column--1" style="background-image: url('<?php echo $col1Background['url']; ?>');">
    <div class="ivd-2col-fullwidth__overlay"></div>
    <div class="ivd-2col-fullwidth__column-content">
      <h3 class="h2-styled h2-styled--alternate"><?php echo $col1Heading; ?></h3>

      <?php echo $col1Content; ?>
      <div class="ivd-2col-fullwidth__button-wrapper">
        <a href="<?php echo $col1Button['url']; ?>" class="button-style-3"><?php echo $col1Button['title']; ?></a>
      </div>
    </div>
  </div>
  <div class="ivd-2col-fullwidth__column ivd-2col-fullwidth__column--2" style="background-image: url('<?php echo $col2Background['url']; ?>');">
    <div class="ivd-2col-fullwidth__overlay"></div>
    <div class="ivd-2col-fullwidth__column-content">
      <h3 class="h2-styled h2-styled--alternate"><?php echo $col2Heading; ?></h3>

      <?php echo $col2Content; ?>
      <div class="ivd-2col-fullwidth__button-wrapper">
        <a href="<?php echo $col2Button['url']; ?>" class="button-style-3"><?php echo $col2Button['title']; ?></a>
      </div>
    </div>
  </div>




</section>