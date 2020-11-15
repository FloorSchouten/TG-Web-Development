<?php
/**
 * The template for displaying all single posts
 * 
 * @subpackage Ovation Blog
 * @since 1.0
 */

get_header(); ?>

<main id="content">
	<div class="container-fluid">
		<div class="content-area entry-content">
			<div id="main" class="site-main" role="main">
		       	<div class="row m-0">
		    		<div class="content_area col-lg-8 col-md-8">
				    	<section id="post_section">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'ovation-blog' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'ovation-blog' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'ovation-blog' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'ovation-blog' ) . '</span> ',
								) );

							endwhile; // End of the loop.
							?>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>			
			</div>
		</div>
	</div>
</main>

<?php get_footer();