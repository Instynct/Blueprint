<?php

// custom login styles
require_once('inc/login-css.php');

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    =>  'Options du site',
        'menu_title'    =>  'Options du site',
        'menu_slug'     =>  'options',
        'capability'    =>  'edit_posts',
        'position'      =>  false,
        'icon_url'      =>  false,
    ));
}

function register_my_menus()
{
    register_nav_menus();
}

add_action('init', 'register_my_menus');
add_action('login_enqueue_scripts', 'custom_login_demarrage');
