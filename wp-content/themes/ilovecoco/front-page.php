<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<section class="l-c-banner" style="background-image:url(<?php echo bloginfo('template_url'); ?>/assets/img/banner.jpg);">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>

<section class="l-c-abt-sec l-c-p-t-b-5 pad-b-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme" id="pd-abt-main-slider">
                    <div class="item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/abt-main-img.png">
                    </div>
                    <div class="item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/abt-main-img.png">
                    </div>
                    <div class="item">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/abt-main-img.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3>I love coco</h3>
                <h4>Coconut products manufacturer
                    & wholesaler</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad culpa possimus ducimus? Autem qui vel, recusandae eos, officia dolorum doloremque iste, omnis aperiam numquam nihil. Quae doloremque similique recusandae commodi. Ad culpa possimus ducimus? Autem qui vel, recusandae eos, officia dolorum doloremque iste, omnis aperiam numquam nihil. Quae doloremque similique recusandae commodi</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad culpa possimus ducimus? Autem qui vel, recusandae eos, officia dolorum doloremque iste, omnis aperiam numquam nihil. </p>
            </div>
        </div>
    </div>
</section>

<section class="l-c-product-sec l-c-p-t-b-5" >
    <div class="container">
        <h2>Products</h2>
        <p class="main-para">Lorem ipsum dolor sit amet, consectetur</p>



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


            </div>


            <ul class="row nav nav-tabs" id="myTab" role="tablist">

                <?php

                $terms = get_terms(array(
                    'taxonomy' => 'product_categories',
                    'hide_empty' => true,
                    'post_type' => 'products'
                ));

                foreach ($terms as $term) {
                    $term_id = $term->id;
                    $category = $term->name;
                    $category_image = get_field('category_icon', $term);
                    $category_slug = $term->slug;

                ?>


                    <li class="col-lg-2 nav-item">
                        <a class="nav-link <?php if ($category_slug == 'coconut_milk') {
                                                echo 'active show';
                                            } ?>" id="<?php echo $category_slug; ?>-tab" data-toggle="tab" href="#<?php echo $category_slug; ?>" role="tab" aria-controls="<?php echo $category_slug; ?>" aria-selected="true">

                            <div class="pd-cat-box">
                                <img src="<?php echo $category_image; ?> ">
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
                    <a href="" class="hover-green">Read More</a>
                </div>
            </div>
        </div>


    </div>

</section>


<section class="l-c-u-tube-video-sec l-c-p-t-b-5" style="padding-bottom: 0;">
    <div class="pd-win-win-sec-video">
        <div class="video-background">
            <div class="video-foreground">
                <iframe src="https://www.youtube.com/embed/9xwazD5SyVg?showinfo=0&rel=0&autoplay=0&loop=1" frameborder="0" allowfullscreen style="background-color:#ff7600"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="l-c-news-events l-c-p-t-b-5">
    <div class="container">

        <h2 class="text-center">News and Events</h2>
        <p class="text-center para-main">Lorem ipsum dolor sit amet, consectetur</p>

        <div class="owl-carousel owl-theme" id="pd-n-e-slider">

            <?php


            for ($x = 0; $x <= 5; $x++) {

            ?>


                <div class="item">

                    <div class="row">

                        <div class="col-lg-6 pad-r-0">
                            <div class="pd-cert-card">
                                <div class="pd-img-top">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png">
                                </div>
                                <div class="pd-content-card">
                                    <h4>Japanese organic Certification</h4>
                                    <p style="height: 68px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                                    <a href="" class="hover-green">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 pad-0">
                            <div class="pd-cert-card">
                                <div class="pd-img-top">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png">
                                    <h4 class="pd-positioned-heading-card">Japanese organic Certification</h4>
                                </div>
                                <div class="pd-content-card">

                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                                    <a href="" class="hover-green">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 pad-0">
                            <div class="pd-cert-card">
                                <div class="pd-img-top">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png">
                                    <h4 class="pd-positioned-heading-card">Japanese organic Certification</h4>
                                </div>
                                <div class="pd-content-card">

                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                                    <a href="" class="hover-green">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            <?php } ?>


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








<?php
get_footer();

?>