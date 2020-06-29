<?php

// Utilities

include('configure/utilities.php');

// CONFIG

include('configure/configure.php');

// JAVASCRIPT & CSS

include('configure/js-css.php');

// SHORTCODES

include('configure/shortcodes.php');

// ACF

include('configure/acf.php');

// HOOKS ADMIN

// Custom login styles
require_once('configure/login-css.php');

// ACF options in admin
require_once('configure/acf/acf-option-page.php');

// CUSTOM POST TYPES
require_once('configure/custom-post-types.php');

// Tiny MCE Styles
require_once('configure/tiny-mce.php');

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
	include('configure/admin.php');
}
