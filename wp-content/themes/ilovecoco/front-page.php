<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<!-- <section class="l-c-banner" style="background-image:url(<?php echo bloginfo('template_url'); ?>/assets/img/banner.jpg);">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section> -->

<!-- main slider -->
<section class="pd-main-slider">
    <div class="slider-main-img">
        <video autoplay muted loop id="myVideo">
            <source src="<?php the_field('banner_video'); ?>" type="video/mp4">
        </video>
    </div>
</section>

<section class="l-c-abt-sec l-c-p-t-b-5 pad-b-5 pd-overf-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="500">
                <div class="owl-carousel owl-theme" id="pd-abt-main-slider">

                    <?php

                    $image1 = get_field('slider_image_1_sec_1');
                    $image2 = get_field('slider_image_2_sec_1');
                    $image3 = get_field('slider_image_3_sec_2');

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
            <div class="col-lg-6">
                <h3 data-aos="fade-up" data-aos-duration="500"><?php the_field('main_title_sec_1') ?></h3>
                <h4 data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_title_sec_1'); ?></h4>
                <div data-aos="fade-up" data-aos-duration="1500"><?php the_field('description_sec_1'); ?></div>
            </div>
        </div>
    </div>
</section>

<section class="l-c-product-sec l-c-p-t-b-5">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('heading_product_tab'); ?></h2>
        <p class="main-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_heading_product_tab'); ?></p>



        <div class="pd-product-tab-home">

            <div class="tab-content" id="nav-tabContent">

                <!-- ==== coconutmilk tab -->
                <div class="tab-pane fade show active" id="nav-coconut_milk" role="tabpanel" aria-labelledby="nav-coconut_milk-tab">
                    <div class="row">

                        <?php
                        $products_coco_milk  = new WP_Query(array("taxonomy" => "product_categories", "term" => "coconut_milk", "posts_per_page" => "8"));
                        if ($products_coco_milk->have_posts()) :
                            while ($products_coco_milk->have_posts()) :
                                $products_coco_milk->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== coconutmilk chips -->
                <div class="tab-pane fade" id="coconut_chips" role="tabpanel" aria-labelledby="coconut_chips-tab">
                    <div class="row">

                        <?php
                        $products_coco_chips  = new WP_Query(array("taxonomy" => "product_categories", "term" => "coconut_chips", "posts_per_page" => "8"));
                        if ($products_coco_chips->have_posts()) :
                            while ($products_coco_chips->have_posts()) :
                                $products_coco_chips->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== coconut cream -->
                <div class="tab-pane fade" id="coconut_cream" role="tabpanel" aria-labelledby="coconut_cream-tab">
                    <div class="row">

                        <?php
                        $products_coco_cream  = new WP_Query(array("taxonomy" => "product_categories", "term" => "coconut_cream", "posts_per_page" => "8"));
                        if ($products_coco_cream->have_posts()) :
                            while ($products_coco_cream->have_posts()) :
                                $products_coco_cream->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== coconut milk -->
                <div class="tab-pane fade" id="coconut_milk" role="tabpanel" aria-labelledby="coconut_milk-tab">
                    <div class="row">

                        <?php
                        $products_coco_cream  = new WP_Query(array("taxonomy" => "product_categories", "term" => "coconut_milk", "posts_per_page" => "8"));
                        if ($products_coco_cream->have_posts()) :
                            while ($products_coco_cream->have_posts()) :
                                $products_coco_cream->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== coconut milk -->
                <div class="tab-pane fade" id="coconut_oil" role="tabpanel" aria-labelledby="coconut_oil-tab">
                    <div class="row">

                        <?php
                        $products_coco_cream  = new WP_Query(array("taxonomy" => "product_categories", "term" => "coconut_oil", "posts_per_page" => "8"));
                        if ($products_coco_cream->have_posts()) :
                            while ($products_coco_cream->have_posts()) :
                                $products_coco_cream->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== coconut milk -->
                <div class="tab-pane fade" id="coconut_water" role="tabpanel" aria-labelledby="coconut_water-tab">
                    <div class="row">

                        <?php
                        $products_coco_cream  = new WP_Query(array("taxonomy" => "product_categories", "term" => "coconut_water", "posts_per_page" => "8"));
                        if ($products_coco_cream->have_posts()) :
                            while ($products_coco_cream->have_posts()) :
                                $products_coco_cream->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== coconut butter -->
                <div class="tab-pane fade" id="coconut_butter" role="tabpanel" aria-labelledby="coconut_butter-tab">
                    <div class="row">

                        <?php
                        $products_coco_cream  = new WP_Query(array("taxonomy" => "product_categories", "term" => "coconut_butter", "posts_per_page" => "8"));
                        if ($products_coco_cream->have_posts()) :
                            while ($products_coco_cream->have_posts()) :
                                $products_coco_cream->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== bulk -->
                <div class="tab-pane fade" id="buy-in-bulk" role="tabpanel" aria-labelledby="buy-in-bulk-tab">
                    <div class="row">

                        <?php
                        $products_coco_cream  = new WP_Query(array("taxonomy" => "product_categories", "term" => "buy-in-bulk", "posts_per_page" => "8"));
                        if ($products_coco_cream->have_posts()) :
                            while ($products_coco_cream->have_posts()) :
                                $products_coco_cream->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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

                <!-- ==== Organic Aseptic Coconut -->
                <div class="tab-pane fade" id="organic-aseptic-coconut" role="tabpanel" aria-labelledby="organic-aseptic-coconut-tab">
                    <div class="row">

                        <?php
                        $products_coco_cream  = new WP_Query(array("taxonomy" => "product_categories", "term" => "organic-aseptic-coconut", "posts_per_page" => "8"));
                        if ($products_coco_cream->have_posts()) :
                            while ($products_coco_cream->have_posts()) :
                                $products_coco_cream->the_post();

                        ?>
                                <div class="col-lg-3">
                                    <div class="pd-prod-card-home text-center">
                                        <img src="<?php the_field('image_prod'); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('short_description_prod'); ?></p>
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



            </div>


            <ul class="row nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="1500">

                <?php

                $terms = get_terms(array(
                    'taxonomy' => 'product_categories',
                    'hide_empty' => false,
                    'post_type' => 'products'
                ));

                foreach ($terms as $term) {
                    $term_id = $term->id;
                    $category = $term->name;
                    $category_image = get_field('category_icon', $term);
                    $category_slug = $term->slug;

                ?>


                    <li class="col-lg-3 nav-item">
                        <a class="nav-link <?php if ($category_slug == 'coconut_milk') {
                                                echo 'active show';
                                            } ?>" id="<?php echo $category_slug; ?>-tab" data-toggle="tab" href="#<?php echo $category_slug; ?>" role="tab" aria-controls="<?php echo $category_slug; ?>" aria-selected="true">

                            <div class="pd-cat-box">
                                <h4><?php echo  $category; ?></h4>
                            </div>
                        </a>
                    </li>
                <?php } ?>

            </ul>
        </div>

    </div>
