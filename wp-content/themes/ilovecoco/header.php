<!doctype html>
<html <?php language_attributes(); ?> style="margin-top:0 !important">

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--  AOS  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Roboto+Slab:wght@100;300;500;700;800;900&display=swap" rel="stylesheet">

  <!-- ========font awesome ====== -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  

  <!-- owl carousal -->
  <link rel="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <!-- faveicon -->
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/fave.png" type="image/png" sizes="16x16">


  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div class="wrapper" style=" overflow-x: hidden;">
    <div class="header">
      <div class="header-wrap" id="navbar">
        <div class="container-fluid pd-top-bar">

        </div>

        <div class="container pd-menu-bar">
          <div class="row">
            <div class="col-md-3 col-1 pd-logo-col">
              <div class="logo-wrap">
                <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
                  <?php the_custom_logo(); ?>
                </a>
              </div>
            </div>
            <div class="col-md-9 col-12 pd-mob-nav-bar pd-nav-col">

              <nav class="navbar navbar-expand-lg navbar-dark " id="pd_fixed_nav">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>


                <div class="main-menu-wrap collapse navbar-collapse" id="navbarSupportedContent">
                  <?php
                  wp_nav_menu(
                    array(
                      'depth'       => 10,
                      'theme_location'  => 'primary',
                      'container_class' => 'false',
                      'container_id'    => 'navbarNavDropdown',
                      'menu_class'      => 'navbar-nav',
                      'fallback_cb'     => '',
                      'menu_id'         => 'main-menu',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    )
                  );
                  ?>
                </div>

              </nav>

            </div>
            
            <!-- <div class="col-lg-2 pd-top-social">
              <div class="pd-social-links">
                <a href="<?php// echo get_option('facebook_url'); ?>" target="_blank" class="link-fb"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php// echo get_option('twitter_url'); ?>" target="_blank" class="link-linked"><i class="fab fa-linkedin"></i></a>
                <a href="<?php// echo get_option('insta_url'); ?>" target="_blank" class="link-inst"><i class="fab fa-instagram"></i></a>

              </div>
            </div> -->

          </div>
        </div>
      </div>
    </div>

    <script>
      window.onscroll = function() {
        myFunction()
      };

      var navbar = document.getElementById("navbar");
      var stickeyAdded = navbar.offsetTop + 150;
      var sticky = stickeyAdded;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
      }
    </script>