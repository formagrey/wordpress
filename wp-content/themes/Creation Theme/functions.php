<?php
// Ajoute le CSS et le JavaScript pour utiliser Bootstrap
    /*function enqueue_bootstrap() {
        wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

        // Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );

    }
    add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );*/
    // This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.

    if ( function_exists('register_sidebar') ) register_sidebar(2);
    function add_normalize_CSS() {
        wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
    }

    // Register a new sidebar simply named 'sidebar'
    function add_widget_Support() {
                    register_sidebar( array(
                                    'name'          => 'Sidebar',
                                    'id'            => 'sidebar',
                                    'before_widget' => '<div>',
                                    'after_widget'  => '</div>',
                                    'before_title'  => '<h2>',
                                    'after_title'   => '</h2>',
                    ) );
    }
    // Hook the widget initiation and run our function
    add_action( 'widgets_init', 'add_Widget_Support' );


    // Register a new navigation menu
    function add_Main_Nav() {
      register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    // Hook to the init action hook, run our navigation menu function
    add_action( 'init', 'add_Main_Nav' );


    function theme_scripts(){
        global $wp_scripts;
        wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/librairies/bootstrap/js/bootstrap.bundle.min.js', null, true );
        wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/librairies/jquery/jquery.min.js', null, true );
        wp_enqueue_script( 'js', get_stylesheet_directory_uri() . '/js/script.js');
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts');

    function theme_styles(){
        wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/librairies/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css' );
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/librairies/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'style', get_stylesheet_directory_uri() . 'style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_styles');

    function register_google_fonts() {
        wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
        wp_enqueue_style( 'googleFonts');
    }
    add_action( 'wp_enqueue_scripts', 'register_google_fonts' );

    function wpb_add_google_fonts(){
        wp_enqueue_style('wpb-google-fonts', 'http://fonts.googleapis.com/css?familly=Open+Sans:300italic,400italic,700italic,400,700,300', false);
    }
    //add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');

    function myprefix_enqueue_google_fonts() {
        wp_enqueue_style( 'crow beak', 'https://fonts.googleapis.com/css?family=Roboto' );
    }
    //add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_google_fonts' );

    add_action( 'admin_menu', 'wpd_admin_menu_item' );
    function wpd_admin_menu_item(){
        add_submenu_page(
            'edit.php',
            'Page title',
            'Menu item title',
            'edit_posts',
            'edit.php?category_name=somecat'
        );
    }

    register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );

    add_theme_support( 'post-thumbnails' );





















 ?>
