$(function () {
    "use strict";
    /* Start NiceScroll Plugin */
    $("body").niceScroll();
    /* End NiceScroll Plugin */

    /* Start toggle in sidebar */
    $(".toggle-ul").click(function (e) {
        e.preventDefault();
        $(this).parent().find("> ul.data").slideToggle();
    });

    if ($(window).width() < 767) {
        // hide sidebar
        $(".wrapper aside").addClass("toggle-aside");
        // remove the left margin
        $(".wrapper .content-wrapper").removeClass("content-wrapper-toggle");
        // add the full width to coontent wrapper
        $(".wrapper .content-wrapper").addClass("full-wrapper-content");
    }

    // hide sidebar in media screen (less than 767)
    $(window).resize(function () {
        if ($(this).width() < 767) {
            $(".wrapper aside").addClass("toggle-aside");
            $(".wrapper .content-wrapper").removeClass("content-wrapper-toggle");
            $(".wrapper .content-wrapper").addClass("full-wrapper-content");
            $(".overlay").css("display", "none");
        }
    });

    // toggle sidebar on pressing the list icon
    $(".list-icon").click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        if ($(window).width() < 767) {
            $(".wrapper .content-wrapper").removeClass("content-wrapper-toggle");
            $(".wrapper .content-wrapper").addClass("full-wrapper-content");
            $(".overlay").css("display", "block");
        }
        else {
            $(".wrapper .content-wrapper").toggleClass("content-wrapper-toggle");
            // make the content warpper width = 100%
            $(".wrapper .content-wrapper").toggleClass("full-wrapper-content");
            $(".overlay").css("display", "none");
        }
        $(".wrapper aside").toggleClass("toggle-aside");
    });

    // hide sidebar on pressing the window
    $(".overlay").click(function (e) {
        $(".wrapper aside").addClass("toggle-aside");
        $(".wrapper .content-wrapper").removeClass("content-wrapper-toggle");
        $(".wrapper .content-wrapper").addClass("full-wrapper-content");
        $(this).css("display", "none");
    });
    $(".show-text-box").click(function () {
        $(".text-box").show();
    });
    $(".close").click(function () {
        $(".text-box").hide();
    });
    /* End toggle in sidebar */
    /* Start Request Full Screen Mode */
    $(".full-screen").click(function () {
        toggleFullscreen();
    });
    /* End Request Full Screen Mode */
});