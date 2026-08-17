<?php
/**
 * Fichier header.php
 * En-tête du thème
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="site-header__inner">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-jrc.png' ); ?>"
				alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
			>
		</a>

		<nav class="site-header__nav" aria-label="Navigation principale">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'site-header__menu',
				) );
			}
			?>
		</nav>

		<a href="tel:0664973619" class="site-header__cta">
			<span class="site-header__cta-icon" aria-hidden="true">&#128222;</span>
			06 64 97 36 19
		</a>

		<button class="site-header__burger" type="button" aria-label="Ouvrir le menu" aria-expanded="false">
			<span></span>
			<span></span>
			<span></span>
		</button>

	</div>
</header>
