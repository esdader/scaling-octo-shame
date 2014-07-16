/* global jQuery  */

(function ($, window, document) {

    'use strict';

    var $ddBtn = $('.main-nav-dd-btn'),
        $ddCon    = $('.main-nav-dd-con');

    $ddBtn.on('mouseenter', function () {
        $ddCon.fadeIn(200);
    });

    $ddBtn.on('mouseleave', function () {
        $ddCon.fadeOut(200);
    });


    // kick off owl carousel
    $(document).ready(function () {
        var $nextBtns = $('.carousel-next'),
            $prevBtns = $('.carousel-prev');

        $(".carousel-show-dots").owlCarousel({
            items: 1,
            lazyLoad: true,
            navigation: false,
            lazyFollow: false,
            pagination: true
        });

        $(".carousel-hide-dots").owlCarousel({
            items: 1,
            lazyLoad: true,
            navigation: false,
            lazyFollow: false,
            pagination: false
        });

        $nextBtns.on('click', function () {
            var $owl = $(this).parent().find('.owl-carousel');
            $owl.trigger('owl.next');
        });

        $prevBtns.on('click', function () {
            var $owl = $(this).parent().find('.owl-carousel');
            $owl.trigger('owl.prev');
        });
    });

}) (jQuery, window, document);
