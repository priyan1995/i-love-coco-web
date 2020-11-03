jQuery(document).ready(function($) {
  
// testimonial slider

    $('#pd-testi-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
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

    


});


