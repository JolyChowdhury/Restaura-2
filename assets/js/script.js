$(function () {
    "use strict";
    // back to top
    $('.top_to').click(function(){
        $('html, body').animate({scrollTop:0}, 1500);
    });
    $(window).scroll(function(){
        var scrolling = $(this).scrollTop();
        if(scrolling > 300){
            $('.top_to').fadeIn(500);
        }
        else {
            $('.top_to').fadeOut(500);
        }
        if(scrolling > 300){
            $('.main_menu').addClass('bg');
        }
        else {
            $('.main_menu').removeClass('bg');
        }
    });

    $(window).on('load', function(){
      $('.pre').delay(500).fadeOut(500);  
    });


    // magnific popup
    $(document).ready(function() {
        $('.vid').magnificPopup({type:'iframe'});
      });


    //animation scroll js
	// var html_body = $('html, body');
    // $('.main_menu a').on('click', function () {
    //     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    //         var target = $(this.hash);
    //         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    //         if (target.length) {
    //             html_body.animate({
    //                 scrollTop: target.offset().top-0
    //             }, 1500, 'easeInOutCubic');
    //             return false;
    //         }
    //     }
    // });

    // var top_to_i= $('.top_to i');
    // var $top_offset = 300;
    // top_to_i.on('click',function(){
    //     html_body.animate({
    //         scrollTop:0
    //     },700);
    // });



});