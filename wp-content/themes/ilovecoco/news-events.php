<?php
/*
Template Name: News events
*/

get_header();
?>

<div class="pd-about-wrapper">

    <section class="pd-about-banner-main pd-inner-banner" style="background-image:url('<?php echo bloginfo('template_url'); ?>/assets/img/abt-banner.png')">
        <div class="container">
            <div class="pd-breadcrumb text-center">
                <h3 data-aos="fade-up" data-aos-duration="500">Blog</h3>
                <a href="<?php echo site_url(); ?>" data-aos="fade-up" data-aos-duration="800">Home / </a><span data-aos="fade-up" data-aos-duration="800">Blog</span>
            </div>
        </div>
    </section>

    <section class="pd-blog-section  l-c-p-t-b-5">
        <div class="container">
            <div class="row pd-pad-t-b-10">

                <?php
                $x = 500;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $blog  = new WP_Query(array("post_type" => "blog", 'posts_per_page' => 4, 'paged' => $paged,));
                if ($blog->have_posts()) :
                    while ($blog->have_posts()) :
                        $blog->the_post();

                ?>

                        <div class="col-lg-6 pd-pad-bot-30"  data-aos="fade-up" data-aos-duration="<?php echo $x; ?>">
                            <div class="pd-n-e-card">
                                <div class="pd-overf-hidden">
                                    <img src="<?php the_field('image_blog'); ?>" class="pd-blog-img">
                                </div>
                                <div class="pd-content-n-e">
                                    <p><?php the_field('date_blog'); ?> | <?php the_field('tag_blog'); ?></p>
                                    <h4><?php the_title(); ?></h4>
                                    <p style="margin-bottom: 20px;" class="pd-min-height"><?php the_field('short_description_blog'); ?></p>
                                    <div class="pd-flex">
                                        <a href="<?php the_permalink(); ?>" class="hover-green">Read More</a>
                                        <div class="pd-links">

                                            <?php
                                            $facebook = get_field('facebook_link_blog');
                                            $twitter = get_field('twitter_link_blog');
                                            $linkedin = get_field('linkedin_link_blog');
                                            ?>

                                            <?php if ($facebook) { ?>
                                                <a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png"></a>
                                            <?php } ?>
                                            <?php if ($twitter) { ?>
                                                <a href="<?php echo $twitter; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"></a>
                                            <?php } ?>
                                            <?php if ($linkedin) { ?>
                                                <a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png"></a>
                                            <?php } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                 $x = $x+500;
                    endwhile;
                endif; ?>

                <div class="col-lg-12">
                    <?php
                    $total_pages = $blog->max_num_pages;

                    if ($total_pages > 1) {

                        $current_page = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('« prev'),
                            'next_text'    => __('next »'),
                        ));
                    }

                    wp_reset_query();
                    ?>
                </div>

            </div>

        </div>
    </section>


</div>




<?php get_footer();  ?>