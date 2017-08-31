<?php

function theme_settings_page()
{
    ?>
    <div class="wrap">
        <style>
            input, textarea {
                width: 100%;
                max-width: 400px;
            }

            input[type="submit"] {
                max-width: 200px;
                margin: 0 auto;
            }

            form {
                max-width: 700px;
            }

            p.submit {
                text-align: center;
            }
        </style>
        <h1>Настройки темы</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("site-options");
            ?>
            <hr>
            <?php
            settings_fields("section");
            do_settings_sections("tours-options");
            ?>
            <hr>
            <?php
            settings_fields("section");
            do_settings_sections("reviews-options");
            ?>
            <hr>
            <?php
            settings_fields("section");
            do_settings_sections("blog-options");
            ?>
            <hr>
            <?php
            settings_fields("section");
            do_settings_sections("post-options");
            ?>
            <hr>
            <?php
            do_settings_sections("footer-options");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}


//site
function display_error_image_element()
{
    ?>
    <input type="text" name="error_image" id="error_image" value="<?php echo get_option('error_image'); ?>" />
    <?php
}



//tours
function display_mainpage_tours_max_item_element()
{
    ?>
    <input type="text" name="mainpage_tours_max_item" id="mainpage_tours_max_item" value="<?php echo get_option('mainpage_tours_max_item'); ?>" />
    <?php
}
function display_tours_post_max_item_element()
{
    ?>
    <input type="text" name="tours_post_max_item" id="tours_post_max_item" value="<?php echo get_option('tours_post_max_item'); ?>" />
    <?php
}
function display_tours_description_title_element()
{
    ?>
    <input type="text" name="tours_description_title" id="tours_description_title" value="<?php echo get_option('tours_description_title'); ?>" />
    <?php
}
function display_tours_gallery_title_element()
{
    ?>
    <input type="text" name="tours_gallery_title" id="tours_gallery_title" value="<?php echo get_option('tours_gallery_title'); ?>" />
    <?php
}
function display_tours_reviews_title_element()
{
    ?>
    <input type="text" name="tours_reviews_title" id="tours_reviews_title" value="<?php echo get_option('tours_reviews_title'); ?>" />
    <?php
}
function display_tours_reviews_text_link_element()
{
    ?>
    <input type="text" name="tours_reviews_text_link" id="tours_reviews_text_link" value="<?php echo get_option('tours_reviews_text_link'); ?>" />
    <?php
}
function display_tours_reviews_link_element()
{
    ?>
    <input type="text" name="tours_reviews_link" id="tours_reviews_link" value="<?php echo get_option('tours_reviews_link'); ?>" />
    <?php
}

//reviews
function display_reviews_max_item_element()
{
    ?>
    <input type="text" name="reviews_max_item" id="reviews_max_item" value="<?php echo get_option('reviews_max_item'); ?>" />
    <?php
}

//blog
function display_blog_title_element()
{
    ?>
    <input type="text" name="blog_title" id="blog_title" value="<?php echo get_option('blog_title'); ?>" />
    <?php
}
function display_blog_description_element()
{
    ?>
    <input type="text" name="blog_description" id="blog_description" value="<?php echo get_option('blog_description'); ?>" />
    <?php
}
function display_blog_image_element()
{
    ?>
    <input type="text" name="blog_image" id="blog_image" value="<?php echo get_option('blog_image'); ?>" />
    <?php
}

//post
function display_mainpage_post_max_item_element()
{
    ?>
    <input type="text" name="mainpage_post_max_item" id="mainpage_post_max_item" value="<?php echo get_option('mainpage_post_max_item'); ?>" />
    <?php
}
function display_blog_post_max_item_element()
{
    ?>
    <input type="text" name="blog_post_max_item" id="blog_post_max_item" value="<?php echo get_option('blog_post_max_item'); ?>" />
    <?php
}

//footer
function display_footer_title_element()
{
    ?>
    <input type="text" name="footer_title" id="footer_title" value="<?php echo get_option('footer_title'); ?>" />
    <?php
}
function display_footer_vk_element()
{
    ?>
    <input type="text" name="footer_vk" id="footer_vk" value="<?php echo get_option('footer_vk'); ?>" />
    <?php
}
function display_footer_instagram_element()
{
    ?>
    <input type="text" name="footer_instagram" id="footer_instagram" value="<?php echo get_option('footer_instagram'); ?>" />
    <?php
}
function display_footer_twitter_element()
{
    ?>
    <input type="text" name="footer_twitter" id="footer_twitter" value="<?php echo get_option('footer_twitter'); ?>" />
    <?php
}
function display_thankyoupage_link_element()
{
    ?>
    <input type="text" name="thankyoupage_link" id="thankyoupage_link" value="<?php echo get_option('thankyoupage_link'); ?>" />
    <?php
}
function display_phone_1_element()
{
    ?>
    <input type="text" name="phone_1" id="phone_1" value="<?php echo get_option('phone_1'); ?>" />
    <?php
}
function display_phone_2_element()
{
    ?>
    <input type="text" name="phone_2" id="phone_2" value="<?php echo get_option('phone_2'); ?>" />
    <?php
}
function display_operator_1_element()
{
    ?>
    <input type="text" name="operator_1" id="operator_1" value="<?php echo get_option('operator_1'); ?>" />
    <?php
}
function display_operator_2_element()
{
    ?>
    <input type="text" name="operator_2" id="operator_2" value="<?php echo get_option('operator_2'); ?>" />
    <?php
}
function display_email_element()
{
    ?>
    <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
    <?php
}
function display_adres_element()
{
    ?>
    <input type="text" name="adres" id="adres" value="<?php echo get_option('adres'); ?>" />
    <?php
}

