// A $( document ).ready() block.
$( document ).ready(function() {


    //sticky navigation
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 300) {
            $(".bottom_header").addClass("sticky_nav");
        } else {
            $(".bottom_header").removeClass("sticky_nav");
        }
    });

    $(".mobile_bar").click(function(){
        $(".menu_open").slideDown();
    });

    
     // Back to top button
     $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    //new js

    
    

    



});//document ready 