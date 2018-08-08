<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PH245JG');</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<!-- google verification -->
	<meta name="google-site-verification" content="XvipRDtsh2u-pQ3WscbK9rtde8pNF_PWzN9mgGAzft4" />
	<!-- bing verification -->
	<meta name="msvalidate.01" content="1D651BBE5F599195B99FEAC69D8E97A7" />
	<!-- yandex verification -->
	<meta name="yandex-verification" content="9cdbc9436c11151a" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions.?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH245JG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<h2 class="site-description"><?php bloginfo('description'); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e('Menu', 'twentytwelve'); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e('Skip to content', 'twentytwelve'); ?>"><?php _e('Skip to content', 'twentytwelve'); ?></a>
			<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' )); ?>
		</nav><!-- #site-navigation -->

		<?php if (get_header_image()) : ?>
		<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
