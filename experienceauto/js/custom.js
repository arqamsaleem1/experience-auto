function resizewindow() {
    jQuery("body").css("min-height", jQuery(window).height()), window.matchMedia("(min-width: 768px)").matches;
}

jQuery(document).ready(function() {
    var e = window.location;
    jQuery('ul a[href="' + e + '"]').parent().addClass("active"), jQuery("ul a").filter(function() {
        return this.href == e;
    }).parent().addClass("active").parent().parent().addClass("active"), jQuery("#brand-carousel").owlCarousel({
        items: 6,
        itemsCustom: !1,
        itemsDesktop: [ 1199, 6 ],
        itemsDesktopSmall: [ 980, 4 ],
        itemsTablet: [ 768, 3 ],
        itemsTabletSmall: [ 479, 2 ],
        itemsMobile: [ 320, 1 ],
        singleItem: !1,
        itemsScaleUp: !1,
        slideSpeed: 200,
        paginationSpeed: 800,
        rewindSpeed: 1e3,
        autoPlay: !0,
        stopOnHover: !1,
        navigation: !1,
        navigationText: [ "prev", "next" ],
        rewindNav: !0,
        scrollPerPage: !1,
        pagination: !1,
        paginationNumbers: !1,
        responsive: !0,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        baseClass: "owl-carousel",
        theme: "owl-theme",
        lazyLoad: !1,
        lazyFollow: !0,
        lazyEffect: "fade",
        autoHeight: !1,
        jsonPath: !1,
        jsonSuccess: !1,
        dragBeforeAnimFinish: !0,
        mouseDrag: !0,
        touchDrag: !0,
        transitionStyle: !1,
        addClassActive: !1,
        beforeUpdate: !1,
        afterUpdate: !1,
        beforeInit: !1,
        afterInit: !1,
        beforeMove: !1,
        afterMove: !1,
        afterAction: !1,
        startDragging: !1,
        afterLazyLoad: !1
    }), resizewindow();
}), jQuery(window).load(function() {
    resizewindow(), jQuery(window).resize(function() {
        resizewindow();
    });
});