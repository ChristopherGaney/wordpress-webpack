<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// HTML5 Blank navigation
require_once( 'library/theme-support.php' );
require_once( 'library/enqueue-scripts.php' );
require_once( 'library/navigation.php' );
require_once( 'library/sidebars.php' );
require_once( 'library/pagination.php' );
require_once( 'library/shortcodes.php' );
require_once( 'library/theme-functions.php' );
require_once( 'library/custom-post-type.php' );
require_once( 'library/ajaxEndpoint.php' );
require_once( 'library/options.php' );

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Allow Large Image upload
add_filter( 'big_image_size_threshold', '__return_false' );

/*------------------------------------*\
  Customize Gravity Form Submit button
\*------------------------------------*/
/*add_filter( 'gform_submit_button_1', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return '<button id="gform_submit_button_1" class="gform_button button light" type="submit" value="Send Message" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }"><div class="hover"></div><div class="text">Send Message</div></button>';
}*/

/*------------------------------------*\
     Allow for use of The Excerpt
\*------------------------------------*/
/*function short_description_display() {
	the_excerpt();
}
add_action( 'woocommerce_after_shop_loop_item_title', 'short_description_display', 40 );*/

/*------------------------------------*\
     Replace Read More button
\*------------------------------------*/
/*function replace_read_more($button, $product) {
	$button_text = __( "View product", "woocommerce" );
	$button = '<a class="button light" href="' . $product->get_permalink() . '"><div class="hover"></div><div class="text">' . $button_text . '</div></a>';
	return $button;
}
add_filter( 'woocommerce_loop_add_to_cart_link', 'replace_read_more', 30, 2 );*/

/*-------------------------------------------------------------------------*\
  Allow font-awesome to use pseudo elements by addig attribute to script tag
\*-------------------------------------------------------------------------*/
// Allow font-awesome to use pseudo elements by addig attribute to script tag
/*add_filter('script_loader_tag', 'add_attributes_to_script', 10, 3); 
function add_attributes_to_script( $tag, $handle, $src ) {
    if ( 'fontawesome' === $handle ) {
        $tag = '<script type="text/javascript" data-search-pseudo-elements src="' . esc_url( $src ) . '"></script>';
    } 
    return $tag;
}*/
?>