<?php
/**
 * Demo Import.
 *
 * This is the template that includes all the other files for core featured of Theme Palace
 *
 * @package Theme Palace
 * @subpackage Vivid Blog
 * @since Vivid Blog 1.0.0
 */

/**
 * Imports predefine demos.
 * @return [type] [description]
 */
function vivid_blog_intro_text( $default_text ) {
    $default_text .= sprintf( '<p class="about-description">%1$s <a href="%2$s">%3$s</a></p>', esc_html__( 'Demo content files for Vivid Blog Theme.', 'vivid-blog' ),
    esc_url( 'https://themepalace.com/instructions/themes/vivid-blog' ), esc_html__( 'Click here for Demo File download', 'vivid-blog' ) );

    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'vivid_blog_intro_text' );