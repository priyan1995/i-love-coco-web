<?php get_header();
$al_cat_slug = get_queried_object()->slug;
$al_cat_name = get_queried_object()->name;

$term = get_queried_object();
?>
<div class="pd-prod-cat-land-page-wrapper">
    <section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php echo bloginfo('template_url'); ?>/assets/img/abt-banner.png')">
        <div class="container">
            <div class="pd-breadcrumb text-center">

            </div>
        </div>
    </section>


    <section class="pd-prod-cat-sec l-c-p-t-b-5">

        <div class="container">
            <h1 class="text-center"> <?php echo $al_cat_name; ?></h1>
            <div class="text-center"> <?php echo term_description(); ?></div>

            <div class="category-menu-wrap">
                    <?php
                    wp_nav_menu(
                        array(
                            'depth'       => 100,
                            'theme_location'  => 'category',
                            'container_class' => 'false',
                            'container_id'    => 'categoryMenu',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'category-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                </div>




            <div class="row">



                <?php
                $products_category_looop  = new WP_Query(array("taxonomy" => "product_categories", "term" => $al_cat_slug, "posts_per_page" => "8"));
                if ($products_category_looop->have_posts()) :
                    while ($products_category_looop->have_posts()) :
                        $products_category_looop->the_post();
                ?>


                        <div class="col-lg-3">
                            <div class="pd-prod-card-home text-center">
                                <img src="<?php the_field('image_prod'); ?>">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_field('short_description_prod'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                            </div>

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>


    </section>



    <section class="l-c-certificate-sec l-c-p-t-b-5 pad-t-5 gray-back">
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






</div>

<?php get_footer(); ?>