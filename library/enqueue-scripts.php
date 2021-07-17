<?php 

// Load HTML5 Blank styles
function html5blank_styles() {
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/dist/assets/css/app.min.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}
function html5blank_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        /* Uncomment Conditionizr and Modernizr if you need them */
        //wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        //wp_enqueue_script('conditionizr'); // Enqueue it!

        //wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        //wp_enqueue_script('modernizr'); // Enqueue it!
        wp_deregister_script('jquery');
        wp_register_script('jqueryscript', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', false);
        wp_register_script('html5blankscript', get_template_directory_uri() . '/dist/assets/js/app.min.js', array(), '1.0.0', true); 

         // localize ajax vars
        wp_localize_script( 'html5blankscript', 'url_for_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'ajax_nonce' => wp_create_nonce('my_secret_nonce')));

        wp_enqueue_script('jqueryscript');
        wp_enqueue_script('html5blankscript'); // Enqueue it!
        //wp_enqueue_script('ajaxscript');
    }
}

/* Modify ACF admin styles. Uncomment if you want to modify ACF admin styles. Stylesheet is in the theme root. */
/* function load_custom_wp_admin_style( $hook ){
    if($hook == 'post.php') {
        wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/acf-mods/admin-style.css', array(), '1.0.0', 'all' );
    }
} */



//add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
//add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');
add_action('init', 'html5blank_scripts'); // Add Custom Scripts to wp_head

?>
