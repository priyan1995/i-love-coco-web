<?php get_header(); ?>
<div class="pd-product-single-wrapper">


    <section class="pd-product-sing-main-banner l-c-p-t-b-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="owl-carousel owl-theme" id="pd-product-slider-inner">

                        <?php
                        $image1 = get_field('slider_image_1_prod');
                        $image2 = get_field('slider_image_2_prod');
                        $image3 = get_field('slider_image_3_prod');
                        ?>

                        <?php if ($image1) { ?>
                            <div class="item">
                                <img src="<?php echo $image1; ?>">
                            </div>
                        <?php } ?>

                        <?php if ($image2) { ?>
                            <div class="item">
                                <img src="<?php echo  $image2; ?>">
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
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                </div>

                <?php
                $pakaging_type = get_field('pakaging_type');
                if ($pakaging_type) {
                ?>

                    <div class="col-lg-12" style="margin-top: 20px;">
                        <h5>Pakaging Type</h5>
                        <p><?php echo $pakaging_type; ?></p>
                    </div>
                <?php } ?>
            </div>

            <br>


            <div class="row">
                <div class="col-lg-7">
                    <table class="w-100">
                        <thead>
                            <tr>
                                <th>Average Quantitiy</th>
                                <th>Per 100g</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-5">

                    <?php
                    $certifications = get_field('certifications');
                    if ($certifications) {
                    ?>
                        <h4>Certifications available :</h4>
                        <p>GMP, HACCP, ISO 22000, BRC (Grade - AA), IFS (Score - 92.74%), Organic (EU, NOP-USDA, JAS, Naturland), Halal, Kosher, BSCI, Fairtrade, Fair TSA</p>

                    <?php } else {
                        echo '<p> No certifications to show. </p>';
                    } ?>


                    <?php
                    $information = get_field('important_information');
                    if ($information) {
                    ?>
                        <div class="pd-imp-inf">
                            <h4>Important information :</h4>
                            <?php echo $information; ?>
                        </div>
                    <?php } ?>


                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/coconut-pieces.png">

                </div>
            </div>


        </div>
    </section>

    <section class="pd-featured-prod l-c-p-t-b-5">
        <div class="container">

            <div class="owl-carousel owl-theme" id="pd-product-slider-inner-featured">
                <div class="item">
                    <div class="pd-prod-card-home text-center">
                        <img src="<?php the_field('image_prod'); ?>">
                        <h4><?php the_title(); ?></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, harum dolores? Provident magni quis.</p>
                        <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                    </div>
                </div>

                <div class="item">
                    <div class="pd-prod-card-home text-center">
                        <img src="<?php the_field('image_prod'); ?>">
                        <h4><?php the_title(); ?></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, harum dolores? Provident magni quis.</p>
                        <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                    </div>
                </div>

                <div class="item">
                    <div class="pd-prod-card-home text-center">
                        <img src="<?php the_field('image_prod'); ?>">
                        <h4><?php the_title(); ?></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, harum dolores? Provident magni quis.</p>
                        <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                    </div>
                </div>

                <div class="item">
                    <div class="pd-prod-card-home text-center">
                        <img src="<?php the_field('image_prod'); ?>">
                        <h4><?php the_title(); ?></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, harum dolores? Provident magni quis.</p>
                        <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                    </div>
                </div>

                <div class="item">
                    <div class="pd-prod-card-home text-center">
                        <img src="<?php the_field('image_prod'); ?>">
                        <h4><?php the_title(); ?></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, harum dolores? Provident magni quis.</p>
                        <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
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
            <h2>Get a Free Quotation</h2>
            <p class="main-para">Lorem ipsum dolor sit amet, consectetur</p>

            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?>

        </div>
    </section>


</div>
<?php get_footer(); ?>