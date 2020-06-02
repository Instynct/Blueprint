<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/dist/css/main.min.css" async />

	<!-- Check is the page is the IE template -->
	<?php if (!is_page('internet-explorer')) { ?>
		<script src="<?php bloginfo('template_url') ?>/dist/js/internet-explorer.min.js"></script>
	<?php } ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page-wrapper">
		<header>

			<!-- <div class="logo">
					<a href="<?= home_url(); ?>">
						<img src="/img/logo.png" alt="Logo">
					</a>
				</div> -->

			<!-- <nav role="navigation" class="nav main-nav">
					<?php wp_nav_menu(array(
						'theme_location'  => 'main'
					)); ?>
				</nav> -->
		</header>

		<main role="main">