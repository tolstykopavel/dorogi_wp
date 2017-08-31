<?php
/**
 * Template Name: Шаблон страницы экскурсии
 */
?>

<section class="block_portfolio padding_none height_all_screen" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat top center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <div class="gradient"></div>
        <div class="portfolio_foto height_all_screen">
            <div class="container padding_container_none">
                <div class="row">
                    <div class="col-lg-5 col-12 portfolio_info padding_none">
                        <div class="portfolio_info__content height_all_screen padding portfolio_info__no-background">
                            <h3 class="medium_title portfolio_info__title"><?php echo get_the_title(); ?></h3>
                            <p class="desc portfolio__desc"><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block_technology">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 offset-xl-1">
                    <?php if( have_rows('tours_info') ): ?>
                        <?php while ( have_rows('tours_info') ) : the_row(); ?>
                            <h3 class="technology_title"><?php echo get_sub_field('tours_info_title'); ?></h3>
                            <?php if( have_rows('tours_info_description') ): ?>
                                <ul class="technology_list">
                                    <?php while ( have_rows('tours_info_description') ) : the_row(); ?>
                                        <li class="technology_item"><?php echo get_sub_field('tours_info_description_item'); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xl-9 offset-xl-1">
                    <h2 class="light_title technology_desc__title"><?php echo get_option('tours_description_title'); ?></h2>
                    <?php echo get_field('tours_description'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="block_screens">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 offset-xl-1">
                    <h2 class="light_title screens_title"><?php echo get_option('tours_gallery_title'); ?></h2>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <?php
                        $images = get_field('tours_gallery');
                        if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                            <div class="col-md-6 col-sm-6">
                                <div class="gallery-thumb">
                                    <a href="<?php echo $image['url']; ?>" class="image-popup">
                                        <img src="<?php echo $image['url']; ?>" class="img-responsive" alt="Gallery Image">
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    

           