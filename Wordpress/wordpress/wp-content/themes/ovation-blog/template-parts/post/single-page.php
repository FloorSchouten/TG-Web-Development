<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Ovation Blog
 * @since 1.0
 */
?>

<div id="single-post-section" class="single-post-page entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage">
	        <div class="padd-box">
	        	<h2><?php the_title();?></h2>
            	<?php the_post_thumbnail(); ?>
	            <div class="overlay">
            		<div class="date-box">
	        			<span><i class="far fa-calendar-alt"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
	        			<span class="entry-author"><i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
	      				<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comments','ovation-blog'), __('0 Comments','ovation-blog'), __('% Comments','ovation-blog')); ?></span>
	    			</div>
            	</div>
	            <p><?php the_content(); ?></p>
	        </div>
	      	<div class="clearfix"></div> 
	  	</div>
	</div>
</div>