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

<section class="l-c-abt-sec l-c-p-t-b-3">
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

<section class="l-c-product-sec l-c-p-t-b-3">
    <div class="container">
        <h2>Buy in Bulks</h2>
        <p class="main-para">Lorem ipsum dolor sit amet, consectetur</p>



        <div class="pd-product-tab-home">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <?php

                    $terms = get_terms(array(
                        'taxonomy' => 'product_categories',
                        'hide_empty' => true,
                        'post_type' => 'products'
                    ));

                    foreach ($terms as $term) {
                        $slug = $term->slug;
                        $term_id = $term->id;
                        $category = $term->name;
                        $category_image = get_field('category_icon', $term);
                        $category_slug = $term->slug;

                    ?>

                        <a class="nav-item nav-link <?php if ($category_slug == 'coconut_milk') {
                                                        echo 'active';
                                                    } ?>" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo  $category; ?></a>


                        <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a> -->

                    <?php } ?>


                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">


                <?php
                $products_coco_milk = new WP_Query("taxonomy=product_categories&term=coconut_milk");
                if ($products_coco_milk->have_posts()) :
                    while ($products_coco_milk->have_posts()) :
                        $products_coco_milk->the_post();

                ?>
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <?php the_title(); ?>
                            <img src="<?php the_field('image_prod'); ?>">

                        </div>

                <?php
                    endwhile;
                endif;
                ?>

                <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div> -->
            </div>
        </div>




    </div>
</section>

<section class="l-c-certificate-sec l-c-p-t-b-3">
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
                    <a href="">Read More</a>
                </div>
            </div>

            <div class="item text-center">
                <div class="pd-cert-card">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-3.png">
                    <h4>Japanese organic <br>
                        Certification</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                    <a href="">Read More</a>
                </div>
            </div>
            <div class="item text-center">
                <div class="pd-cert-card">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-2.png">
                    <h4>Japanese organic <br>
                        Certification</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                    <a href="">Read More</a>
                </div>
            </div>

            <div class="item text-center">
                <div class="pd-cert-card">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-1.png">
                    <h4>Japanese organic <br>
                        Certification</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                    <a href="">Read More</a>
                </div>
            </div>
        </div>


    </div>

</section>


<section class="l-c-u-tube-video-sec l-c-p-t-b-3" style="padding-bottom: 0;">
    <div class="pd-win-win-sec-video">
        <div class="video-background">
            <div class="video-foreground">
                <iframe src="https://www.youtube.com/embed/9xwazD5SyVg?showinfo=0&rel=0&autoplay=0&loop=1" frameborder="0" allowfullscreen style="background-color:#ff7600"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="l-c-news-events l-c-p-t-b-3">
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
                                    <a href="">Read More</a>
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
                                    <a href="">Read More</a>
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
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            <?php } ?>


        </div>
    </div>
</section>



<section class="l-c-contact-sec l-c-p-t-b-3" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/cont-back.jpg);">
    <div class="container">
        <h2>Get a Free Quotation</h2>
        <p class="main-para">Lorem ipsum dolor sit amet, consectetur</p>

        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?>

    </div>
</section>








<?php
get_footer();

?>