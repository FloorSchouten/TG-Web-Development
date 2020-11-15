<?php
/**
 * The template for displaying archive pages
 *
 * @subpackage Ovation Blog
 * @since 1.0
 */

get_header(); ?>

<main id="content">
	<div class="container-fluid">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title"><span>', '</span></h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
		<?php endif; ?>

		<div class="content-area">
			<div id="main" class="site-main" role="main">
		    	<div class="row m-0">	    		
			        <div class="content_area col-lg-8 col-md-8">
				    	<section id="post_section">
				    		<div class="row">
								<?php
									if ( have_posts() ) : ?>
									<?php
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