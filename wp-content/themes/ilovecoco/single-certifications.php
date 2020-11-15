<?php

get_header();
?>

<div class="pd-cert-inner-wrapper">

    <section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php echo bloginfo('template_url'); ?>/assets/img/abt-banner.png')">
        <div class="container">
            <div class="pd-breadcrumb text-center">
                <h3><?php the_title(); ?></h3>
            </div>
        </div>
    </section>
    <section class="pd-cert-inner-sec l-c-p-t-b-5">
        <div class="container">
            <div class="row pd-aligned-center">
                <div class="col-lg-4">
                <img src="<?php the_field('image_cert'); ?>" >
                </div>
                <div class="col-lg-8">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>

</div>


<?php get_footer(); ?>