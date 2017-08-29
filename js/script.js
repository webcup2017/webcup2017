//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top >700) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar").addClass("navbar-color");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar").removeClass("navbar-color");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$('.carousel').carousel();
