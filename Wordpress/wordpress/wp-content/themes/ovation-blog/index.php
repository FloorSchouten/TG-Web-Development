<?php
/**
 * The main template file
 *
 * @subpackage Ovation Blog
 * @since 1.0
 */

get_header(); ?>

<main id="content">
	<div class="container-fluid">
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><span><?php single_post_title(); ?></span></h1>
			</header>
		<?php else : ?>
			<header class="page-header">
				<h2 class="page-title"><span><?php esc_html_e( 'Posts', 'ovation-blog' ); ?></span></h2>
			</header>
		<?php endif; ?>

		<div class="content-area">
			<div id="main" class="site-main" role="main">
		    	<div class="row m-0">
					<div class="content_area col-lg-8 col-md-8">
				    	<section id="post_section">
				    		<div class="row">
								<?php
									if ( have_posts() ) :
									while ( have_posts() ) : the_post();

										get_template_part( 'template-parts/post/content' );

									endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif;
								?>
							</div>
							<div class="navigation">
				                <?php
				                    
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'ovation-blog' ),
				                        'next_text'          => __( 'Next page', 'ovation-blog' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ovation-blog' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				       	 	</div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();