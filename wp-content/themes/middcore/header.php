<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width" />
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )


	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
	<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
	<![endif]-->
	<!-- end CSS -->
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<?php if(is_front_page()) { ?>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/drawing.js"></script>
	<?php } ?>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/slides.min.jquery.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/functions.js"></script>
	<!-- end JS -->
	<?php wp_head(); ?>
</head>
<body <?php if(is_front_page()) { ?> onload="initPage()" <?php } ?>>
	<div id="container" class="wrapper">
		<div id="main">