<?php
/**
 * Custom header implementation
 */

function ovation_blog_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'ovation_blog_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 80,
		'wp-head-callback'       => 'ovation_blog_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'ovation_blog_custom_header_setup' );

if ( ! function_exists( 'ovation_blog_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see ovation_blog_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'ovation_blog_header_style' );
function ovation_blog_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .wrap_figure{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'ovation-blog-style', $custom_css );
	endif;
}
endif;