<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header <?php if (is_front_page() || is_page('about')) echo 'grey'; ?>" role="banner">
				<div class="banner-container">
					<div class="site-header-navigation">
						<div class="site-branding">
							<a href="/inhabitent"> 
							<img class="mini-logo mini-logo--green" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg'; ?>"/>
							<img class="mini-logo mini-logo--white" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent-white.svg'; ?>"/>
							</a> 

						
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url('/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						</div>
						
					
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="search-toggle" aria-expanded="false"><?php echo esc_html( '' ); ?></div>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<?php get_search_form(); ?>
						</nav>
					</div>
				</div>
			</header>

			<div id="content" class="site-content"> 



