<?php
/*
Template Name: About page
*/

get_header();
?>
<div class="pd-about-wrapper">

    <section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php the_field('main_banner_abt'); ?>'">
        <div class="container">
            <div class="pd-breadcrumb text-center">
                <h3>About Us</h3>
                <a href="">Home / </a><span>About Us</span>
            </div>
        </div>
    </section>

    <section class="pd-about-main-inf l-c-p-t-b-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2><?php the_field('main_title_abt'); ?></h2>
                    <h4><?php the_field('sub_title_abt'); ?></h4>
                    <p><?php the_field('main_description_1'); ?></p>
                </div>
                <div class="col-lg-4">
                    <p><?php the_field('main_description_2'); ?></p>
                </div>
                <div class="col-lg-4">
                    <p><?php the_field('main_description_3'); ?></p>
                </div>
            </div>
        </div>
    </section>


    <section class="pd-vision-misison-sec l-c-p-t-b-3" style="background-image: url(<?php  bloginfo('template_url'); ?>/assets/img/abt-back.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Vision</h2>
                    <p class="pd-vision-para"><?php  the_field('vision_abt'); ?></p>
                </div>
                <div class="col-lg-6">
                    <h2>Mission</h2>
                    <p class="pd-vision-para"><?php  the_field('mission_abt'); ?></p>
                </div>
            </div>

            <div class="pd-direct-message-card">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php  the_field('directors_image_abt'); ?>">
                    </div>
                    <div class="col-lg-8">
                        <p><?php  the_field('directors_message_abt'); ?></p>
                        <br>

                        <img src="<?php echo the_field('directors_signature_abt'); ?>" style="margin-bottom: 10px;">
                        <h5><?php  the_field('directors_name_abt'); ?></h5>
                        <p><?php the_field('directors_position_abt'); ?></p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="pd-we-different-sec l-c-p-t-b-5">
        <div class="container">

            <h2><?php  the_field('title_ww'); ?></h2>
            <p class="main-para"><?php  the_field('description_ww'); ?></p>

            <!-- card -->
            <div class="row pd-aligned-center">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme" id="pd-abt-slider-1">
                        <div class="item">
                            <img src="<?php the_field('slider_image_1_abt_card_1'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_2_abt_card_1'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_3_abt_card_1'); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5><?php the_field('title_abt_card_1'); ?></h5>
                    <p><?php the_field('description_abt_card_1'); ?>
                    </p>

                </div>
            </div>

            <!-- card -->
            <div class="row pd-aligned-center">
                <div class="col-lg-6">
                    <h5><?php the_field('title_abt_card_2'); ?></h5>
                    <p><?php the_field('description_abt_card_2'); ?> </p>

                </div>

                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme" id="pd-abt-slider-2">
                        <div class="item">
                            <img src="<?php the_field('slider_image_1_abt_card_2'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_2_abt_card_2'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_3_abt_card_2'); ?>">
                        </div>
                    </div>
                </div>

            </div>

            <!-- card -->
            <div class="row pd-aligned-center">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme" id="pd-abt-slider-3">
                        <div class="item">
                            <img src="<?php the_field('slider_image_1_abt_card_3'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_2_abt_card_3'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_3_abt_card_3'); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5><?php the_field('title_abt_card_3'); ?></h5>
                    <p><?php the_field('description_abt_card_3'); ?></p>

                </div>
            </div>

            <!-- card -->
            <div class="row pd-aligned-center">

                <div class="col-lg-6">
                    <h5><?php the_field('title_abt_card_4'); ?></h5>
                    <p><?php the_field('description_abt_card_4'); ?></p>

                </div>


                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme" id="pd-abt-slider-4">
                        <div class="item">
                            <img src="<?php the_field('slider_image_1_abt_card_4'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_2_abt_card_4'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_4_abt_card_3'); ?>">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="l-c-certificate-sec l-c-p-t-b-5 pad-t-5">
        <div class="container">
            <h2>Our Certifications</h2>
            <p>Lorem ipsum dolor sit amet, consectetur</p>

            <div class="owl-carousel owl-theme" id="pd-cert-slider">
                <div class="item text-center">
                    <div class="pd-cert-card">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-1.png">
                        <h4>Japanese organic <br>
                            Certification</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                        <a href="" class="hover-green">Read More</a>
                    </div>
                </div>

                <div class="item text-center">
                    <div class="pd-cert-card">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-3.png">
                        <h4>Japanese organic <br>
                            Certification</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                        <a href="" class="hover-green">Read More</a>
                    </div>
                </div>
                <div class="item text-center">
                    <div class="pd-cert-card">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-2.png">
                        <h4>Japanese organic <br>
                            Certification</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                        <a href="" class="hover-green">Read More</a>
                    </div>
                </div>

                <div class="item text-center">
                    <div class="pd-cert-card">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-1.png">
                        <h4>Japanese organic <br>
                            Certification</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                        <a href="" class="hover-green"> Read More</a>
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