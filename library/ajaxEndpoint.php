<?php 

function ajaxPoint() {
    $team_arr = [];
    if ( isset($_REQUEST) ) {
        //check_ajax_referer( 'my_secret_nonce', 'security');
        wp_verify_nonce( $_REQUEST['security'], 'my_secret_nonce' );
        $search = sanitize_text_field($_REQUEST['search']);
        if($search == 'request-data') {
        
            $package = array('package' => 'your return data from ajaxEndpoint.php');
            echo wp_send_json_success($package); 
        }
        else {
            echo wp_send_json_error($package);
        }
    } 
}
add_action('wp_ajax_ajaxPoint','ajaxPoint');
add_action( 'wp_ajax_nopriv_ajaxPoint', 'ajaxPoint' );
