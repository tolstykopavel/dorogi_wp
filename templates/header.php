<div class="overlay"></div>

<?php if ( is_page_template( 'template-mainpage.php') ): ?>
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="pushy pushy-right">
                    <a class="pushy-content">
                        <div class="menu-btn-close close"></div>
                        <ul id="menu">
                        <?php 
                            $count = 0;
                            $class = '';
                        ?>
                            <?php if( have_rows('mainpage_mainscreen_menu') ):
                                while ( have_rows('mainpage_mainscreen_menu') ) : the_row(); ?>
                                    <?php if($count == 0){
                                        $class = 'current-menu-item';
                                    }
                                    else{
                                        $class = '';
                                    } ?>
                                    <li>
                                        <a class="<?php echo $class; ?>" href="#<?php echo the_sub_field('mainpage_mainscreen_menu_select'); ?>"><?php echo the_sub_field('mainpage_mainscreen_menu_item'); ?></a>
                                    </li>
                                    <?php $count++; ?>
                                <?php endwhile;
                            endif; ?>
                        </ul>
                        <a href="http://vasilkovy.com" class="logoWrap">
                            <div class="logo" style="background-image: url('http://vasilkovy.com/wp-content/uploads/2017/09/logo.png')"></div>
                            <p class="logo_title">Васильковый узор</p>
                        </a>
                    </div>
                </nav>
                <div class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div> 
</header>

    <?php else: ?>

    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="pushy pushy-right">
                        <div class="pushy-content">
                            <div class="menu-btn-close close"></div>
                            <?php
                                if (has_nav_menu('primary_navigation')) :
                                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'cd-main-nav']);
                                endif;
                            ?>
                            <a href="http://vasilkovy.com" class="logoWrap">
                                <div class="logo" style="background-image: url('http://vasilkovy.com/wp-content/uploads/2017/09/logo.png')"></div>
                                <p class="logo_title">Васильковый узор</p>
                            </a>
                        </div>
                    </nav>
                    <div class="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div> 
    </header>
<?php endif; ?>