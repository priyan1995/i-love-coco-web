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
                <h3 data-aos="fade-up" data-aos-duration="500">Sustainability</h3>
                <a href="<?php echo site_url(); ?>" data-aos="fade-up" data-aos-duration="800">Home / </a><span data-aos="fade-up" data-aos-duration="800">Sustainability</span>
            </div>
        </div>
    </section>


    <section class="pd-sustainability-section  l-c-p-t-b-5">
        <div class="container">

            <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('main_title_01_csr'); ?></h2>
            <p class="main-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_title_csr_1'); ?></p>
            <p class="text-center pd-pad-bot-30" data-aos="fade-up" data-aos-duration="1500"><?php the_field('main_description_01_csr'); ?></p>


            <div class="row">
                <?php
                $y = 500;
                $x = 0;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $FTA  = new WP_Query(array("post_type" => "fair_trade_activity", 'posts_per_page' => 2, 'paged' => $paged,));
                if ($FTA->have_posts()) :
                    while ($FTA->have_posts()) :
                        $FTA->the_post();

                ?>


                        <div class="col-lg-6 pd-pad-bot-30 pd-m-b-25" data-aos="fade-up" data-aos-duration="<?php echo $y; ?>">
                            <div class="pd-n-e-card">

                                <div class="owl-carousel owl-theme" id="pd-fair-trade-slider<?php echo $x; ?>">

                                    <?php
                                    $image_1_fta = get_field('image_1_fta');
                                    $image_2_fta = get_field('image_2_fta');
                                    $image_3_fta = get_field('image_3_fta');
                                    $image_4_fta = get_field('image_4_fta');
                                    $image_5_fta = get_field('image_5_fta');
                                    ?>


                                    <?php if ($image_1_fta) { ?>

                                        <div class="item">
                                            <img src="<?php echo $image_1_fta; ?>" class="pd-sustainability-img">
                                        </div>

                                    <?php } ?>

                                    <?php if ($image_2_fta) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_2_fta; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>

                                    <?php if ($image_3_fta) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_3_fta; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>

                                    <?php if ($image_4_fta) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_4_fta; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>

                                    <?php if ($image_5_fta) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_5_fta; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>



                                </div>


                                <div class="pd-content-n-e">
                                    <p><?php the_field('date_fta'); ?> | <?php the_field('event_tag_fta'); ?></p>
                                    <h4><?php the_title(); ?></h4>
                                    <div class="pd-desc" style="margin-bottom: 20px;"><?php the_content(); ?></div>

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

                <?php
                        $x++;
                    endwhile;
                endif;
                ?>
                <div class="col-lg-12">
                    <?php
                    $total_pages = $FTA->max_num_pages;

                    if ($total_pages > 1) {

                        $current_page = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('« prev'),
                            'next_text'    => __('next »'),
                        ));
                    }

                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="pd-f-t-section  l-c-p-t-b-5">
        <div class="container">

            <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('main_title_02_csr'); ?></h2>
            <p class="main-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_title_csr_2'); ?></p>
            <p class="text-center pd-pad-bot-30" data-aos="fade-up" data-aos-duration="1500"><?php the_field('main_description_02_csr'); ?></p>


            <div class="row">
                <?php
                $z = 500;
                $y = 0;
                $paged2 = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $csr  = new WP_Query(array("post_type" => "csr", 'posts_per_page' => 2, 'paged' => $paged2,));
                if ($csr->have_posts()) :
                    while ($csr->have_posts()) :
                        $csr->the_post();

                ?>


                        <div class="col-lg-6 pd-pad-bot-30 pd-m-b-25" data-aos="fade-up" data-aos-duration="<?php echo $z; ?>">
                            <div class="pd-n-e-card">
                                <div class="owl-carousel owl-theme" id="pd-csr-slider<?php echo $y; ?>">

                                    <?php
                                    $image_1_csr = get_field('image_1_csr');
                                    $image_2_csr = get_field('image_2_csr');
                                    $image_3_csr = get_field('image_3_csr');
                                    $image_4_csr = get_field('image_4_csr');
                                    $image_5_csr = get_field('image_5_csr');
                                    ?>


                                    <?php if ($image_1_csr) { ?>

                                        <div class="item">
                                            <img src="<?php echo $image_1_csr; ?>" class="pd-sustainability-img">
                                        </div>

                                    <?php } ?>

                                    <?php if ($image_2_csr) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_2_csr; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>

                                    <?php if ($image_3_csr) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_3_csr; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>

                                    <?php if ($image_4_csr) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_4_csr; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>

                                    <?php if ($image_5_csr) { ?>
                                        <div class="item">
                                            <img src="<?php echo $image_5_csr; ?>" class="pd-sustainability-img">
                                        </div>
                                    <?php } ?>


                                </div>
                                <div class="pd-content-n-e">
                                    <p><?php the_field('date_csr'); ?> | <?php the_field('event_tag_csr'); ?></p>
                                    <h4><?php the_title(); ?></h4>
                                    <div class="pd-desc" style="margin-bottom: 20px;"><?php the_content(); ?></div>

                                </div>
                            </div>
                        </div>

                        <script>
                            jQuery(document).ready(function($) {
                                $('#pd-csr-slider<?php echo $y; ?>').owlCarousel({
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

                <?php
                        $y++;
                    endwhile;
                endif;

                ?>
                <div class="col-lg-12">
                    <?php
                    $total_pages2 = $csr->max_num_pages;

                    if ($total_pages2 > 1) {

                        $current_page2 = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page2,
                            'total' => $total_pages2,
                            'prev_text'    => __('« prev'),
                            'next_text'    => __('next »'),
                        ));
                    }
                    wp_reset_query();
                    ?>

                </div>

            </div>
        </div>
    </section>


    <section class="l-c-contact-sec l-c-p-t-b-5" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/cont-back.jpg);">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('contact_form_title_csr'); ?></h2>
            <p class="main-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('contact_from_subtitle_csr'); ?></p>

            <div data-aos="fade-up" data-aos-duration="1500"><?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?></div>

        </div>
    </section>

</div>


<?php get_footer();  ?>