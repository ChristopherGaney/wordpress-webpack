<?php
/**
 * Site Options
 * Red Letter
 *
 * 
 */

if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
    'page_title'  => 'Site Settings',
    'menu_title'  => 'Site Settings',
    'menu_slug'   => 'site-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'show_in_graphql' => true
  ));
acf_add_options_page(array(
    'page_title'  => 'Post Options',
    'menu_title'  => 'Post Options',
    'menu_slug'   => 'post-options',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
 
}

