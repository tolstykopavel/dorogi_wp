<footer class="footer" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-1">
                    <h2 class="extralight_title footer_title"><?php echo get_option('footer_title'); ?></h2>
                </div>
                <div class="col-xl-8 offset-xl-2">
                    <div class="block-contacts-form">
                        <?php echo do_shortcode('[contact-form-7 id="2337" title="Contact form"]'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
<!--                    --><?php //$phone = getFormattedPhone(get_option('phone_1')); ?>
<!--                    <span class="footer_link">--><?php //echo get_option('operator_1'); ?><!--: <a href="tel:--><?php //echo get_option('phone_1'); ?><!--">--><?php //echo $phone; ?><!--</a></span>-->
                    <?php $phone = getFormattedPhone(get_option('phone_2')); ?>
                    <span class="footer_link"><?php echo get_option('operator_2'); ?>: <a href="tel:+375<?php echo get_option('phone_2'); ?>"><?php echo $phone; ?></a></span>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <span class="footer_link link_center">Email: <a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></span>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <span class="footer_link link_right"><?php echo get_option('adres'); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="social_icons">
                        <a target="_blank" href="<?php echo get_option('footer_vk'); ?>" class="icon">
                            <div class="vk"></div>
                        </a>
                        <a target="_blank" href="<?php echo get_option('footer_instagram'); ?>" class="icon">
                            <div class="instagram"></div>
                        </a>
                        <a target="_blank" href="<?php echo get_option('footer_twitter'); ?>" class="icon">
                            <div class="twitter"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if (jQuery("form").hasClass('sent')) { document.location.href = '<?php echo  get_option('thankyoupage_link'); ?>';}
        }, false );
    </script>

    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

    <script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/jquery.magnific-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/owl.carousel.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45727881 = new Ya.Metrika({
                    id:45727881,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45727881" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
