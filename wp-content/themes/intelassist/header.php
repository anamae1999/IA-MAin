<!doctype html>
<html <?php language_attributes(); ?> style="margin-top:0px !important;">
<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" >
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body>
	<div class="loading-container align-items-center justify-content-center"><div class="loader"></div></div>
	   <?php get_template_part( 'templates/partials/navigation' ); ?>
	   <main id="main-content">