</section>

<section class="l-c-certificate-sec l-c-p-t-b-5 pad-t-5">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('heading_certification_tab'); ?></h2>
        <p data-aos="fade-up" data-aos-duration="800"><?php the_field('heading_sub_heading'); ?></p>

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


<section class="l-c-u-tube-video-sec l-c-p-t-b-5" style="padding-bottom: 0;">
    <div class="pd-win-win-sec-video">
        <div class="video-background">
            <div class="video-foreground">
                <iframe src="<?php the_field('video_url'); ?>" frameborder="0" allowfullscreen style="background-color:#ff7600"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="l-c-news-events l-c-p-t-b-5">
    <div class="container">

        <h2 class="text-center" data-aos="fade-up" data-aos-duration="500"><?php the_field('title_blog'); ?></h2>
        <p class="text-center para-main" data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_heading_blog'); ?></p>

        <div class="owl-carousel owl-theme" id="pd-n-e-slider">

            <?php
            $blog_home  = new WP_Query(array("post_type" => "blog", "order" => "DESC"));
            if ($blog_home->have_posts()) :
                while ($blog_home->have_posts()) :
                    $blog_home->the_post();

            ?>


                    <div class="item">

                        <!-- <div class="col-lg-6 pad-r-0">
                            <div class="pd-cert-card">
                                <div class="pd-img-top">
                                    <img src="<?php //echo bloginfo('template_url'); 
                                                ?>/assets/img/n-e-post-1.png">
                                </div>
                                <div class="pd-content-card">
                                    <h4>Japanese organic Certification</h4>
                                    <p style="height: 68px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                                    <a href="" class="hover-green">Read More</a>
                                </div>
                            </div>
                        </div> -->

                        <div class="pad-0">
                            <div class="pd-cert-card">
                                <div class="pd-img-top">
                                    <img src="<?php the_field('image_blog'); ?>">
                                    <h4 class="pd-positioned-heading-card"><?php the_title(); ?></h4>
                                </div>
                                <div class="pd-content-card">

                                    <p><?php the_field('short_description_blog'); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                                </div>
                            </div>
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
        <h2 data-aos="fade-up" data-aos-duration="500"><?php the_field('title_contact'); ?></h2>
        <p class="main-para" data-aos="fade-up" data-aos-duration="800"><?php the_field('sub_heading_contact'); ?></p>

        <div data-aos="fade-up" data-aos-duration="1500"><?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?></div>

    </div>
</section>








<?php
get_footer();

?>