<section id="home" class="main-home parallax-section overlay_bg__blog" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat;">
     <div class="overlay_bg overlay_bg__blog"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1 class="mainscreen_title"><?php echo get_the_title(); ?></h1>
                    <p class="mainscreen_description"><?php echo get_field('blog_introduction_text'); ?></p>
               </div>
          </div>
     </div>
</section>

<?php while (have_posts()) : the_post(); ?>
<!--    --><?php //if(function_exists('the_views')) { the_views(); } ?>
    <section class="block-blog_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<!--    <nav class="block_navigation">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                --><?php
//                $prev_post = get_previous_post();
//                if($prev_post): ?>
<!--                    <div class="col-md-6 col-12">-->
<!--                        --><?php //$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title)); ?>
<!--                        <a href="--><?php //echo get_permalink($prev_post->ID) ?><!--" title="--><?php //echo $prev_title ?><!--" class="site_button button_prev">Предыдущая статья</a>-->
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!---->
<!--                --><?php
//                $next_post = get_next_post();
//                if($next_post): ?>
<!--                    <div class="col-md-6 col-12">-->
<!--                        --><?php //$next_title = strip_tags(str_replace('"', '', $next_post->post_title)); ?>
<!--                        <a href="--><?php //echo get_permalink($next_post->ID) ?><!--" title="--><?php //echo $next_title ?><!--" class="site_button button_next">Следующая статья</a>-->
<!--                    </div>-->
<!--                --><?php // endif; ?>
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->


    <section class="block-blog_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Популярные статьи</h4>
                </div>
            </div>
            <div class="row">
                <?php $query = new WP_Query('orderby=comment_count&posts_per_page=3');
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="block-blog_item">
                            <a href="<?php echo get_the_permalink(); ?>">
                                <div class="block-blog_photo" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                            </a>
                            <a href="<?php echo get_the_permalink(); ?>" class="block-blog_title"><?php echo get_the_title(); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>



    <section class="block-blog_comments">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

			<script type="text/javascript">
  				VK.init({apiId: 6160384, onlyWidgets: true});
			</script>

			<div id="vk_comments"></div>
			<script type="text/javascript">
				VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
			</script>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>



