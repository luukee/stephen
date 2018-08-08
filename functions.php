<?php
/*
 * Exit if accessed directly
 */
if (!defined('ABSPATH')) {
    exit;
}

/*
 * BEGIN ENQUEUE PARENT ACTION
 * AUTO GENERATED - Do not modify or remove comment markers above or below:
 */

if (!function_exists('lch_chld_thm_cfg_parent_css')):
    function lch_chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array(  ));
    }
endif;
add_action('wp_enqueue_scripts', 'lch_chld_thm_cfg_parent_css', 10);


/*
 * google fonts
 */
function lch_google_fonts()
{
    $query_args = array(
        'family' => 'IM+Fell+French+Canon+SC|Metrophobic',
        'subset' => 'latin',
    );
    wp_enqueue_style('google_fonts', add_query_arg($query_args, "//fonts.googleapis.com/css"), array(), null);
}

add_action('wp_enqueue_scripts', 'lch_google_fonts');



/*
 * remove the hentry post class only from pages: http://swampsidestudio.com/remove-wordpress-hentry-class/
 */
function lch_remove_hentry($classes)
{
    if (is_page()) {
        $classes = array_diff($classes, array( 'hentry' ));
    }
    return $classes;
}
add_filter('post_class', 'lch_remove_hentry');


/*
 * automatically set post author
 */
function lch_change_author($data, $postarr)
{
    $data['post_author'] = 1;
    return $data;
}

add_filter('wp_insert_post_data', 'lch_change_author', '99', 2);


/*
 * if modified since header gomahamaya https://www.gomahamaya.com/if-modified-since-http-header/
 */
add_action('template_redirect', 'lch_add_last_modified_header');
function lch_add_last_modified_header($headers)
{
    if (is_singular()) {
        $post_id = get_queried_object_id();
        if ($post_id) {
            header("Last-Modified: " . get_the_modified_time("D, d M Y H:i:s", $post_id));
        }
    }
}

/*
 * TN - Remove Query String from Static Resources: https://technumero.com/remove-query-strings-from-static-resources/
 */
function remove_css_js_ver($src)
{
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_css_js_ver', 10, 2);
add_filter('script_loader_src', 'remove_css_js_ver', 10, 2);

/*
 * Remove jQuery
 */
add_action('wp_enqueue_scripts', 'no_more_jquery');
function no_more_jquery()
{
    wp_deregister_script('jquery');
}

/*
 * hide errors on front end
 */
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
