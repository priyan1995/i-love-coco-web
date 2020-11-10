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


    <section class="pd-prod-cat-sec">

        <div class="container">
            <h1 class="text-center"> <?php echo  $al_cat_name; ?></h1>
            <div class="text-center"> <?php echo term_description(); ?></div>
            <div class="row">

            </div>
        </div>


    </section>

</div>

<?php get_footer(); ?>