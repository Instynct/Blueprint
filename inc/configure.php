<?php
// Disable WordPress Admin Bar for all users but admins. //
show_admin_bar(false);

if (is_admin()) {
	include('inc/admin.php');
}

// Removing unecessary admin menu tabs
function custom_menu_page_removing() {
	remove_menu_page('edit-comments.php');
}

// Showing Menus in Appearance
function register_my_menus() {
	register_nav_menus(
		array(
			'navigation' => __('Navigation'),
			'navigation-footer' => __('Navigation Footer')
		)
	);
}

function remove_editor() {
	remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');
add_filter('use_block_editor_for_post_type', '__return_false');
add_action('admin_menu', 'custom_menu_page_removing');
add_action('init', 'register_my_menus');
add_action('login_enqueue_scripts', 'custom_login_demarrage');
