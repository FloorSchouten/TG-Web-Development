<?php
/**
 * The header for our theme
 *
 * @subpackage Ovation Blog
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ovation-blog' ); ?></a>
	
	<div id="page" class="site">
		<div id="header">
			<div class="wrap_figure">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-9">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $blog_info = get_bloginfo( 'name' ); ?>
					                <?php if ( ! empty( $blog_info ) ) : ?>
					                  	<?php if ( is_front_page() && is_home() ) : ?>
					                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					                  	<?php else : ?>
				                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				                  		<?php endif; ?>
					                <?php endif; ?>
					                <?php
				                  		$description = get_bloginfo( 'description', 'display' );
					                  	if ( $description || is_customize_preview() ) :
					                ?>
				                  	<p class="site-description">
				                    	<?php echo esc_html($description); ?>
				                  	</p>
				              	<?php endif; ?>
						    </div>
						</div>
						<div class="col-lg-5 col-md-2 col-3">
							<?php if(has_nav_menu('primary')){?>
								<div class="toggle-menu gb_menu">
									<button onclick="ovation_blog_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p><?php esc_html_e('Menu','ovation-blog'); ?></p><span class="screen-reader-text"><?php esc_html_e('Menu','ovation-blog'); ?></span></button>
								</div>
							<?php }?>
						   	<div class="menu_box">
						   		<?php get_template_part('template-parts/navigation/navigation-top'); ?>
						   	</div>
						</div>
						<div class="col-lg-2 col-md-4">
							<div class="links">
								<?php if( get_theme_mod('ovation_blog_facebook') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('ovation_blog_facebook','')); ?>"><i class="fab fa-facebook-f"></i></a>
								<?php }?>
								<?php if( get_theme_mod('ovation_blog_twitter') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('ovation_blog_twitter','')); ?>"><i class="fab fa-twitter"></i></a>
								<?php }?>
								<?php if( get_theme_mod('ovation_blog_linkedin') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('ovation_blog_linkedin','')); ?>"><i class="fab fa-linkedin-in"></i></a>
								<?php }?>
								<?php if( get_theme_mod('ovation_blog_youtube') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('ovation_blog_youtube','')); ?>"><i class="fab fa-youtube"></i></a>
								<?php }?>
								<?php if( get_theme_mod('ovation_blog_instagram') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('ovation_blog_instagram','')); ?>"><i class="fab fa-instagram"></i></a>
								<?php }?>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="search-box">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>