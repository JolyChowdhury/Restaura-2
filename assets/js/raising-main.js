jQuery(document).ready(function() {
    jQuery(".hero-carousel").owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 4500,
        navigation: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
    });


    var owl = jQuery('.hit-carousel');
    owl.owlCarousel({
        margin: 10,
        //nav: true,
        //navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],

        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        stagePadding: 70,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            960: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function(e) {
        if (e.deltaY > 0) {
            owl.trigger('prev.owl');
        } else {
            owl.trigger('next.owl');
        }
        e.preventDefault();
    });

    jQuery(".js-example-tags").select2({
        tags: true
    });


});