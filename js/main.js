/* global jQuery  */

(function ($, window) {

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
        $(".owl-carousel").owlCarousel({
            items: 1,
            lazyLoad: true,
            navigation: true,
            lazyFollow: false,
            pagination: true
        });
    });

}) (jQuery, window);
