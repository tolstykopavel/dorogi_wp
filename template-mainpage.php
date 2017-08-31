<?php
/**
 * Template Name: Шаблон главной страницы
 */
?>

<?php $image = get_field('mainpage_mainscreen_image');
if( !empty($image) ): ?>
    <section id="home" class="main-home parallax-section" style="background: url(<?php echo $image['url']; ?>) no-repeat;">
<?php endif; ?>
     <div class="overlay_bg"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1 class="mainscreen_title"><?php echo get_field('mainpage_mainscreen_title'); ?></h1>
                    <ul class="mainscreen_list">
                        <?php if( have_rows('mainpage_mainscreen_language') ): ?>
                            <?php while ( have_rows('mainpage_mainscreen_language') ) : the_row(); ?>
                                <li><?php echo get_sub_field('mainpage_mainscreen_language_item'); ?></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a href="#contacts" id="mainpage_hero_button" class="site_button site_button__white up"><?php echo get_field('mainpage_mainscreen_text_button'); ?></a>
               </div>
          </div>
     </div>
</section>

<section class="catalog_mainpage" id="about">
<?php $image = get_field('mainpage_about_image_1');
if( !empty($image) ): ?>
    <div class="foto left" style="background: url(<?php echo $image['url']; ?>);"></div>
<?php endif; ?>
    <div class="info right">
        <div class="info_block">
            <div class="info_block_wrapper">
                <div class="wrapper_block_left">
                    <h3 class="title align_left"><?php echo get_field('mainpage_about_title_1'); ?></h3>
                </div>
                <p class="description"><?php echo get_field('mainpage_about_description_1'); ?></p>
            </div>
        </div>
    </div>
</section>

    <section class="catalog_mainpage">
        <div class="info left">
            <div class="info_block">
                <div class="info_block_wrapper">
                    <div class="wrapper_block_right">
                        <h3 class="title"><?php echo get_field('mainpage_about_title_2'); ?></h3>
                    </div>
                    <p class="description"><?php echo get_field('mainpage_about_description_2'); ?></p>
                </div>
            </div>
        </div>
        <?php $image = get_field('mainpage_about_image_2');
        if( !empty($image) ): ?>
            <div class="foto right" style="background: url(<?php echo $image['url']; ?>);"></div>
        <?php endif; ?>
    </section>

    <section class="block_portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-1 col-12">
                    <h2 class="light_title portfolio_title"><?php echo get_field('mainpage_tours_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="mainpage_portfolio__slider">
            <div class="owl-carousel owl-theme" id="mainpage_portfolio__slider">
                <?php
                $mainpage_tours_text_link = get_field('mainpage_tours_text_link');
                $tours_slider_count = 0;
                $tours_max_item = get_option('mainpage_tours_max_item');
                $query = new WP_Query( array( 'post_type' => 'tours',
                    'posts_per_page' => $tours_max_item));
                if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php if( get_field('mainpage_tours_select') ): ?>
                            <div class="item portfolio_foto owl-lazy" data-src="<?php echo get_the_post_thumbnail_url(); ?>">
                                <div class="container null">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 portfolio_info">
                                            <div class="portfolio_info__content">
                                                <h3 class="medium_title portfolio_info__title"><?php echo get_the_title(); ?></h3>
                                                <p class="desc portfolio__desc"><?php echo get_the_excerpt(); ?></p>
                                                <a href="<?php echo get_the_permalink(); ?>" class="site_button up"><?php echo $mainpage_tours_text_link; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $tours_slider_count++;
                            if($tours_slider_count == $tours_max_item){
                                break;
                            }
                            ?>
                        <?php endif; ?>
                    <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <div class="nav_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 offset-xl-1">
                            <div class="nav">
                                <div class="prev"></div>
                                <div class="next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo get_field('mainpage_tours_link'); ?>" class="site_button up site_button__margin"><?php echo get_field('mainpage_tours_main_text_link'); ?></a>
    </section>

    
<section class="block_testimonials" id="customers">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-1 col-12">
                    <h2 class="light_title testimonials_title"><?php echo get_option('tours_reviews_title'); ?></h2>
                </div>
                <div class="col-xl-12 col-12">
                    <div class="owl-carousel owl-theme" id="mainpage_testimonials__slider">
                        <?php

                            $reviews_slider_count = 0;
                            $reviews_max_item = get_option('reviews_max_item');
                            $query = new WP_Query( array( 'post_type' => 'reviews',
                                'posts_per_page' => $reviews_max_item));
                            if ( $query->have_posts() ) : ?>
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <?php if( get_field('mainpage_reviews') ): ?>
                                        <div class="item testimonials_info"> 
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
                                                    <div class="col-xl-12 col-lg-12 testimonials_reviews">
                                                        <p class="reviews_desc"><?php echo get_the_content(); ?></p>
                                                        <a href="<?php echo get_option('tours_reviews_link'); ?>" target="_blank" class="reviews_link"><?php echo get_option('tours_reviews_text_link'); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $reviews_slider_count++;
                                        if($reviews_slider_count == $reviews_max_item){
                                            break;
                                        }
                                        ?>
                                    <?php endif; ?>
                                <?php endwhile; wp_reset_postdata(); ?> 
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
<a href="<?php echo get_field('mainpage_reviews_link'); ?>" class="site_button site_button__margin-top up"><?php echo get_field('mainpage_reviews_text_link'); ?></a>
    </section>


    <section class="block-blog" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-1 col-12">
                    <h2 class="light_title blog_title"><?php echo get_field('mainpage_blog_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php $mainpage_post_max_item = get_option('mainpage_post_max_item');
                    $query = new WP_Query( array( 'post_type' => 'post',
                        'posts_per_page' => $mainpage_post_max_item));
                    if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="block-blog_item">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <div class="block-blog_photo" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                                    </a>
                                    <a href="<?php echo get_the_permalink(); ?>" class="block-blog_title"><?php echo get_the_title(); ?></a>
                                    <p class="block-blog_date"><?php echo get_the_date( 'F d, y' ); ?></p>
                                    <p class="block-blog_description"><?php echo get_the_excerpt(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="block-blog_link">Подробнее</a>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    <?php endif; ?>
            </div>
        </div>
        <a href="<?php echo get_field('mainpage_blog_link'); ?>" class="site_button up"><?php echo get_field('mainpage_blog_text_link'); ?></a>
    </section>


    