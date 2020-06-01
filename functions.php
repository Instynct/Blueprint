<?php

// custom login styles
require_once('inc/login-css.php');

// ACF options in admin
require_once('inc/acf/acf-option-page.php');

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

// Removing unecessary admin menu tabs
function custom_menu_page_removing()
{
	//remove_menu_page( 'edit.php' );
	remove_menu_page('edit-comments.php');
	//remove_menu_page( 'tools.php' );
	//remove_menu_page( 'users.php' );
	//remove_menu_page( 'wpseo_dashboard' );
	//remove_menu_page( 'sitepress-multilingual-cms/menu/languages.php');
}

function register_my_menus()
{
	register_nav_menus();
}

add_action('admin_menu', 'custom_menu_page_removing');
add_action('init', 'register_my_menus');
add_action('login_enqueue_scripts', 'custom_login_demarrage');
