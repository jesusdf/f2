<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package r2
 * @since r2 3.0
 */
?><?php if( f2_get_option('redirect_mobile_amp') == 'on' ) { include_once('amp-redirect.php'); } ?><!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if( f2_get_option('non_responsive') != 'on' ) : ?>
<meta name="viewport" content="width=device-width" />
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php f2_logo_image(); ?>
		</div><!-- .site-branding -->

		<?php if( f2_get_option( 'hide_header_nav' ) != 'on' ) : ?>
		<nav class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'f2' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'f2' ); ?>"><?php _e( 'Skip to content', 'f2' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
		<?php endif; // if('hide_header_nav') ?>
	
		<?php f2_header_image(); ?>

	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">
