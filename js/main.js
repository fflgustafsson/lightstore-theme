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

    $('.lightswitch').click(function() {
        $( "body" ).toggleClass( "lightsOff" );     
    });

    $('.lightstore__shop__header .search input[type=submit]').attr('value', '');

    // Från shopper-temat
    $('.flicker-example').flicker({
        dot_navigation: false
    });    
    $('#header_menu_id').slicknav();    
    $('.header_spacing').css('height', $('#header').outerHeight() + 'px');
    $('.fullplate').css('height', ($(window).height() - $('#header').outerHeight()) + 'px');
        $('.header_menu li').hover(
            function () {
                $('ul:first', this).css('display','block');
     
            }, 
            function () {
                $('ul:first', this).css('display','none');         
            }
        );                          
    $(".scroller").on("click",function(){
        //$(".webplate-content").animate({scrollTop:d},1e3,"easeInOutCubic");
        $("html, body").animate({ scrollTop: $('.fullplate').outerHeight() }, "slow");
        //alert('test');
    });   

});

$(window).load(function() {
    $('.header_spacing').css('height', $('#header').outerHeight() + 'px');
    $('.fullplate').css('height', ($(window).height() - $('#header').outerHeight()) + 'px');
});
$(window).scroll(function() {
    $('.header_spacing').css('height', $('#header').outerHeight() + 'px');
});
$(window).resize(function() {
    $('.header_spacing').css('height', $('#header').outerHeight() + 'px');
});