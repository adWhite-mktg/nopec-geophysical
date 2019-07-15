<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Low_Dash
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header pt-2 pb-2 px-4">
		<div class="container-fluid">
			<div class="row">
				<div class="site-branding col-12 col-md-3">
					<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'low-dash' ); ?></a>

					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="sr-only site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="sr-only site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$low_dash_description = get_bloginfo( 'description', 'display' );
					if ( $low_dash_description || is_customize_preview() ) :
						?>
						<p class="sr-only site-description"><?php echo $low_dash_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="col-12 col-md-9 main-navigation site-nav navbar navbar-expand-md navbar-brand-green align-items-end" role="navigation">
					<button class="navbar-toggler navbar-toggler-right navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon" aria-hidden="true"></span>
					</button>

					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'depth' => 3,
						'container' => 'div',
						'container_id' => 'navbarSupportedContent',
						'container_class' => 'collapse navbar-collapse',
						'menu_id' => 'primary-menu',
						'menu_class' => 'navbar-nav ml-auto',
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker()
					) );
					?>
				</nav><!-- #site-navigation -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</header><!-- #masthead -->

	<main id="content" class="site-content">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
