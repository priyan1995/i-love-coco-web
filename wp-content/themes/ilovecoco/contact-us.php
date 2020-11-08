<?php
/*
Template Name: Contact page
*/

get_header();
?>
<div class="pd-contact-wrapper">
    <section class="pd-contact-main-banner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.815297074514!2d79.82118589335941!3d6.921837369631892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1604829672051!5m2!1sen!2slk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>


<section class="pd-contact-card-sec">
    <div class="container">
        <div class="pd-contact-card">
            
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
<?php get_footer();  ?>