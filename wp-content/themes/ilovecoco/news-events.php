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
                <h3>Blog</h3>
                <a href="">Home / </a><span>Blog</span>
            </div>
        </div>
    </section>

    <section class="pd-blog-section  l-c-p-t-b-5">
        <div class="container">
            <div class="row pd-pad-t-b-10">

                <div class="col-lg-6 pd-pad-bot-30">
                    <div class="pd-n-e-card">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/n-e-post-1.png" class="pd-blog-img">
                        <div class="pd-content-n-e">
                            <p>July 02, 2020 | Lorem Ipsum</p>
                            <h4>Healthy benifits of eating coconuts</h4>
                            <p style="margin-bottom: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, expedita enim repellendus in facilis officia aut consectetur eos modi repellat ipsum voluptas recusandae, exercitationem cum error rerum esse doloribus sunt.</p>
                            <div class="pd-flex">
                                <a href="" class="hover-green">Read More</a>
                                <div class="pd-links">
                                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png"></a>
                                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"></a>
                                    <a href="" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png"></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
    </section>


</div>




<?php get_footer();  ?>