$(document).ready(function () {
    $("#main_slider").lightSlider({
        item: 2,
        autoWidth: false,
        slideMove: 1,
        slideMargin: 20,
        mode: "slide",
        useCSS: true,
        cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        controls: false,
        easing: 'linear',
        speed: 2000,
        auto: true,
        loop: true,
        pager: true,
        slideEndAnimation: false,
        pause: 5000,
        pauseOnHover: true,
        keyPress: false,
        rtl: false,
        adaptiveHeight: true,
        vertical: false,
        gallery: false,
        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        swipeThreshold: 40,
        responsive: [{
            breakpoint: 481,
            settings: {
                item: 1,
                slideMove: 1
            }
        }]
    });
    $("#cir_slider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1,
        mode: "slide",
        useCSS: true,
        cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        controls: true,
        prevHtml: '&larr;',
        nextHtml: '&rarr;',
        speed: 1000,
        auto: false,
        loop: false,
        slideEndAnimation: !0,
        pause: 3000,
        pauseOnHover: true,
        keyPress: false,
        rtl: false,
        adaptiveHeight: false,
        vertical: false,
        pager: false,
        gallery: false,
        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        responsive: [{
            breakpoint: 481,
            settings: {
                item: 2,
            }
        }]
    });
    $("#last_posts_slider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1,
        mode: "slide",
        useCSS: true,
        cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        controls: true,
        prevHtml: '&larr;',
        nextHtml: '&rarr;',
        speed: 1000,
        auto: false,
        loop: false,
        slideEndAnimation: !0,
        pause: 3000,
        pauseOnHover: true,
        keyPress: false,
        rtl: false,
        adaptiveHeight: true,
        vertical: false,
        pager: false,
        gallery: false,
        enableTouch: true,
        enableDrag: true,
        freeMove: true,
        responsive: [{
            breakpoint: 481,
            settings: {
                item: 2,
            }
        }]
    }); 
});