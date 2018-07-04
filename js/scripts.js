$(document).ready(function () {

    /* Видео */
    $(function () {

        $("#about_eso_video_container ").click(function () {
            var a = $('.video_wrapper', this).attr("data-youtube");
            $('.video_wrapper', this).html('<iframe src="https://www.youtube.com/embed/' + a + '?showinfo=0&rel=0&autoplay=1"  class="video_testimonial" allowfullscreen></iframe>').css("z-index", "19");
            $(this).children('.about_esoteric_title').hide();
        });
    });


    /*FAQ*/
    $(function () {
        $('.faq_title').on('click', function () {
            var a = $('span', this);
            if (a.text() == '+') {
                a.text('-');
                $(this).next().slideDown(500);
            } else {
                a.text('+');
                $(this).next().slideUp(500);

            }
        });
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
    $(function () {
        $("#menu_icon").on("click", function () {
            if (!$(this).hasClass("clicked")) {
                $(this).addClass("clicked");
                $(".upper_span").addClass("upper_span_opened");
                $(".middle_span").addClass("middle_span_opened");
                $(".lower_span").addClass("lower_span_opened");
                $("#menu_container").delay(300).css({
                    left: "0",
                    transition: "all .65s ease-out"
                })
            } else {
                $(this).delay(300).removeClass("clicked");
                $(".upper_span").removeClass("upper_span_opened");
                $(".middle_span").removeClass("middle_span_opened");
                $(".lower_span").removeClass("lower_span_opened");
                $("#menu_container").css({
                    left: "-999px",
                    transition: "all .65s ease-in-out"
                });
                $("#menu_icon").delay(300).removeClass("clicked");
                $(".upper_span").removeClass("upper_span_opened");
                $(".middle_span").removeClass("middle_span_opened");
                $(".lower_span").removeClass("lower_span_opened")
            }
        });
    });
    $(function () {
        $(window).scroll(function () {
            if ($('body').width() < 992) {
                if ($(this).scrollTop() >= 150) {

                    $("#menu_icon").css({
                        "position": "fixed",
                        "top": "33px"
                    });

                } else {
                    $("#menu_icon").css({
                        "position": "absolute",
                        "top": "0"
                    });

                }
            }
            if ($('body').width() < 379) {
                if ($(this).scrollTop() >= 60) {

                    $("#menu_icon").css({
                        "position": "fixed",
                        "top": "33px"
                    });

                } else {
                    $("#menu_icon").css({
                        "position": "absolute",
                        "top": "-140px"
                    });

                }
            }
        })
    });

    $(function (f) {
        var element = f('#up');
        f(window).scroll(function () {
            element['fade' + (f(this).scrollTop() > 200 ? 'In' : 'Out')](500);
        });
        $('#up').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
        });
    });

    /*Конец документа*/
});