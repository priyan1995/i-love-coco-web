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
					<a href="#contact-bottom-form" class="pd-free-quot-link">Get a Freee Quotation</a>

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
                    <table class="w-100 pd-ingred-tbl">
                        <thead>
                            <tr>
                                <th>Average Quantitiy</th>
                                <th>Per 100g</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $label = get_field('label_1');
                            $label2 = get_field('label_2');
                            $label3 = get_field('label_3');
                            $label4 = get_field('label_4');
                            $label5 = get_field('label_5');
                            $label6 = get_field('label_6');
                            $label7 = get_field('label_7');
                            $label8 = get_field('label_8');
                            $label9 = get_field('label_9');
                            $label10 = get_field('label_10');
                            $label11 = get_field('label_11');
                            $label12 = get_field('label_12');
                            $label13 = get_field('label_13');
                            $label14 = get_field('label_14');
                            $label15 = get_field('label_15');
                            $label16 = get_field('label_16');
                            $label17 = get_field('label_17');

                            $value1 = get_field('value_1');
                            $value2 = get_field('value_2');
                            $value3 = get_field('value_3');
                            $value4 = get_field('value_4');
                            $value5 = get_field('value_5');
                            $value6 = get_field('value_6');
                            $value7 = get_field('value_7');
                            $value8 = get_field('value_8');
                            $value9 = get_field('value_9');
                            $value10 = get_field('value_10');
                            $value11 = get_field('value_11');
                            $value12 = get_field('value_12');
                            $value13 = get_field('value_13');
                            $value14 = get_field('value_14');
                            $value15 = get_field('value_15');
                            $value16 = get_field('value_16');
                            $value17 = get_field('value_17');


                            ?>

                            <?php if ($label &&  $value1) { ?>
                                <tr>
                                    <td><?php echo $label; ?></td>
                                    <td><?php echo $value1; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label2 &&  $value2) { ?>
                                <tr>
                                    <td><?php echo $label2; ?></td>
                                    <td><?php echo $value2; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label3 &&  $value3) { ?>
                                <tr>
                                    <td><?php echo $label3; ?></td>
                                    <td><?php echo $value3; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label4 &&  $value4) { ?>
                                <tr>
                                    <td><?php echo $label4; ?></td>
                                    <td><?php echo $value4; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label5 &&  $value5) { ?>
                                <tr>
                                    <td><?php echo $label5; ?></td>
                                    <td><?php echo $value5; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label6 &&  $value6) { ?>
                                <tr>
                                    <td><?php echo $label6; ?></td>
                                    <td><?php echo $value6; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label7 &&  $value7) { ?>
                                <tr>
                                    <td><?php echo $label7; ?></td>
                                    <td><?php echo $value7; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label8 &&  $value8) { ?>
                                <tr>
                                    <td><?php echo $label8; ?></td>
                                    <td><?php echo $value8; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label9 &&  $value9) { ?>
                                <tr>
                                    <td><?php echo $label9; ?></td>
                                    <td><?php echo $value9; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label10 &&  $value10) { ?>
                                <tr>
                                    <td><?php echo $label10; ?></td>
                                    <td><?php echo $value10; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label11 &&  $value11) { ?>
                                <tr>
                                    <td><?php echo $label11; ?></td>
                                    <td><?php echo $value11; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label12 &&  $value12) { ?>
                                <tr>
                                    <td><?php echo $label12; ?></td>
                                    <td><?php echo $value12; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label13 &&  $value13) { ?>
                                <tr>
                                    <td><?php echo $label13; ?></td>
                                    <td><?php echo $value13; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label14 &&  $value14) { ?>
                                <tr>
                                    <td><?php echo $label14; ?></td>
                                    <td><?php echo $value14; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label15 &&  $value15) { ?>
                                <tr>
                                    <td><?php echo $label15; ?></td>
                                    <td><?php echo $value15; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label16 &&  $value16) { ?>
                                <tr>
                                    <td><?php echo $label16; ?></td>
                                    <td><?php echo $value16; ?></td>
                                </tr>
                            <?php } ?>

                            <?php if ($label17 &&  $value17) { ?>
                                <tr>
                                    <td><?php echo $label17; ?></td>
                                    <td><?php echo $value17; ?></td>
                                </tr>
                            <?php } ?>


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


                    <img class="pd-prod-inner-back" src="<?php echo bloginfo('template_url'); ?>/assets/img/coconut-pieces.png" style="width: 95%;">

                </div>
            </div>


        </div>
    </section>

    <section class="pd-featured-prod l-c-p-t-b-5">
        <div class="container">

            <div class="owl-carousel owl-theme" id="pd-product-slider-inner-featured">

                <?php
                $featured_prod  = new WP_Query(array("post_type" => "products", "order" => "DESC","post_per_page"=>10));
                if ($featured_prod->have_posts()) :
                    while ($featured_prod->have_posts()) :
                        $featured_prod->the_post();

                ?>
                        <div class="item">
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
                ?>

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


    <section class="l-c-contact-sec l-c-p-t-b-5" id="contact-bottom-form" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/cont-back.jpg);">
        <div class="container">
            <h2>Get a Free Quotation</h2>
            <p class="main-para">Lorem ipsum dolor sit amet, consectetur</p>

            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form home"]'); ?>

        </div>
    </section>


</div>




<?php get_footer(); ?>