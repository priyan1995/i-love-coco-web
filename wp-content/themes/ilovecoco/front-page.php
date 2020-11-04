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

<section class="l-c-product-sec">

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

<!-- <section class="l-c-news-events l-c-p-t-b-3">
    <div class="container">
        
        <h2 class="text-center">News and Events</h2>
        <p class="text-center para-main">Lorem ipsum dolor sit amet, consectetur</p>

        <div class="owl-carousel owl-theme" id="pd-n-e-slider">
            <div class="item text-center">

                <div class="pd-cert-card">
                    <img src="<?php// echo bloginfo('template_url'); ?>/assets/img/cert-1.png">
                    <h4>Japanese organic <br>
                        Certification</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ducimus itaque voluptatum.</p>
                    <a href="">Read More</a>
                </div>

            </div>



        </div>
    </div>
</section> -->



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