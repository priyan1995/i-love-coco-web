<?php
/*
Template Name: Contact page
*/

get_header();
?>
<div class="pd-contact-wrapper">
    <section class="pd-contact-main-banner">
        <iframe src="<?php the_field('map_url_contact'); ?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>


    <section class="pd-contact-card-sec l-c-p-t-b-5">
        <div class="container">
            <div class="pd-contact-inf-card">
                <div class="row">
                    <div class="col-lg-5 pd-cont-card-left-img">
                        <div class="pd-overf-hidden">
                            <img src="<?php the_field('image_cont_left'); ?>" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-7 pd-cont-card-right-content">
                        <h2 class="pd-common-h2"><?php the_field('contact_form_title_cont'); ?></h2>
                        <p><?php the_field('main_description_contact'); ?></p>
                        <p><span><img src="<?php echo bloginfo('template_url'); ?>/assets/img/location-cont.png" class="pd-cont-card-icons"></span> <?php echo get_option('address'); ?></p>
                        <p><span><img src="<?php echo bloginfo('template_url'); ?>/assets/img/message-cont.png" class="pd-cont-card-icons"></span><?php echo get_option('email'); ?></p>
                        <p><span><img src="<?php echo bloginfo('template_url'); ?>/assets/img/fax-cont.png" class="pd-cont-card-icons"></span> <?php echo get_option('fax'); ?></p>
                        <p><span><img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone-cont.png" class="pd-cont-card-icons"></span><?php echo get_option('contact_number'); ?></p>

                        <div class="pd-footer-links pull-right">
                            <?php

                            $youtube = get_option('youtube_link');
                            $linkeding = get_option('linkedin');
                            $facebook = get_option('facebook_url');
                            $twitter = get_option('twitter_url');
                            $whatsap = get_option('whatsap_number');
                            $insta = get_option('insta_url');

                            ?>

                            <?php if ($linkeding) { ?>
                                <a href="<?php echo $linkeding; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png"></a>
                            <?php } ?>

                            <?php if ($facebook) { ?>
                                <a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"></a>
                            <?php } ?>

                            <?php if ($twitter) { ?>
                                <a href="<?php echo $twitter; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png"></a>
                            <?php } ?>

                            <?php if ($whatsap) { ?>
                                <a href="<?php echo $whatsap; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/whatsap.png"></a>
                            <?php } ?>

                            <?php if ($insta) { ?>
                                <a href="<?php echo $insta; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/insta.png"></a>
                            <?php } ?>

                            <?php if ($youtube) { ?>
                                <a href="<?php echo $youtube; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/youtube.png"></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="l-c-contact-sec l-c-p-t-b-5" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/cont-back.jpg);">
        <div class="container">
            <h2>Get a Free Quotation</h2>
            <p class="main-para">Lorem ipsum dolor sit amet, consectetur</p>

            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?>

        </div>
    </section>


</div>
<?php get_footer();  ?>