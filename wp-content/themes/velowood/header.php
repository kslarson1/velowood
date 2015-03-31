<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Velowood
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400|Merriweather:400,300' rel='stylesheet' type='text/css'> <!-- link Google Fonts -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!-- link Font Awesome -->
<link rel="apple-touch-icon" sizes="57x57" href="velowood/images/favicons/apple-touch-icon-57x57.png">		<!-- start of favicons -->
<link rel="apple-touch-icon" sizes="114x114" href="velowood/images/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="velowood/images/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="velowood/images/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="velowood/images/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="velowood/images/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="velowood/images/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="velowood/images/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="velowood/images/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="velowood/images/favicons/favicon-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="velowood/images/favicons/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="velowood/images/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="velowood/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="velowood/images/favicons/favicon-32x32.png" sizes="32x32">	<!-- end of favicons -->
<meta name="msapplication-TileColor" content="#dedede">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'velowood' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'velowood' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
