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
            <div class="col-lg-2 pd-pad-0">
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
                <p>Address: <?php echo get_option('address'); ?></p>
                <p>Tel: <?php echo get_option('contact_number'); ?></p>
                <p>Fax: <?php echo get_option('fax'); ?></p>
                <p>E-mail. <?php echo get_option('email'); ?></p>

                <div class="pd-footer-links">
                   <?php 
                   
                   $youtube = get_option('youtube_link'); 
                   $linkeding = get_option('linkedin'); 
                   $facebook = get_option('facebook_url'); 
                   $twitter = get_option('twitter_url'); 
                   $whatsap = get_option('whatsap_number'); 
                   $insta = get_option('insta_url'); 
                   
                   ?>
                   
                   <?php if($linkeding){ ?>
                   <a href="<?php echo $linkeding ;?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png"></a>
                   <?php } ?>

                   <?php if($facebook){ ?>
                    <a href="<?php echo $facebook ;?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"></a>
                    <?php } ?>

                    <?php if($twitter){ ?>
                    <a href="<?php echo $twitter ;?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png"></a>
                     <?php } ?>

                    <?php if($whatsap){ ?>
                    <a href="<?php echo $whatsap ;?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/whatsap.png"></a>
                     <?php } ?>

                    <?php if($insta){ ?>
                    <a href="<?php echo $insta ;?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta.png"></a>
                     <?php } ?>

                    <?php if($youtube){ ?>
                    <a href="<?php echo $youtube ;?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/youtube.png"></a>
                     <?php } ?>
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


<script>
  AOS.init({
      once:true
  });
</script>

<?php wp_footer() ?>