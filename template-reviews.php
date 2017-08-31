<?php
/**
 * Template Name: Шаблон страницы отзывов
 */
?>

<section id="home" class="main-home parallax-section overlay_bg__blog" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat;">
     <div class="overlay_bg overlay_bg__blog"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1 class="mainscreen_title"><?php echo get_field('reviewspage_title'); ?></h1>
                    <p class="mainscreen_description"><?php echo get_field('reviewspage_description'); ?></p>
               </div>
          </div>
     </div>
</section>

<section class="block_testimonials" id="customers">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                        <?php
                            $reviewspage_post_max_item = get_option('reviews_max_item');
                            $query = new WP_Query( array( 
				'post_type' => 'reviews',
    				'max_num_pages' => 1,
                                'posts_per_page' => $reviewspage_post_max_item,
				'paged' => $paged));
                            if ( $query->have_posts() ) : ?>
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                   
                                        <div class="item testimonials_info testimonials_info__margin-bottom testimonials_info__no-bg"> 
                                            <div class="item_wrapper">
                                                <div class="row">
                                                    <div class="col-xl-12 testimonials_data">
                                                        <div class="testimonials_data__foto" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                                                        <div class="testimonials_data__specialization">
                                                            <h4 class="specialization_title"><?php echo get_the_title(); ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 testimonials_reviews">
                                                        <p class="reviews_desc"><?php echo get_the_content(); ?></p>
                                                        <a href="<?php echo get_option('tours_reviews_link'); ?>" target="_blank" class="reviews_link"><?php echo get_option('tours_reviews_text_link'); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php endwhile; wp_reset_postdata(); ?> 
                            <?php endif; ?>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 pagination__margin-top">
                    <?php
                    $big = 999999999; // уникальное число
                    echo paginate_links( array(
                        'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format'  => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'prev_text' => __( 'Назад', 'textdomain' ),
                        'next_text' => __( 'Вперёд', 'textdomain' ),
                        'total'   => $query->max_num_pages
                    ) );
                    ?>
                </div>
            </div>
        </div>
    </section>
