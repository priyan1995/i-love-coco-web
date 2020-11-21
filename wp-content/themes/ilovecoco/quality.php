<?php
/*
Template Name: Quality page
*/

get_header();
?>


<section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php the_field('banner_image'); ?>'">
    <div class="container">
        <div class="pd-breadcrumb text-center">
            <h3 data-aos="fade-up" data-aos-duration="500">Quality</h3>
            <a href="<?php echo site_url() ?>" data-aos="fade-up" data-aos-duration="800">Home / </a><span data-aos="fade-up" data-aos-duration="500">Quantity</span>
        </div>
    </div>
</section>


<section class="pd-quality-main-cont l-c-abt-sec l-c-p-t-b-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="500">
                <div class="owl-carousel owl-theme" id="pd-mds-slider">

                    <?php

                    $image1 = get_field('image_1_mds');
                    $image2 = get_field('image_2_mds');
                    $image3 = get_field('image_3_mds');

                    ?>

                    <?php if ($image1) { ?>
                        <div class="item">
                            <img src="<?php echo $image1; ?>">
                        </div>
                    <?php } ?>

                    <?php if ($image2) { ?>
                        <div class="item">
                            <img src="<?php echo $image2; ?>">
                        </div>
                    <?php } ?>

                    <?php if ($image3) { ?>
                        <div class="item">
                            <img src="<?php echo $image3; ?>">
                        </div>
                    <?php } ?>

                </div>
                <p data-aos="fade-up" data-aos-duration="1500"><?php the_field('description_3'); ?></p>
            </div>
            <div class="col-lg-6">
                <h3 data-aos="fade-up" data-aos-duration="500"><?php the_field('Main_title_quality') ?></h3>
                <h4 data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_title_quality'); ?></h4>
                <p data-aos="fade-up" data-aos-duration="1500"><?php the_field('description_1'); ?></p>
                <p data-aos="fade-up" data-aos-duration="1500"><?php the_field('description_2'); ?></p>
                <br>
                <div class="owl-carousel owl-theme" id="pd-cert-slider-quality">

                    <?php
                    $certificates  = new WP_Query(array("post_type" => "certifications", "order" => "DESC"));
                    if ($certificates->have_posts()) :
                        while ($certificates->have_posts()) :
                            $certificates->the_post();

                    ?>

                            <div class="item text-center">
                                <div class="pd-cert-card">
                                    <img src="<?php the_field('image_cert'); ?>">
                                </div>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>

                </div>


            </div>
        </div>
    </div>

</section>


<section class="pd-mid-green  l-c-p-t-b-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pd-m-b-20">
                <div class="owl-carousel owl-theme" id="pd-mid-green-slider" data-aos="zoom-in" data-aos-duration="500" class="text-center">

                    <?php

                    $image1 = get_field('slider_image_mgs1');
                    $image2 = get_field('slider_image_mgs2');
                    $image3 = get_field('slider_image_mgs3');

                    ?>

                    <?php if ($image1) { ?>
                        <div class="item">
                            <img src="<?php echo $image1; ?>">
                        </div>
                    <?php } ?>

                    <?php if ($image2) { ?>
                        <div class="item">
                            <img src="<?php echo $image2; ?>">
                        </div>
                    <?php } ?>

                    <?php if ($image3) { ?>
                        <div class="item">
                            <img src="<?php echo $image3; ?>">
                        </div>
                    <?php } ?>

                </div>
            </div>
            <div class="col-lg-6 pd-m-b-20" data-aos="fade-up" data-aos-duration="500" class="text-center">
                <div><?php the_field('right_content_mgs'); ?></div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800" class="text-center">
                <div><?php the_field('left_content_mgs'); ?></div>
            </div>

            <div class="col-lg-6">
                <div class="pd-mid-green-img-t-1">
                    <img src="<?php the_field('right_sided_image_1_mgs'); ?>" class="w-100" data-aos="zoom-in" data-aos-duration="500" class="text-center">
                </div>
                <div class="pd-flex">
                    <div class="pd-mid-green-img-b-1">
                        <img src="<?php the_field('right_sided_image_2_mgs'); ?>" data-aos="zoom-in" data-aos-duration="800" class="text-center">
                    </div>
                    <div class="pd-mid-green-img-b-2">
                        <img src="<?php the_field('right_sided_image_3_mgs'); ?>" data-aos="zoom-in" data-aos-duration="1200" class="text-center">
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>


<section class="pd-quality-cert-sec  l-c-p-t-b-5">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="500" class="text-center"><?php the_field('title_certificate') ?></h2>
        <h4 data-aos="fade-up" data-aos-duration="800" class="text-center"><?php the_field('subtitle_certificate'); ?></h4>
        <div data-aos="fade-up" data-aos-duration="1500" style="margin-bottom: 20px;"><?php the_field('content_certificate_sec'); ?></div>

        <div class="row">


            <?php
            $z = 500;
            $y = 1;
            $paged2 = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $cert  = new WP_Query(array("post_type" => "certificates", 'posts_per_page' => 4, 'paged' => $paged2,));
            if ($cert->have_posts()) :
                while ($cert->have_posts()) :
                    $cert->the_post();

            ?>

                    <div class="pd-cert-card-2 <?php if ($y%2==1){ echo 'right-aligned-cert'; }else{ echo 'left-aligned-cert'; } ?>  " data-aos="fade-up" data-aos-duration="<?php echo $z; ?>" class="text-center">
                        <h5><?php the_title() ?></h5>
                        <div><?php the_content(); ?></div>
                        <img src="<?php the_field('image_certificate'); ?>">
                    </div>

                 
            <?php
                    $z = $z + 200;
                    $y++;
                endwhile;
            endif;

            ?>

            <div class="col-lg-12">
                <?php
                $total_pages2 = $cert->max_num_pages;

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









<?php get_footer(); ?>