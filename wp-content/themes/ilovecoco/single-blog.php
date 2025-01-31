<?php 
get_header(); 
?>

<section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php echo bloginfo('template_url'); ?>/assets/img/abt-banner.png')">
    <div class="container">
        <div class="pd-breadcrumb text-center">
        </div>
    </div>
</section>


<section class="pd-blog-singel-inner l-c-p-t-b-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pd-main-image text-center">
                <img src="<?php the_field('image_blog'); ?>" data-aos="fade-up" data-aos-duration="500">
            </div>
            <div class="col-lg-12 text-center" style="margin-top:20px">
                <h3 data-aos="fade-up" data-aos-duration="800"><?php the_title(); ?></h3>
                <div class="pd-content" data-aos="fade-up" data-aos-duration="1500">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/coconut-pieces.png'; ?>" class="pd-blog-single-bottom" >
</section>


<?php get_footer(); ?>