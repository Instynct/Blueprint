<?php

// Utilities

include('inc/utilities.php');

// CONFIG

include('inc/configure.php');

// JAVASCRIPT & CSS

include('inc/js-css.php');

// SHORTCODES

include('inc/shortcodes.php');

// ACF

include('inc/acf.php');

// HOOKS ADMIN

// Custom login styles
require_once('inc/login-css.php');

// ACF options in admin
require_once('inc/acf/acf-option-page.php');

// CUSTOM POST TYPES
require_once('inc/custom-post-types.php');

// Tiny MCE Styles
require_once('inc/tiny-mce.php');

// Disable WordPress Admin Bar for all users but admins. //
show_admin_bar(false);

// Removing unecessary admin menu tabs
function custom_menu_page_removing() {
	remove_menu_page('edit-comments.php');
}

// Showing Menus in Appearance
function register_my_menus() {
	register_nav_menus();
}

function remove_editor() {
	remove_post_type_support('page', 'editor');
}

if (is_admin()) {
	include('inc/admin.php');
}
