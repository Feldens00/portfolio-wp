<?php
/*
 *  Author: Artur Feldens | @Feldens00
 *  URL: https://github.com/Feldens00 | @Feldens00
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

require_once(get_template_directory().'/model/index.php');

/*------------------------------------*\
	Functions
\*------------------------------------*/
function register_my_menu() {
    register_nav_menu( 'sidebar-menu', 'Sidebar Menu' );
}

function html5blank_nav()
{
    wp_nav_menu(
    array(
        'theme_location'  => 'sidebar-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="px-5">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

// Paginação 
function pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

function images_path() {
    return get_template_directory_uri(). '/public/assets/images';
}
// filtragens de custom post types para pesquisa
function cpt_search( $query ) {
    if ( is_search() && $query->is_main_query() && $query->get( 's' ) ){
        $query->set( 'post_type', array(
            'page', 
            'post',
            'project'
        ) );
    }
}
function getAllPostTypes() {
    $dirs = scandir(get_template_directory().'/model/post-type/');
    unset($dirs[0]);
    unset($dirs[1]);
    return $dirs;
}

function posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', get_option( 'posts_per_page' ));
        $query->set( 'post_type', 'project');
    }
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action( 'pre_get_posts', 'posts_on_homepage' );
add_action( 'init', 'register_my_menu' );

// Add Filters
add_filter('pre_get_posts', 'cpt_search');


// Remove Filters

// Shortcodes


// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

// Add Theme suports
add_theme_support('post-thumbnails'); // Adiciona a imagem de descricao no post
add_theme_support('menus');
add_image_size('large', 700, '', true); 
add_image_size('medium', 250, '', true); 
add_image_size('small', 120, '', true); 
add_image_size('custom-size', 700, 200, true);

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/


