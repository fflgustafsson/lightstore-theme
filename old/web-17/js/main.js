$(function() {
    "use strict";

    $('#menu-button, #menu-close-button').on('click touchend', function(e) {
        e.preventDefault();

        $('body').toggleClass('pushed-left');
        $('#menu-button').toggleClass('open');

    });

    $('body').on('click touchend', function(e) {
        var $body = $(this);
        var $target = $(e.target);
        if (($body.hasClass('pushed-left-alt') || $body.hasClass('pushed-left')) && $target.closest('#main-nav').length === 0 && $target.closest('#menu-button').length === 0) {
            e.preventDefault();
            $body.removeClass('pushed-left-alt').removeClass('pushed-left');
        }
    });
    $('#options li a').not('.sub-nav-toggle').on('click', function() {

        $('body').removeClass('pushed-left');

    });
    $('#main-nav a').not('.sub-nav a').on('click', function() {

        $('.sub-nav').stop().slideUp(420, function() {
            $(this).addClass('hidden');
        });
    });
    $('.sub-nav-toggle').on('click touchend', function(e) {
        e.preventDefault();
        var $subNav = $(this).next('.sub-nav');
        if ($subNav.hasClass('hidden')) {
            $subNav.hide().removeClass('hidden').stop().slideDown(420);
        } else {
            $subNav.stop().slideUp(420, function() {
                $(this).addClass('hidden');
            });
        }
    });

    if ($('.banner-textblock').length) {
        $(window).scroll(function() {
            var scrollPos = $(this).scrollTop();
            $('.banner-textblock').not('.touch .banner-textblock').css({
                'top': (-(scrollPos / 7.0)) + "px",
                'opacity': 1 - (scrollPos / 550)
            });
            $('.parallax-banner').not('.touch .parallax-banner').css({
                'transform': 'translate3d(' + "0px" + ", " + ((-scrollPos / 5.0) + "px") + ", " + "0px" + ')'

            });
        });
    }

    $(window).on('scroll resize').trigger('scroll');

});


$(document).ready(function() {

    if ($('body#start').length > 0) {

        $('.lightswitch').click(function() {
//            $('.switch').toggleClass('on');
            $( "body" ).toggleClass( "lightsOff" );     
        });

    }

});