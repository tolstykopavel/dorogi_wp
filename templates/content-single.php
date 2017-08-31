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