function display_theme_panel_fields()
{

    //site
    add_settings_section("section", "Настройки сайта", null, "site-options");

    add_settings_field("error_image", "Изображение страницы 404", "display_error_image_element", "site-options", "section");
    register_setting("section", "error_image");

    //tour
    add_settings_section("section", "Настройки экскурсий", null, "tours-options");

    add_settings_field("mainpage_tours_max_item", "Макс. кол. экскурсий на гл. странице", "display_mainpage_tours_max_item_element", "tours-options", "section");
    register_setting("section", "mainpage_tours_max_item");
    add_settings_field("tours_post_max_item", "Макс. кол. маршрутов на странице экскурсий", "display_tours_post_max_item_element", "tours-options", "section");
    register_setting("section", "tours_post_max_item");
    add_settings_field("tours_description_title", "Заголовок описания", "display_tours_description_title_element", "tours-options", "section");
    register_setting("section", "tours_description_title");
    add_settings_field("tours_gallery_title", "Заголовок галереи", "display_tours_gallery_title_element", "tours-options", "section");
    register_setting("section", "tours_gallery_title");
    add_settings_field("tours_reviews_title", "Заголовок отзывов", "display_tours_reviews_title_element", "tours-options", "section");
    register_setting("section", "tours_reviews_title");
    add_settings_field("tours_reviews_text_link", "Текст ссылки на источник", "display_tours_reviews_text_link_element", "tours-options", "section");
    register_setting("section", "tours_reviews_text_link");
    add_settings_field("tours_reviews_link", "Ссылка на источник", "display_tours_reviews_link_element", "tours-options", "section");
    register_setting("section", "tours_reviews_link");

    //reviews
    add_settings_section("section", "Настройки отзывов", null, "reviews-options");

    add_settings_field("reviews_max_item", "Макс. кол. отзывов на странице", "display_reviews_max_item_element", "reviews-options", "section");
    register_setting("section", "reviews_max_item");

    //blog
    add_settings_section("section", "Настройки отзывов", null, "blog-options");

    add_settings_field("blog_title", "Заголовок страницы блога", "display_blog_title_element", "blog-options", "section");
    register_setting("section", "blog_title");
    add_settings_field("blog_description", "Описание страницы блога", "display_blog_description_element", "blog-options", "section");
    register_setting("section", "blog_description");
    add_settings_field("blog_image", "Изображение страницы блога", "display_blog_image_element", "blog-options", "section");
    register_setting("section", "blog_image");

    //post
    add_settings_section("section", "Настройки блога", null, "post-options");

    add_settings_field("mainpage_post_max_item", "Макс. кол. постов на гл. странице", "display_mainpage_post_max_item_element", "post-options", "section");
    register_setting("section", "mainpage_post_max_item");
    add_settings_field("blog_post_max_item", "Макс. кол. постов на странице блога", "display_blog_post_max_item_element", "post-options", "section");
    register_setting("section", "blog_post_max_item");

    //footer
    add_settings_section("section", "Настройки подвала сайта", null, "footer-options");

    add_settings_field("footer_title", "Заголовок", "display_footer_title_element", "footer-options", "section");
    register_setting("section", "footer_title");
    add_settings_field("footer_vk", "Ссылка VK", "display_footer_vk_element", "footer-options", "section");
    register_setting("section", "footer_vk");
    add_settings_field("footer_instagram", "Ссылка Instagram", "display_footer_instagram_element", "footer-options", "section");
    register_setting("section", "footer_instagram");
    add_settings_field("footer_twitter", "Ссылка Twitter", "display_footer_twitter_element", "footer-options", "section");
    register_setting("section", "footer_twitter");
    add_settings_field("thankyoupage_link", "Ссылка на страницу благодарности", "display_thankyoupage_link_element", "footer-options", "section");
    register_setting("section", "thankyoupage_link");
    add_settings_field("phone_1", "Телефон 1", "display_phone_1_element", "footer-options", "section");
    register_setting("section", "phone_1");
    add_settings_field("phone_2", "Телефон 2", "display_phone_2_element", "footer-options", "section");
    register_setting("section", "phone_2");
    add_settings_field("operator_1", "Моб. оператор 1", "display_operator_1_element", "footer-options", "section");
    register_setting("section", "operator_1");
    add_settings_field("operator_2", "Моб. оператор 2", "display_operator_2_element", "footer-options", "section");
    register_setting("section", "operator_2");
    add_settings_field("email", "E-mail", "display_email_element", "footer-options", "section");
    register_setting("section", "email");
    add_settings_field("adres", "Адрес", "display_adres_element", "footer-options", "section");
    register_setting("section", "adres");

}


add_action("admin_init", "display_theme_panel_fields");


function add_theme_menu_item()
{
    add_menu_page("Theme settings", "Настройки темы", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");