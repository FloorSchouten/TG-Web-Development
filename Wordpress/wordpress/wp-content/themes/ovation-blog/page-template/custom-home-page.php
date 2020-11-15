<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content" class="mt-5">
  <div class="row mr-0">
    <div class="col-lg-6 col-md-6 media-pad">
      <?php if( get_theme_mod('ovation_blog_slider_arrows') != ''){ ?>  
        <section id="slider">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
            <?php
              for ( $i = 1; $i <= 4; $i++ ) {
                $mod =  get_theme_mod( 'ovation_blog_post_setting' . $i );
                if ( 'page-none-selected' != $mod ) {
                  $slide_pages[] = $mod;
                }
              }
               if( !empty($slide_pages) ) :
              $args = array(
                'post_type' =>array('post','page'),
                'post__in' => $slide_pages
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
            ?>
            <div class="carousel-inner" role="listbox">
              <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                  </div>
                </div>
              </div>
              <?php $i++; endwhile;
              wp_reset_postdata();?>
            </div>
            <?php else : ?>
            <div class="no-postfound"></div>
              <?php endif;
            endif;?>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
              </a>
          </div>
          <div class="clearfix"></div>
        </section>
      <?php }?>
    </div>
    <div class="col-lg-6 col-md-6 media-post-pad">
      <div id="our-post">
        <div class="row">
          <?php
          $catData1=  get_theme_mod('ovation_blog_post_category_setting');if($catData1){
          $page_query = new WP_Query(array( 'category_name' => esc_html($catData1 ,'ovation-blog')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>  
              <div class="col-lg-6 col-md-6 col-6">
                <div class="box">
                  <?php the_post_thumbnail(); ?>
                  <div class="box-content">
                    <p><?php the_time( get_option( 'date_format' ) ); ?></p>
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title();?></h4></a>
                    <p class="entry-author">
                      <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
                      <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
                    </p>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          }?>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <section id="top-cat">
    <div class="container-fluid">
      <p><?php echo esc_html(get_theme_mod('ovation_blog_top_category_text','')); ?></p>
      <h3><?php echo esc_html(get_theme_mod('ovation_blog_top_category_heading','')); ?></h3>
      <div class="row">
        <?php
        $catData1=  get_theme_mod('ovation_blog_top_category_setting');if($catData1){
        $page_query = new WP_Query(array( 'category_name' => esc_html($catData1 ,'ovation-blog')));?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-lg-4 col-md-4">
              <div class="box">
                <?php the_post_thumbnail(); ?>
                <div class="box-content">
                  <h4><?php the_title();?></h4>
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('LEARN MORE','ovation-blog'); ?></a>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        }?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>