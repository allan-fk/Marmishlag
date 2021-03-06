<?php
/**
 * Theme Palace options
 *
 * @package Theme Palace
 * @subpackage Vivid Blog
 * @since Vivid Blog 1.0.0
 */

/**
 * List of pages for page choices.
 * @return Array Array of page ids and name.
 */
function vivid_blog_page_choices() {
    $pages = get_pages();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'vivid-blog' );
    foreach ( $pages as $page ) {
        $choices[ $page->ID ] = $page->post_title;
    }
    return  $choices;
}

/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function vivid_blog_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'vivid-blog' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'vivid_blog_site_layout' ) ) :
    /**
     * Site Layout
     * @return array site layout options
     */
    function vivid_blog_site_layout() {
        $vivid_blog_site_layout = array(
            'wide'  => get_template_directory_uri() . '/assets/images/full.png',
            'boxed-layout' => get_template_directory_uri() . '/assets/images/boxed.png',
        );

        $output = apply_filters( 'vivid_blog_site_layout', $vivid_blog_site_layout );
        return $output;
    }
endif;

if ( ! function_exists( 'vivid_blog_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function vivid_blog_selected_sidebar() {
        $vivid_blog_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'vivid-blog' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar 1', 'vivid-blog' ),
        );

        $output = apply_filters( 'vivid_blog_selected_sidebar', $vivid_blog_selected_sidebar );

        return $output;
    }
endif;


if ( ! function_exists( 'vivid_blog_global_sidebar_position' ) ) :
    /**
     * Global Sidebar position
     * @return array Global Sidebar positions
     */
    function vivid_blog_global_sidebar_position() {
        $vivid_blog_global_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'vivid_blog_global_sidebar_position', $vivid_blog_global_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'vivid_blog_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidbar positions
     */
    function vivid_blog_sidebar_position() {
        $vivid_blog_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'vivid_blog_sidebar_position', $vivid_blog_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'vivid_blog_pagination_options' ) ) :
    /**
     * Pagination
     * @return array site pagination options
     */
    function vivid_blog_pagination_options() {
        $vivid_blog_pagination_options = array(
            'numeric'   => esc_html__( 'Numeric', 'vivid-blog' ),
            'default'   => esc_html__( 'Default(Older/Newer)', 'vivid-blog' ),
        );

        $output = apply_filters( 'vivid_blog_pagination_options', $vivid_blog_pagination_options );

        return $output;
    }
endif;

if ( ! function_exists( 'vivid_blog_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function vivid_blog_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'vivid-blog' ),
            'off'       => esc_html__( 'Disable', 'vivid-blog' )
        );
        return apply_filters( 'vivid_blog_switch_options', $arr );
    }
endif;

if ( ! function_exists( 'vivid_blog_hide_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function vivid_blog_hide_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'vivid-blog' ),
            'off'       => esc_html__( 'No', 'vivid-blog' )
        );
        return apply_filters( 'vivid_blog_hide_options', $arr );
    }
endif;

if ( ! function_exists( 'vivid_blog_sortable_sections' ) ) :
    /**
     * List of sections Control options
     * @return array List of Sections control options.
     */
    function vivid_blog_sortable_sections() {
        $sections = array(
            'slider'    => esc_html__( 'Main Slider', 'vivid-blog' ),
            'about'     => esc_html__( 'About Us', 'vivid-blog' ),
            'blog'      => esc_html__( 'Blog', 'vivid-blog' ),
            'subscription' => esc_html__( 'Subscription', 'vivid-blog' ),
        );
        return apply_filters( 'vivid_blog_sortable_sections', $sections );
    }
endif;