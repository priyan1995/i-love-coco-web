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
                <h3 data-aos="fade-up" data-aos-duration="500">About Us</h3>
                <a href="<?php echo site_url() ?>" data-aos="fade-up" data-aos-duration="800">Home / </a><span data-aos="fade-up" data-aos-duration="500">About Us</span>
            </div>
        </div>
    </section>

    <section class="pd-about-main-inf l-c-p-t-b-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('main_title_abt'); ?></h2>
                    <h4 data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_title_abt'); ?></h4>
                    <p data-aos="fade-up" data-aos-duration="1500"><?php the_field('main_description_1'); ?></p>
                </div>
                <div class="col-lg-4">
                    <p data-aos="fade-up" data-aos-duration="500"><?php the_field('main_description_2'); ?></p>
                </div>
                <div class="col-lg-4">
                    <p data-aos="fade-up" data-aos-duration="1500"><?php the_field('main_description_3'); ?></p>
                </div>
            </div>
        </div>
    </section>


    <section class="pd-vision-misison-sec l-c-p-t-b-3" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/abt-back.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 data-aos="fade-up" data-aos-duration="500">Vision</h2>
                    <p class="pd-vision-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('vision_abt'); ?></p>
                </div>
                <div class="col-lg-6">
                    <h2 data-aos="fade-up" data-aos-duration="500">Mission</h2>
                    <p class="pd-vision-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('mission_abt'); ?></p>
                </div>
            </div>

            <div class="pd-direct-message-card">
                <div class="row">
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="800">
                        <img src="<?php the_field('directors_image_abt'); ?>">
                    </div>
                    <div class="col-lg-8" data-aos="fade-left" data-aos-duration="800">
                        <p><?php the_field('directors_message_abt'); ?></p>
                        <br>

                        <img src="<?php echo the_field('directors_signature_abt'); ?>" style="margin-bottom: 10px;">
                        <h5><?php the_field('directors_name_abt'); ?></h5>
                        <p><?php the_field('directors_position_abt'); ?></p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="pd-we-different-sec l-c-p-t-b-5">
        <div class="container">

            <h2><?php the_field('title_ww'); ?></h2>
            <p class="main-para"><?php the_field('description_ww'); ?></p>

            <!-- card -->
            <div class="row pd-aligned-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
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
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <h5><?php the_field('title_abt_card_1'); ?></h5>
                    <p><?php the_field('description_abt_card_1'); ?>
                    </p>

                </div>
            </div>

            <!-- card -->
            <div class="row pd-aligned-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <h5><?php the_field('title_abt_card_2'); ?></h5>
                    <p><?php the_field('description_abt_card_2'); ?> </p>

                </div>

                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
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
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
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
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <h5><?php the_field('title_abt_card_3'); ?></h5>
                    <p><?php the_field('description_abt_card_3'); ?></p>

                </div>
            </div>

            <!-- card -->
            <div class="row pd-aligned-center">

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <h5><?php the_field('title_abt_card_4'); ?></h5>
                    <p><?php the_field('description_abt_card_4'); ?></p>

                </div>


                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
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
			
			  <!-- card -->
            <div class="row pd-aligned-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <div class="owl-carousel owl-theme" id="pd-abt-slider-5">
                        <div class="item">
                            <img src="<?php the_field('slider_image_1_abt_card_5'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_2_abt_card_5'); ?>">
                        </div>
                        <div class="item">
                            <img src="<?php the_field('slider_image_3_abt_card_5'); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <h5><?php the_field('title_abt_card_5'); ?></h5>
                    <p><?php the_field('description_abt_card_5'); ?></p>

                </div>
            </div>

        </div>
    </section>


    <section class="l-c-certificate-sec l-c-p-t-b-5 pad-t-5">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('title_cert_abt'); ?></h2>
            <p data-aos="fade-up" data-aos-duration="800"><?php the_field('description_abt_cert'); ?></p>

            <div class="owl-carousel owl-theme" id="pd-cert-slider">
                <?php
                $certificates  = new WP_Query(array("post_type" => "certifications", "order" => "DESC"));
                if ($certificates->have_posts()) :
                    while ($certificates->have_posts()) :
                        $certificates->the_post();

                ?>
                        <div class="item text-center">
                            <div class="pd-cert-card">
                                <img src="<?php the_field('image_cert'); ?>">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_field('short_description_cert'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>

            </div>


        </div>

    </section>


    <section class="l-c-contact-sec l-c-p-t-b-5" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/cont-back.jpg);">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('title_contact_cert_abt'); ?></h2>
            <p class="main-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('description_cert_abt'); ?></p>

            <div data-aos="fade-up" data-aos-duration="1500"><?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?></div>

        </div>
    </section>



</div>

<?php get_footer();  ?>