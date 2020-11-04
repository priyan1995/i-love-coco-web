jQuery(document).ready(function($) {
  
// about-home slider

    $('#pd-abt-main-slider').owlCarousel({
        loop:true,
        margin:5,
        nav:true,
        dots:false,
        animateOut: 'fadeOut',
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('#pd-cert-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        animateOut: 'fadeOut',
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('#pd-n-e-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        animateOut: 'fadeOut',
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    


});


