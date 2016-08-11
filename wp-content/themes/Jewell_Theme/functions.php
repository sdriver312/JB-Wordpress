<?php
	
	$GLOBALS['$page_slider'] = do_shortcode('[wooslider slide_page="front-slideshow" slider_type="slides" limit="10"]'); 

    // Add RSS links to <head> section
	automatic_feed_links();

    // Register Custom Post Types
    // add_action( 'init', 'create_post_type' );
    // function create_post_type() {
    //     register_post_type( 'experience', 
    //         array(
    //             'labels' => array(
    //                 'name' => __( 'Experience' ),
    //                 'singular_name' => __( 'Experience' )
    //                 ),
    //             'public' => true,
    //             'has_archive' => true,
    //             )
    //         );
    // }

    // Add eperience.php for the Experience/Resume CMS section
    require_once ('history.php'); 
    require_once ('education.php');

    // Custom Admin Page Log-in Header Logo
    function jimbob_custom_login_logo() {
        echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/images/jimbob_design_logo2.jpg)  !important; height: 112px; width: 310px;} </style>';
    }
    add_action('login_head',  'jimbob_custom_login_logo');

    // Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
            'name'          => 'Sidebar Widgets',
            'id'            => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
    	));
    }
        
        if (function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'main_nav' => 'Main Navigational Menu',
        )
    );
}
?>