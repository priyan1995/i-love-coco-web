<?php get_header(); ?>

<section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php echo bloginfo('template_url'); ?>/assets/img/abt-banner.png')">
    <div class="container">
        <div class="pd-breadcrumb text-center">
        </div>
    </div>
</section>


<section class="pd-blog-singel-inner l-c-p-t-b-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pd-main-image">
                <img src="<?php the_field('image_blog'); ?>">
            </div>
            <div class="col-lg-6">
                <h3><?php the_title(); ?></h3>
                <div class="pd-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/coconut-pieces.png'; ?>" class="pd-blog-single-bottom">
</section>


<?php get_footer(); ?>