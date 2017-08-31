<?php
/**
 * Template Name: Шаблон страницы всех экскурсий
 */
?>

<section id="home" class="main-home parallax-section overlay_bg__blog" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat;">
     <div class="overlay_bg overlay_bg__blog"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1 class="mainscreen_title"><?php echo get_field('tourspage_title'); ?></h1>
                    <p class="mainscreen_description"><?php echo get_field('tourspage_description'); ?></p>
               </div>
          </div>
     </div>
</section>

<section class="block-blog" id="blog">
    <div class="container">
        <div class="row">
            <?php $tours_post_max_item = get_option('tours_post_max_item');
                    $query = new WP_Query( array( 'post_type' => 'tours',
                        'posts_per_page' => $tours_post_max_item,
                        'paged' => $paged));
                    if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="block-blog_item">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <div class="block-blog_photo" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                                    </a>
                                    <a href="<?php echo get_the_permalink(); ?>" class="block-blog_title"><?php echo get_the_title(); ?></a>
                                    <p class="block-blog_description"><?php echo get_the_excerpt(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="block-blog_link">Подробнее</a>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12 pagination__margin-top">
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