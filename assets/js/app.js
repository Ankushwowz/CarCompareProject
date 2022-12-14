jQuery(function ($) {
    "use strict";
    $(".main-nav").parent().css("position", "static").parent().css("position", "relative");
    $(".menu-full").each(function () {
        $(this).parent().addClass("menu-justify");
    });
    if ($("#offcanvas-opener").length > 0) {
        $("#offcanvas-opener").on("click", function (event) {
            event.preventDefault();
            $("body").addClass("offcanvas");
            $(".offcanvas-toggler").addClass("active");
        });
    }
    if ($("#offcanvas-closer").length > 0) {
        $("#offcanvas-closer, .offcanvas-overlay, .mobile-nav>ul>li:not(.has-child)>a").on("click", function (event) {
            $("body").removeClass("offcanvas");
            $(".offcanvas-toggler").removeClass("active");
        });
    }
    var submenuLiA = $(".mobile-nav li.has-child > a");
    var submenuUl = $(".mobile-nav ul.dropdown-items");
    submenuUl.addClass("submenu-hidden");
    if (submenuLiA.length > 0) {
        submenuLiA.on("click", function (e) {
            e.preventDefault();
            var submenuVisible = $(".mobile-nav ul.dropdown-items:not(.submenu-hidden)"),
                submenuParent = $(this).closest("li.has-child"),
                submenInner = submenuParent.children("ul.dropdown-items");
            submenInner.slideToggle(200).toggleClass("submenu-hidden");
            var openULschildUL = submenInner.find("ul.dropdown-items");
            var openULschildUlLi = openULschildUL.parent("li.has-child");
            openULschildUlLi.removeClass("children-open");
            if (!openULschildUL.hasClass("submenu-hidden")) {
                openULschildUL.addClass("submenu-hidden").hide();
            }
            if (!submenInner.hasClass("submenu-hidden")) {
                submenuParent.addClass("children-open");
            } else {
                submenuParent.removeClass("children-open");
            }
        });
    }
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 200) {
            $(".sticky").addClass("sticky-header");
            if ($("#header").hasClass("full-header")) {
                $(".sticky").removeClass("static-header");
            }
        } else {
            $(".sticky").removeClass("sticky-header");
            if ($("#header").hasClass("full-header")) {
                $(".sticky").addClass("static-header");
            }
        }
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".go-top").addClass("active");
        } else {
            $(".go-top").removeClass("active");
        }
    });
    $(".go-top").click(function (event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 500);
    });
});
