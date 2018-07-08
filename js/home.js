$(document).ready(function () {
    /* Видео */
    $(function () {

        $("#about_eso_video_container ").click(function () {
            var a = $('.video_wrapper', this).attr("data-youtube");
            $('.video_wrapper', this).html('<iframe src="https://www.youtube.com/embed/' + a + '?showinfo=0&rel=0&autoplay=1"  class="video_testimonial" allowfullscreen></iframe>').css("z-index", "19");
            $(this).children('.about_esoteric_title').hide();
        });
    });
    // $("#main_slider").lightSlider({
    //     item: 1,
    //     autoWidth: false,
    //     slideMove: 1,
    //     slideMargin: 20,
    //     mode: "slide",
    //     useCSS: true,
    //     cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    //     controls: false,
    //     easing: 'linear',
    //     speed: 2000,
    //     auto: false,
    //     loop: true,
    //     pager: true,
    //     slideEndAnimation: false,
    //     pause: 5000,
    //     pauseOnHover: true,
    //     keyPress: false,
    //     rtl: false,
    //     adaptiveHeight: true,
    //     vertical: false,
    //     gallery: false,
    //     enableTouch: true,
    //     enableDrag: true,
    //     freeMove: true,
    //     swipeThreshold: 40,
    //     responsive: [{
    //         breakpoint: 481,
    //         settings: {
    //             item: 1,
    //             slideMove: 1
    //         }
    //     }]
    // });
    
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
                autoWidth: true,
                item: 2,
                slideMargin:10,
            }

        }]
    });
    /*Проверка почты */
    $(function () {
        var check = $('.check', this),
            email = $('.main_form_email', this),
            button = $('.main_form_button', this);

        $("body").on("submit", ".main_form", function () {
            var check = $('.check', this),
                reNone = /.+/,
                email = $('.main_form_email', this),
                button = $('.main_form_button', this);
            if (!email.val().match(reNone)) {
                email.css("border", "1px solid red");
                button.text('Введите email');
                return false;
            };
            if (!check.prop("checked")) {
                check.next().css("color", "red");
                button.text('Подтвердите соглашение');
                return false;
            };
        });
        email.click(function () {
            email.css("border-color", "rgba(85, 94, 124, .3)");
            button.text('Получить материалы');
        });
        email.keypress(function () {
            email.css("border-color", "rgba(85, 94, 124, .3)");
            button.text('Получить материалы');
        });
        check.click(function () {
            check.next().css("color", "rgba(17, 17, 18, .8)");
            button.text('Получить материалы');
        });
    });
    /*Конец документа*/
});