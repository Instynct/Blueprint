<?php
    /* Disable WordPress Admin Bar for all users but admins. */
    show_admin_bar(false);
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    =>  'Options du site',
            'menu_title'    =>  'Options du site',
            'menu_slug'     =>  'options',
            'capability'    =>  'edit_posts',
            'position'      =>  false,
            'icon_url'      =>  false,
        ));
    }
?>
<?php
function custom_login_demarrage()
{ ?>
    <style type="text/css">
        body {
            background: #ffffff !important;
        }
        #login h1 a,
        .login h1 a {
            background-image: url(/wp-content/uploads/2020/04/les_snoros_logo.png) !important;
            background-size: 150px !important;
            width: 150px !important;
        }
        .login form {
            background: #ffffff !important;
            box-shadow: none !important;
            -webkit-box-shadow: none !important;
        }
        .wp-core-ui .button-primary {
            background-color: #020202 !important;
            border-radius: 100px !important;
            border: none !important;
            box-shadow: none !important;
            text-shadow: none !important;
        }
        .login #backtoblog a, .login #nav a {
            color: #ff0000 !important;
        }
        .login label {
            color: #000 !important;
            font-size: 0.8rem !important;
            letter-spacing: 0.03rem;
            padding: 5px 0 !important;
        }
        .login #backtoblog a, .login #nav a {
            color: #707070 !important;
        }
        .wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
            background: #020202 !important;
            color: #fff !important;
        }
        .login form .input, .login input[type=text] {
            padding: 10px !important;
        }
        .login form .input, .login form input[type=checkbox], .login input[type=text] {
            background: #fff !important;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'custom_login_demarrage');
?>
<?php
function register_my_menus() {
  register_nav_menus();
 }
 add_action( 'init', 'register_my_menus' );
?>

<?php
/* CUSTOM POST DEALERS */

function dealers()
{
    register_post_type('Points de vente',
        array(
            'labels' => array(
                'name' => __('Points de vente'),
                'singular_name' => __('Point de vente'),
                'add_new' => __('Ajouter un nouveau point de vente'),
                'edit' => __('Modifier'),
                'edit_item' => __("Modifier le point de vente"),
                'new_item' => __('Nouveau point de vente'),
                'view' => __('Voir'),
                'view_item' => __("Voir la fiche du point de vente"),
                'search_items' => __('Rechercher un point de vente'),
                'not_found' => __('Aucun point de vente'),
                'not_found_in_trash' => __('Aucun point de vente trouvé dans la corbeille')
            ),
            'public' => true,
            'publicly_queryable' => false,
            'hierarchical' => false,
            'has_archive' => true,
            'menu_icon' => "dashicons-media-text",
            'rewrite' => array('slug' => 'points-de-vente', 'with_front' => false),
            'menu_position' => 20,
            'supports' => array('title', 'tax'),
            'can_export' => true,
        ));
}

add_action('init', 'dealers');

function create_dealers_tax()
{
    /* Créer Taxonomie */
    $args = array(
        'label' => __('Secteurs'),
        'has_archive' => true,
        'hierarchical' => true,
    );
    register_taxonomy('secteurs', 'pointsdevente', $args);
}

add_action('init', 'create_dealers_tax');
?>
