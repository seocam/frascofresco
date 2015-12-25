// JavaScript Document



//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    "use strict";
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});


//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    "use strict";
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// form submit and thanks message print

function j() {
    "use strict";
	document.getElementById('thanks').innerHTML = "THANK YOU ";
	return true;
}








