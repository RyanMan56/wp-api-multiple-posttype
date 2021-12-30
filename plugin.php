<?php

/*
 * Plugin Name:       Healthy Relationships - WP Rest Api V2 Multiple PostTypes
 * Plugin URI:        https://github.com/RyanMan56/wp-api-multiple-posttype
 * Description:       Extension of wp/v2/posts api to allow query multiple post types
 * Version:           1.0.2
 * Author:            RyanMan56
 * Author URI:        https://github.com/ryanman56
 * License:           GPL-3.0-or-later
 */

/**
 * WP_REST_Multiple_PostType_Controller class.
 */
function init_wp_rest_multiple_posttype_endpoint()
{
    if (!class_exists('WP_REST_Multiple_PostType_Controller')) {
        require_once dirname(__FILE__) . '/lib/endpoints/class-wp-rest-multiple-posttype-controller.php';
    }
    $controller = new WP_REST_Multiple_PostType_Controller();
    $controller->register_routes();
}

/**
 * REST INIT
 */
add_action('rest_api_init', 'init_wp_rest_multiple_posttype_endpoint');
