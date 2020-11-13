<?php
/*
Template Name: Sustainability page
*/

get_header();
?>


<div class="pd-sustainability-wrapper">
    <section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php echo bloginfo('template_url'); ?>/assets/img/abt-banner.png')">
        <div class="container">
            <div class="pd-breadcrumb text-center">
                <h3>Sustainability</h3>
                <a href="">Home / </a><span>Sustainability</span>
            </div>
        </div>
    </section>


    <section class="pd-sustainability-section  l-c-p-t-b-5">
        <div class="container">

            <h2><?php the_field('main_title_01_csr'); ?></h2>
            <p class="main-para"><?php the_field('sub_title_csr_1'); ?></p>
            <p class="text-center pd-pad-bot-30"><?php the_field('main_description_01_csr'); ?></p>


            <div class="row">
                <?php for ($x = 0; $x <= 1; $x++) { ?>
                    <div class="col-lg-6 pd-pad-bot-30">
                        <div class="pd-n-e-card">

                            <div class="owl-carousel owl-theme" id="pd-fair-trade-slider<?php echo $x; ?>">
                                <div class="item">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png" class="pd-sustainability-img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png" class="pd-sustainability-img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png" class="pd-sustainability-img">
                                </div>
                            </div>


                            <div class="pd-content-n-e">
                                <p>July 02, 2020 | Lorem Ipsum</p>
                                <h4>Healthy benifits of eating coconuts</h4>
                                <p style="margin-bottom: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, expedita enim repellendus in facilis officia aut consectetur eos modi repellat ipsum voluptas recusandae, exercitationem cum error rerum esse doloribus sunt.</p>

                            </div>
                        </div>

                        <script>
                            jQuery(document).ready(function($) {
                                $('#pd-fair-trade-slider<?php echo $x; ?>').owlCarousel({
                                    loop: true,
                                    margin: 5,
                                    nav: true,
                                    dots: false,
                                    autoplay: false,
                                    autoplayTimeout: 3000,
                                    autoplayHoverPause: true,
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        600: {
                                            items: 1
                                        },
                                        1000: {
                                            items: 1
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>

                <?php } ?>

            </div>
    </section>

    <section class="pd-f-t-section  l-c-p-t-b-5">
        <div class="container">

            <h2><?php the_field('main_title_02_csr'); ?></h2>
            <p class="main-para"><?php the_field('sub_title_csr_2'); ?></p>
            <p class="text-center pd-pad-bot-30"><?php the_field('main_description_02_csr'); ?></p>


            <div class="row">
                <?php for ($x = 0; $x <= 3; $x++) { ?>
                    <div class="col-lg-6 pd-pad-bot-30">
                        <div class="pd-n-e-card">
                            <div class="owl-carousel owl-theme" id="pd-csr-slider<?php echo $x; ?>">
                                <div class="item">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png" class="pd-sustainability-img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png" class="pd-sustainability-img">
                                </div>
                                <div class="item">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png" class="pd-sustainability-img">
                                </div>
                            </div>
                            <div class="pd-content-n-e">
                                <p>July 02, 2020 | Lorem Ipsum</p>
                                <h4>Healthy benifits of eating coconuts</h4>
                                <p style="margin-bottom: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, expedita enim repellendus in facilis officia aut consectetur eos modi repellat ipsum voluptas recusandae, exercitationem cum error rerum esse doloribus sunt.</p>

                            </div>
                        </div>
                    </div>

                    <script>
                        jQuery(document).ready(function($) {
                            $('#pd-csr-slider<?php echo $x; ?>').owlCarousel({
                                loop: true,
                                margin: 5,
                                nav: true,
                                dots: false,
                                autoplay: false,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    600: {
                                        items: 1
                                    },
                                    1000: {
                                        items: 1
                                    }
                                }
                            });
                        });
                    </script>

                <?php } ?>




            </div>
    </section>


    <section class="l-c-contact-sec l-c-p-t-b-5" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/cont-back.jpg);">
        <div class="container">
            <h2><?php the_field('contact_form_title_csr'); ?></h2>
            <p class="main-para"><?php the_field('contact_from_subtitle_csr'); ?></p>

            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?>

        </div>
    </section>

</div>


<?php get_footer();  ?>