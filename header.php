<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Vai al contenuto', 'bruno-antichita' ); ?></a>

<header class="site-header" role="banner">
	<div class="container">
		<div class="header-inner">

			<!-- Branding -->
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				<?php endif; ?>
			</div>

			<!-- Right side: phone, WhatsApp, nav -->
			<div class="header-right">

				<div class="header-phone">
					<a href="<?php echo esc_url( bruno_phone_url() ); ?>">
						&#9742; <?php echo esc_html( get_theme_mod( 'bruno_phone', '+39 055 1234567' ) ); ?>
					</a>
				</div>

				<div class="header-whatsapp">
					<a href="<?php echo esc_url( bruno_whatsapp_url() ); ?>" class="btn btn--whatsapp" target="_blank" rel="noopener noreferrer">
						WhatsApp
					</a>
				</div>

				<!-- Mobile menu toggle -->
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Menu', 'bruno-antichita' ); ?>">
					<span></span><span></span><span></span>
				</button>

				<!-- Primary Navigation -->
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Menu Principale', 'bruno-antichita' ); ?>">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'fallback_cb'    => false,
					) );
					?>
				</nav>

			</div><!-- .header-right -->

		</div><!-- .header-inner -->
	</div><!-- .container -->
</header>

<main id="primary" class="site-main">
