<?php get_header(); ?>
<div class="pd-product-single-wrapper">


    <section class="pd-product-sing-main-banner l-c-p-t-b-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <div class="owl-carousel owl-theme" id="pd-product-slider-inner">
                        <div class="item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/abt-slider-1.png">
                        </div>
                        <div class="item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/abt-slider-1.png">
                        </div>
                        <div class="item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/abt-slider-1.png">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h2><?php the_title(); ?></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dignissimos odio iure ipsa molestias minima eaque, corrupti tempore. Consequatur accusamus sequi ex, dolor nisi at corrupti eligendi ipsa sed. Ut.Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dignissimos odio iure ipsa molestias minima eaque, corrupti tempore. Consequatur accusamus sequi ex, dolor nisi at corrupti eligendi ipsa sed. Ut.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dignissimos odio iure ipsa molestias minima eaque, corrupti tempore. Consequatur accusamus sequi ex, dolor nisi at corrupti eligendi ipsa sed. Ut.</p>

                </div>

                <div class="col-lg-12" style="margin-top: 20px;">
                    <h5>Pakaging Type</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum itaque amet tempore quos repellendus, alias nemo. Optio ipsum id inventore deserunt ea. Cupiditate distinctio, mollitia tempore doloremque minima magni magnam!</p>
                </div>
            </div>


        </div>
    </section>

    <section class="pd-featured-prod l-c-p-t-b-5" >
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
<?php get_footer(); ?>