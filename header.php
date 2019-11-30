<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package worldliner-template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'worldliner' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header__top-bar">
			<div class="container">
				<div class="site-header__top-bar-item"><a href="#"><i class="fa fa-phone"></i>030 / 897 353 64</a></div>
				<div class="site-header__top-bar-item"><a href="#"><i class="fa fa-envelope"></i>info@ivd-plus.de</a></div>
			
			</div>
		</div>
		<div class="site-header__main">
			<div class="container">
				<div class="site-header__logo-container">
					<a href="<?php echo get_home_url(); ?>">
					<?php $headerLogo = get_field('mangos_header_logo', 'option'); ?>
        	<img src="<?php echo $headerLogo['url']; ?>" alt="<?php echo $headerLogo['alt ']; ?>">	
					</a>
				</div>
				<div class="site-header__menu-container-desktop">
				<?php
              wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'depth' => 2,
                'container' => 0,
                'menu_class' => 'primary-nav',
                'fallback_cb ' => 'walkernavdesktop::fallback ',
                'walker' => new walkernavdesktop(),
              ));
              ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
