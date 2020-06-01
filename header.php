<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/dist/css/main.min.css" async />

	<script data-main="<?php bloginfo('template_url') ?>/assets/js/require.js" src="<?php bloginfo('template_url') ?>/assets/js/require.js" async></script>

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