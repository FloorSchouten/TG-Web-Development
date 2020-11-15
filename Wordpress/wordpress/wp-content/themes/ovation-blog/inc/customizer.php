<?php
/**
 * Ovation Blog: Customizer
 *
 * @subpackage Ovation Blog
 * @since 1.0
 */

function ovation_blog_customize_register( $wp_customize ) {

	// Social Media
    $wp_customize->add_section('ovation_blog_urls',array(
        'title' => __('Social Media', 'ovation-blog'),
        'description' => __( 'Add social media links in the below feilds', 'ovation-blog' ),
    ) );
    
	$wp_customize->add_setting('ovation_blog_facebook',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('ovation_blog_facebook',array(
		'label' => esc_html__('Facebook URL','ovation-blog'),
		'section' => 'ovation_blog_urls',
		'setting' => 'ovation_blog_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('ovation_blog_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('ovation_blog_twitter',array(
		'label' => esc_html__('Twitter URL','ovation-blog'),
		'section' => 'ovation_blog_urls',
		'setting' => 'ovation_blog_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('ovation_blog_linkedin',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('ovation_blog_linkedin',array(
		'label' => esc_html__('Linkedin URL','ovation-blog'),
		'section' => 'ovation_blog_urls',
		'setting' => 'ovation_blog_linkedin',
		'type'    => 'url'
	));

	$wp_customize->add_setting('ovation_blog_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('ovation_blog_youtube',array(
		'label' => esc_html__('Youtube URL','ovation-blog'),
		'section' => 'ovation_blog_urls',
		'setting' => 'ovation_blog_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('ovation_blog_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	)); 
	$wp_customize->add_control('ovation_blog_instagram',array(
		'label' => esc_html__('Instagram URL','ovation-blog'),
		'section' => 'ovation_blog_urls',
		'setting' => 'ovation_blog_instagram',
		'type'    => 'url'
	));

    //Slider
	$wp_customize->add_section( 'ovation_blog_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'ovation-blog' ),
    	'description' => __( 'Image Dimension ( 700 x 795 ) px', 'ovation-blog' ),
		'priority'   => null,
	) );

	$wp_customize->add_setting('ovation_blog_slider_arrows',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('ovation_blog_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','ovation-blog'),
       'section' => 'ovation_blog_slider_section',
    ));

	// $post_list = get_posts();
	$args = array('numberposts' => -1); 
	$post_list = get_posts($args);
	$i = 0;	
	$pst_sls[]= __('Select','ovation-blog');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $s = 1; $s <= 4; $s++ ) {
		$wp_customize->add_setting('ovation_blog_post_setting'.$s,array(
			'sanitize_callback' => 'ovation_blog_sanitize_choices',
		));
		$wp_customize->add_control('ovation_blog_post_setting'.$s,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','ovation-blog'),
			'section' => 'ovation_blog_slider_section',
		));
	}
	wp_reset_postdata();

	// Popular Post
	$wp_customize->add_section('ovation_blog_post',array(
		'title' => esc_html__('Popular Post','ovation-blog'),
		'description' => __( 'Image Dimension ( 270 x 295 ) px', 'ovation-blog' ),
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= __('Select','ovation-blog');
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('ovation_blog_post_category_setting',array(
		'default' => 0,
		'sanitize_callback' => 'ovation_blog_sanitize_select',
	));
	$wp_customize->add_control('ovation_blog_post_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display Post','ovation-blog'),
		'section' => 'ovation_blog_post',
	));

	// Top Categories
	$wp_customize->add_section('ovation_blog_top_category',array(
		'title' => esc_html__('Top Categories','ovation-blog'),
		'description' => __( 'Image Dimension ( 410 x 260 ) px', 'ovation-blog' ),
	));

	$wp_customize->add_setting('ovation_blog_top_category_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('ovation_blog_top_category_text',array(
		'label' => esc_html__('Heading Text','ovation-blog'),
		'section' => 'ovation_blog_top_category',
		'setting' => 'ovation_blog_top_category_text',
		'type'    => 'text'
	));

	$wp_customize->add_setting('ovation_blog_top_category_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('ovation_blog_top_category_heading',array(
		'label' => esc_html__('Heading','ovation-blog'),
		'section' => 'ovation_blog_top_category',
		'setting' => 'ovation_blog_top_category_heading',
		'type'    => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= __('Select','ovation-blog');
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('ovation_blog_top_category_setting',array(
		'default' => 0,
		'sanitize_callback' => 'ovation_blog_sanitize_select',
	));
	$wp_customize->add_control('ovation_blog_top_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display Post','ovation-blog'),
		'section' => 'ovation_blog_top_category',
	));
    
	//Footer
    $wp_customize->add_section( 'ovation_blog_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'ovation-blog' ),
	) );

    $wp_customize->add_setting('ovation_blog_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ovation_blog_footer_text',array(
		'label'	=> esc_html__('Copyright Text','ovation-blog'),
		'section'	=> 'ovation_blog_footer_copyright',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'ovation_blog_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'ovation_blog_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'ovation_blog_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'ovation_blog_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'ovation-blog' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'ovation-blog' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'ovation_blog_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'ovation_blog_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'ovation_blog_customize_register' );

function ovation_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

function ovation_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function ovation_blog_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function ovation_blog_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}