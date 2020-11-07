<section class="l-c-footer l-c-p-t-b-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-b-20 pd-footer-logo">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer-logo.png" />
            </div>
            <div class="col-lg-4 pd-footer-desc">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
            <div class="col-lg-2">
                <h4>Quick Links</h4>
                <div class="footer-menu-wrap">
                    <?php
                    wp_nav_menu(
                        array(
                            'depth'       => 10,
                            'theme_location'  => 'footer',
                            'container_class' => 'false',
                            'container_id'    => 'footerMenu',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'footer-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="col-lg-2">
                <h4>Products</h4>
                <div class="footer-menu-wrap">
                    <?php
                    wp_nav_menu(
                        array(
                            'depth'       => 10,
                            'theme_location'  => 'product',
                            'container_class' => 'false',
                            'container_id'    => 'footerMenu',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'footer-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="col-lg-4 pd-inf-footer">
                <h4>Information</h4>
                <p>Address: No. 47, Industrial Estate,
                    Dankotuwa, Sri Lanka.</p>
                <p>Tel: +94 31 226 5607</p>
                <p>Fax: +94 31 226 5608</p>
                <p>E-mail. info@ilovecoco.co</p>

                <div class="pd-footer-links">
                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png"></a>
                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"></a>
                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png"></a>
                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/whatsap.png"></a>
                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta.png"></a>
                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/youtube.png"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pd-bottom-bar ">
    <div class="container">
        <p class="text-white">Copyright © 2020 - I Love Coco - All Rights Reserved. Concept, Design & Development by Lizard Advertising</p>
    </div>
</section>


<?php wp_footer() ?>