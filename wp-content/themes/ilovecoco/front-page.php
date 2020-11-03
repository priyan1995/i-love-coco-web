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
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cert-1.png">
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











<?php
get_footer();

?>