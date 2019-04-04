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

function my_load_more_scripts() {
 
    global $wp_query; 
 
    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');
 
    // register our main script but do not enqueue it yet
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/src/js/lib/myloadmore.js', array('jquery') );
 
    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );
 
    wp_enqueue_script( 'my_loadmore' );
}
 
function loadmore_ajax_handler(){
 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';
 
    // it is always better to use WP_Query but not here
    query_posts( $args );
 
    if( have_posts() ) :
 
        // run the loop
        while( have_posts() ): the_post();
 
            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
            get_template_part( 'content', get_post_format() );
            // for the test purposes comment the line above and uncomment the below one
            // the_title();
 
 
        endwhile;
 
    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action( 'wp_enqueue_scripts', 'my_load_more_scripts' );
add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
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


